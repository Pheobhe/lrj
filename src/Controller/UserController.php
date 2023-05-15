<?php

namespace App\Controller;


use App\Entity\User;
use App\Form\UserType;
use App\Form\ProfileType;
use App\Table\UserTable;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use HelloSebastian\HelloBootstrapTableBundle\HelloBootstrapTableFactory;
use Symfony\Component\Security\Core\User\UserInterface;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/', name: 'user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository, Request $request, HelloBootstrapTableFactory $tableFactory): Response
    {
        $table = $tableFactory->create(UserTable::class);

        $table->handleRequest($request);
        if ($table->isCallback()) {
            return $table->getResponse();
        }

        if(!$this->isGranted('ROLE_SUPER_ADMIN')){
            return $this->redirectToRoute('index');
        } 

        if(!$this->isGranted('ROLE_USER')){
            return $this->redirectToRoute('index');
        } 
        
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
            'table' => $table->createView()
        ]);
    }

    #[Route('/new', name: 'user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordEncoder): Response
    {
        $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');

        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $passwordEncoder->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/change_state/{id}', name: 'change_user_state', methods: ['GET', 'POST'])]
    public function changeState(User $user, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');

        // Toggle del estado 
        $user->toggleRemoved();
        // Persisto el usuario
        $entityManager->persist($user);
        $entityManager->flush();
        // Mensaje de redirección y vuelvo
        $this->addFlash("exito", "Se ha modificado el estado del usuario ");
        return $this->redirectToRoute('user_index');
    }

    #[Route('/edit/{id}', name: 'user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordEncoder): Response
    {
        $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN', $user);
        $form = $this->createForm(UserType::class, $user);
        $user = $this->saveUpdate($form,$user,$entityManager,$request,$passwordEncoder);

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    
    private function saveUpdate($form,$user,$entityManager,$request,$passwordEncoder){
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('password')->getData()){
                $user->setPassword(
                    $passwordEncoder->hashPassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );
            }
            $entityManager->flush();
            $this->addFlash('success', 'Usuario guardado exitosamente');
        }
        return $user;
    }

    #[Route('/profile', name: 'user_profile', methods: ['GET', 'POST'])]
    public function profile(Request $request, EntityManagerInterface $entityManager, UserInterface $user, UserPasswordHasherInterface $passwordEncoder): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $user = $this->saveUpdate($form,$user,$entityManager,$request,$passwordEncoder);

        return $this->render('user/profile.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    
    #[Route('/{id}', name: 'user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN');

        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
    }
}
