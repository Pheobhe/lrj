<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
         //Si es admin que vaya a la pantalla admin
    //    if ($this->isGranted('ROLE_ADMIN')) {
    //        return $this->redirectToRoute('user_admin');
       
    //     } else {
    //         return $this->redirectToRoute('user');
    //     }

        return $this->render('layout/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);

    }
   
    
    public function resetBase(Request $request)
    {
        $procedure_sql = "  SET FOREIGN_KEY_CHECKS = 0;
                            TRUNCATE TABLE imported_files;
                            SET FOREIGN_KEY_CHECKS = 1; ";

        // $em = $this->getDoctrine()->getManager();
        //$proc = $em->getConnection()->prepare($procedure_sql);
        //$proc->execute();
        return $this->redirectToRoute('index');

    }
}
