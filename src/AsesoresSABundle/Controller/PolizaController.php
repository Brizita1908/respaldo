<?php

namespace AsesoresSABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AsesoresSABundle\Entity\Anexo;
use AsesoresSABundle\Entity\Pago;
use AsesoresSABundle\Entity\Poliza;
use AsesoresSABundle\Entity\Transaccion;
use AsesoresSABundle\Form\AnexoType;
use AsesoresSABundle\Form\PagoType;
use AsesoresSABundle\Form\PolizaType;
use AsesoresSABundle\Form\TransaccionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Knp\Snappy;



class PolizaController extends Controller
{
    /**
     * @Route("/poliza/nueva", name="nuevaPoliza")
     */
    public function nuevaPolizaAction(Request $request) {
        $transaccion = new Transaccion();
        $anexo = new Anexo();
        $poliza = new Poliza();
        $pago = new Pago();
        
        $formAnexo = $this->createForm(new AnexoType(), $anexo);
        $formPoliza = $this->createForm(new PolizaType(), $poliza);
        $formPago = $this->createForm(new PagoType(), $pago);
        $form = $this->createForm(new TransaccionType(), $transaccion);

        $form->handleRequest($request);
        $formPoliza->handleRequest($request);
        $formPago->handleRequest($request);
        $formAnexo->handleRequest($request);
        
        
        
        if ($formAnexo->isValid()){
            
            return new Response($poliza->getNumeropoliza());
            /*
            $em = $this->getDoctrine()->getManager();
            $em->persist($poliza);
            $metadata = $em->getClassMetaData(get_class($poliza));
            $em->flush();*/
        }

        return $this->render(
                "AsesoresSABundle:Default:transaccion.html.twig", array("form"=>$form->createView(),
                "formAnexo"=>$formAnexo->createView(),"formPoliza"=>$formPoliza->createView(),"formPago"=>$formPago->createView()));
    }  
    
    /**
     * @Route("/", name="pdf")
     */
    public function pdfAction(Request $request) {
        
        $html = $this->renderView('AsesoresSABundle:Default:listarTransaccion.html.twig');

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html,
                    array('lowquality' => false,
                    'print-media-type' => true,
                    'encoding' => 'utf-8',
                    'page-size' => 'A4',
                    'outline-depth' => 8,
                    'orientation' => 'Portrait',
                    'title'=> 'Personal con Certificado',
                    'user-style-sheet'=> 'css/estilos.css',
                    'header-right'=>'Pag. [page] de [toPage]',
                    'header-font-size'=>7,
                    )),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="file.pdf"'
            )
        );
    }
    
}
