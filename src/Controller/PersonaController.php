<?php

namespace App\Controller;

use App\Entity\Persona;
use App\Form\PersonaType;
use App\Repository\PersonaRepository;
use App\Table\PersonaTable;
use HelloSebastian\HelloBootstrapTableBundle\HelloBootstrapTableFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/persona')]
class PersonaController extends AbstractController
{
    #[Route('/', name: 'app_persona_index', methods: ['GET'])]
    public function index(PersonaRepository $personaRepository, Request $request, HelloBootstrapTableFactory $tableFactory): Response
    {

        $table = $tableFactory->create(PersonaTable::class);

        $table->handleRequest($request);
        if ($table->isCallback()) {
            return $table->getResponse();
        }

        return $this->render('persona/index.html.twig', [
            'table' => $table->createView()
        ]);
    }

    #[Route('/new', name: 'app_persona_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PersonaRepository $personaRepository): Response
    {
        $persona = new Persona();

        $form = $this->createForm(PersonaType::class, $persona);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $persona->getNombre()) {
            if (!$form->isValid()) {
                $opcion2 = $personaRepository->findOneBy(['nombre' => $persona->getNombre()]);
                if (!$opcion2->getRemoved()) {
                    goto returnPage;
                }
                $persona = $opcion2->toogleRemoved();
            }
            $personaRepository->add($persona, true);

            return $this->redirectToRoute('app_persona_index', [], Response::HTTP_SEE_OTHER);
        }
        returnPage:
        return $this->render('persona/new.html.twig', [
            'persona' => $persona,
            'form' => $form,

        ]);
    }

    #[Route('/{id}', name: 'app_persona_show', methods: ['GET'])]
    public function show(Persona $persona): Response
    {
        return $this->render('persona/show.html.twig', [
            'persona' => $persona,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_persona_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Persona $persona, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OrganismoType::class, $persona);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_persona_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('persona/edit.html.twig', [
            'persona' => $persona,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_persona_delete', methods: ['POST'])]
    public function delete(Request $request, Persona $persona, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $persona->getId(), $request->request->get('_token'))) {

            $persona->toogleRemoved();
            $entityManager->persist($persona);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_persona_index', [], Response::HTTP_SEE_OTHER);
    }
}
