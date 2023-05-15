<?php

namespace App\Controller;

use App\Form\CargaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Persona;
use App\Entity\Pago;
use App\Entity\Actividad;
//use App\Entity\Respuesta;


use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\Extension\Core\Type\IntegerType as TypeIntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Length;

use function PHPSTORM_META\type;

#[Route('/carga')]
class CargaController extends AbstractController
{
    #[Route('/', name: 'app_carga_index', methods: ['GET', 'POST'])]
        public function index(Request $request ): Response   
        {
        $form = $this-> createForm(type: CargaType::class);
                
                $form->handleRequest($request);
                if ($form->isSubmitted() && $form->isValid()) {
                    $pago = $form -> get('pago')->getData();
                   
                    // return $this->redirectToRoute('app_carga_items', [ 'pago' => $pago->getId(), 'actividad' => 'null', 'pago' => 'null' ]);
                }
                       
            return $this->render('carga/index.html.twig', [
                'controller_name' => 'CargaController',
                'cargaForm' => $form->createView()
            ]);
        }

    // #[Route('/panel/{pago}/{actividad}/{pago}/{pregunta?null}', name: 'app_carga_items', methods: ['GET', 'POST'])]
    //     public function showCarga(Request $request, Pago $pago, Actividad $actividad=null, Pago $pago=null, Pregunta $pregunta=null, ManagerRegistry $doctrine ): Response
    //     {
          
    //         $persona = $this->getUser()->getOrganismo();
    //         if (!$persona) {
    //             throw $this->createNotFoundException("El Usuario no tiene Persona seteado");  
    //         }
           
    //         $actividades = $persona->getActividads(); 
    //         if (!$actividades) {
    //             throw $this->createNotFoundException("El Persona no tiene Actividades cargados");  
    //         }

    //         $pagos = $persona->getLugares();
    //         if (!$pagos) {
    //             throw $this->createNotFoundException("El Persona no tiene Pagos cargados");  
    //         }

    //         if ($actividad == null || $pago == null) {
    //             $actividad = ($actividad!=null) ? $actividad : $actividades[0];
    //             $pago = ($pago!=null) ? $pago : $pagos[0];
    //             return $this->redirectToRoute('app_carga_items', [
    //                'pago' => $pago->getId(),
    //                'actividad' => $actividad->getId(),
    //                'pago' => $pago->getId()
    //             ]);
    //         }

    //         $preguntas = $doctrine->getRepository(Pregunta::class)->getPreguntas($persona, $actividad, $pago);
    //         $formBuilder = $this->createFormBuilder();

    //         if (!$preguntas) {
    //             $form = $formBuilder->getForm();
                
    //             $this->addFlash('danger', "No existen preguntas para el persona $persona, $actividad, en pago $pago.");
    //             return $this->render('carga/showForm.html.twig', [
    //                 'persona' => $persona,
    //                 'pago' => $pago,
    //                 'actividades' => $actividades,
    //                 'actividad' => $actividad,
    //                 'pagos' => $pagos,
    //                 'pago' => $pago,
    //                 'preguntas'=>[],
    //                 'pregunta' => null,
    //                 'opciones' =>[],
    //                 'form' => $form->createView()    
    //             ]);
    //         }
            
    //         $pregunta=($pregunta)?$pregunta:$preguntas[0];

    //         $opciones = $doctrine->getRepository(Opcion::class)->findBy(['pregunta'=>$pregunta, 'removed'=>0],array('nombre' => 'ASC'));
    //         if (count($opciones) < 1 ) {
    //             $this->addFlash('danger', "La pregunta ".$pregunta->getNombre()." no tiene opciones.");
    //         }

    //         $formBuilder->setAction(    
    //             $this->generateUrl('app_carga_items',
    //             [
    //                 'pago' => $pago->getId(), 
    //                 'actividad' => $actividad->getId(), 
    //                 'pago' => $pago->getId(), 
    //                 'pregunta' => $pregunta->getId()
    //             ]
    //             ))
    //         ->setMethod('POST');
                    
    //         $cantInput=1;
    //         foreach ($opciones as $opcion) {
    //             $respuesta = $doctrine->getRepository(Respuesta::class)->findOneBy(
    //                 ['actividad'=>$actividad, 'pago'=>$pago, 'pago' => $pago->getId(), 'opcion'=>$opcion, 'persona'=>$persona]);
    //             $formBuilder->add(
    //                 $opcion->getId(), 
    //                 TypeIntegerType::class, 
    //                 [
    //                     'label' => $opcion->getNombre(),
    //                     'required' => false,
    //                     'data' =>  ($respuesta)? $respuesta->getValor():null,
    //                     'attr' => ['tabindex' => $cantInput++ ],
    //                 ]);
    //         }
            
    //         $form = $formBuilder
    //             ->add('guardar', SubmitType::class, ['label' => 'Guardar '.$pregunta->getNombre(),
    //             'attr' => ['class' => 'btn btn-outline-primary']
    //         ]);

    //         $form = $formBuilder->getForm();

    //         $form->handleRequest($request);

    //         if ($form->isSubmitted() && $form->isValid()) {
    //            $dataList = $form->getData();
    //            $entityManager = $doctrine->getManager();

    //            foreach ($dataList as $id => $data) {
    //                 $opcionPregunta= $doctrine->getRepository(Opcion::class)->find($id);    
    //                 // si la respuesta ya existe no crear otra! 
    //                 // utilizar la existente para permitir editar las respuestas
    //                 $respuesta = $doctrine->getRepository(Respuesta::class)->findOneBy(
    //                     ['actividad'=>$actividad, 'pago'=>$pago, 'pago' => $pago->getId(), 
    //                     'opcion'=>$opcionPregunta, 'persona' => $persona]);
    //                 if (isset($data)) {
    //                     if (!$respuesta) {
    //                         $respuesta = new Respuesta(); 
    //                         $respuesta->setOpcion($opcionPregunta);
    //                         $respuesta->setLugar($pago);
    //                         $respuesta->setPeriodo($pago);
    //                         $respuesta->setActividad($actividad);
    //                         $respuesta->setUser($this->getUser());
    //                         $respuesta->setOrganismo($this->getUser()->getOrganismo());
    //                     }
                        
    //                     $respuesta->setValor($data);
    //                     $respuesta->setUser($this->getUser());
    //                     $respuesta->setCreatedAt(new \DateTime());
                        
    //                     $entityManager->persist($respuesta);
    //                 }
    //             }
    //             $entityManager->flush();
    //             $this->addFlash('success', 'Datos de '.$persona->getNombre().' guardados exitosamente');
    //         } 
                     
    //         return $this->render('carga/showForm.html.twig', [
    //             'cantInput' => $cantInput,
    //             'persona' => $persona,
    //             'pago' => $pago,
    //             'actividad' => $actividad,
    //             'pago' => $pago,
        
    //             'form' => $form->createView()    
    //         ]);
            
    // }

    /**
     * Function that groups an array of associative arrays by some key.
     * 
     * @param {String} $key Property to sort by.
     * @param {Array} $data Array that stores multiple associative arrays.
     */
    // private function group_by($key, $data) {
    //     $result = array();

    //     foreach($data as $val) {
    //         if(array_key_exists($key, $val)){
    //             $result[$val[$key]][] = $val;
    //         }else{
    //             $result[""][] = $val;
    //         }
    //     }

    //     return $result;
    // }

    private function clearInput($string){
        return preg_replace('([^A-Za-z0-9])', '', $string);
    }
}

