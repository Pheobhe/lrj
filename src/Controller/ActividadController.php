<?php

namespace App\Controller;

use App\Entity\Actividad;
use App\Form\ActividadType;
use App\Table\ActividadTable;
use HelloSebastian\HelloBootstrapTableBundle\HelloBootstrapTableFactory;
use App\Repository\ActividadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/actividad')]
class ActividadController extends AbstractController
{
    #[Route('/', name: 'app_actividad_index', methods: ['GET'])]
    public function index( Request $request, HelloBootstrapTableFactory $tableFactory): Response
    {
        $table = $tableFactory->create(ActividadTable::class);

        $table->handleRequest($request);
        if ($table->isCallback()) {
            return $table->getResponse();
        }

        return $this->render('actividad/index.html.twig', [
           'table' => $table->createView()
        ]);
     
    }

    #[Route('/new', name: 'app_actividad_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ActividadRepository $actividadRepository): Response
    {

        $actividad = new Actividad();
        
        $form = $this->createForm(ActividadType::class, $actividad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $actividad->getNombre()) {
            if (!$form->isValid()) {
                $actividad2 = $actividadRepository->findOneBy(['nombre' => $actividad->getNombre()]);
                if (!$actividad2->getRemoved()) {
                    goto returnPage;
                }
                $actividad= $actividad2->toogleRemoved();
            }
            $actividadRepository->add($actividad, true);

            return $this->redirectToRoute('app_actividad_index', [], Response::HTTP_SEE_OTHER);
        }
        returnPage:
        return $this->render('actividad/new.html.twig', [
            'actividad' => $actividad,
            'form' => $form,
        ]);

    }

    #[Route('/{id}', name: 'app_actividad_show', methods: ['GET'])]
    public function show(Actividad $actividad): Response
    {
        return $this->render('actividad/show.html.twig', [
            'actividad' => $actividad,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_actividad_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Actividad $actividad, EntityManagerInterface $entityManager): Response
    {

        $form = $this->createForm(ActividadType::class, $actividad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_actividad_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('actividad/edit.html.twig', [
            'actividad' => $actividad,
            'form' => $form,
        ]);

    }

    #[Route('/{id}', name: 'app_actividad_delete', methods: ['POST'])]
    public function delete(Request $request, Actividad $actividad, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$actividad->getId(), $request->request->get('_token'))) {
            $actividad->toogleRemoved();
            $entityManager->persist($actividad);    
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_actividad_index', [], Response::HTTP_SEE_OTHER);

    }
}
