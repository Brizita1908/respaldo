<?php

namespace AsesoresSABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


class TransaccionController extends Controller
{
    /**
     * @Route("/transaccion/ver", name="verTransaccion")
     */
    public function verTransaccionAction(Request $request) {
        //$em=$this->getDoctrine()->getManager();
	//$cliente=$em->getRepository('AsesoresSABundle:Cliente')->findAll();
        
        $em=$this->getDoctrine()->getManager();
        $transacciones=$em->getRepository('AsesoresSABundle:Transaccionanexo')->findAll();
        
        foreach($transacciones as $ta){
            $ta->getIdtransaccion()->getFechaentrega() ? $ta->getIdtransaccion()->setFechaentrega($ta->getIdtransaccion()->getFechaentrega()->format('Y-m-d')) : null;
            $ta->getIdtransaccion()->getFechasolicitud() ? $ta->getIdtransaccion()->setFechasolicitud($ta->getIdtransaccion()->getFechasolicitud()->format('Y-m-d')) : null;
//            $ta->getIdanexo()->getIniciovigenciaanexo() ? $ta->getIdanexo()->setIniciovigenciaanexo($ta->getIdanexo()->getIniciovigenciaanexo()->format('Y-m-d')) : null;
//            $ta->getIdanexo()->getFinvigenciaanexo() ? $ta->getIdanexo()->setFinvigenciaanexo($ta->getIdanexo()->getFinvigenciaanexo()->format('Y-m-d')) : null;
        }
  
	        
        return $this->render(
                "AsesoresSABundle:Default:listarTransaccion.html.twig", array("transacciones"=>$transacciones
                ));
    } 
    
    /**
     * @Route("/anexo/consultaAllTransaccion", options={"expose"=true} , name="consultaAllTransaccion")
     */
    public function consultaAllTransaccion(Request $request) {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        $em=$this->getDoctrine()->getManager();
        $transacciones=$em->getRepository('AsesoresSABundle:Transaccionanexo')->findAll();
        
        foreach($transacciones as $ta){
//            $ta->getIdtransaccion()->getFechaentrega() ? $ta->getIdtransaccion()->setFechaentrega($ta->getIdtransaccion()->getFechaentrega()->format('Y-m-d')) : null;
//            $ta->getIdtransaccion()->getFechasolicitud() ? $ta->getIdtransaccion()->setFechasolicitud($ta->getIdtransaccion()->getFechasolicitud()->format('Y-m-d')) : null;
            
        }
                
	return new Response($serializer->serialize($transacciones, 'json'), 200, array('Content-Type'=>'application/json'));
    }
    
    /**
     * @Route("/", name="pdf")
     */
    public function pdfAction(Request $request) {
        
        $em=$this->getDoctrine()->getManager();
        $transacciones=$em->getRepository('AsesoresSABundle:Transaccionanexo')->findAll();
        
        foreach($transacciones as $ta){
            $ta->getIdtransaccion()->getFechaentrega() ? $ta->getIdtransaccion()->setFechaentrega($ta->getIdtransaccion()->getFechaentrega()->format('Y-m-d')) : null;
            $ta->getIdtransaccion()->getFechasolicitud() ? $ta->getIdtransaccion()->setFechasolicitud($ta->getIdtransaccion()->getFechasolicitud()->format('Y-m-d')) : null;
            //$ta->getIdanexo()->getIniciovigenciaanexo() ? $ta->getIdanexo()->setIniciovigenciaanexo($ta->getIdanexo()->getIniciovigenciaanexo()->format('Y-m-d')) : null;
            //$ta->getIdanexo()->getFinvigenciaanexo() ? $ta->getIdanexo()->setFinvigenciaanexo($ta->getIdanexo()->getFinvigenciaanexo()->format('Y-m-d')) : null;
        }
        
        $this->get('knp_snappy.pdf')->generateFromHtml(
            $this->renderView(
                'AsesoresSABundle:Default:listarTransaccion.html.twig',
                array(
                    'transacciones'  => $transacciones
//                    'orientation' => 'landscape'
//                    'enable-javascript' => true, 
//                    'javascript-delay' => 1000, 
//                    'no-stop-slow-scripts' => true, 
//                    'no-background' => false, 
//                    'lowquality' => false,
//                    'page-size' => 'A4',
//                    'encoding' => 'utf-8',
//                    'images' => true,
//                    'cookie' => array(),
//                    'dpi' => 300,
//                    'image-dpi' => 300,
//                    'enable-external-links' => true,
//                    'enable-internal-links' => true
                    
                )
            ),
            'D:/file.pdf'
        );
        
//        $html = $this->renderView('AsesoresSABundle:Default:listarTransaccion.html.twig', array(
//            'transacciones'  => $transacciones
//        ));
//
//        return new Response(
//            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
//            200,
//            array(
//                'Content-Type'          => 'application/pdf',
//                'Content-Disposition'   => 'D:/; filename="file.pdf"'
//            ), 'D:/file.pdf'
//        );
        
    }
    
}
