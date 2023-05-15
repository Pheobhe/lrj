<?php

namespace App\Controller;

use App\Entity\Pago;
use App\Form\PagoType;
use App\Table\PagoTable;
use HelloSebastian\HelloBootstrapTableBundle\HelloBootstrapTableFactory;
use App\Repository\PagoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/pago')]
class PagoController extends AbstractController
{
    #[Route('/', name: 'app_pago_index', methods: ['GET'])]
    public function index(PagoRepository $pagoRepository, Request $request, HelloBootstrapTableFactory $tableFactory): Response
    {   
        $table = $tableFactory->create(PagoTable::class);

        $table->handleRequest($request);
        if ($table->isCallback()) {
            return $table->getResponse();
        }
        return $this->render('pago/index.html.twig', [
            'table' => $table->createView()
        ]);
    }

    #[Route('/new', name: 'app_pago_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PagoRepository $pagoRepository): Response
    {
        $pago = new Pago();
        
        $form = $this->createForm(PagoType::class, $pago);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $pago->getNombre()) {
            if (!$form->isValid()) {
                $pago2 = $pagoRepository->findOneBy(['nombre' => $pago->getNombre()]);
                if (!$pago2->getRemoved()) {
                    goto returnPage;
                }
                $pago= $pago2->toogleRemoved();
            }
            $pagoRepository->add($pago, true);

            return $this->redirectToRoute('app_pago_index', [], Response::HTTP_SEE_OTHER);
        }
        returnPage:
        return $this->render('pago/new.html.twig', [
            'pago' => $pago,
            'form' => $form,
        ]);

    }

    #[Route('/{id}', name: 'app_pago_show', methods: ['GET'])]
    public function show(Pago $pago): Response
    {
        return $this->render('pago/show.html.twig', [
            'pago' => $pago,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_pago_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Pago $pago, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PagoType::class, $pago);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_pago_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('pago/edit.html.twig', [
            'pago' => $pago,
            'form' => $form,
        ]);

    }

    #[Route('/{id}', name: 'app_pago_delete', methods: ['POST'])]

    public function delete(Request $request, Pago $pago, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pago->getId(), $request->request->get('_token'))) {
            $pago->toogleRemoved();
            $entityManager->persist($pago);    
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_pago_index', [], Response::HTTP_SEE_OTHER);
    }

}
