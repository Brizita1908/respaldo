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
use AsesoresSABundle\Entity\Transaccionanexo;
use AsesoresSABundle\Form\AnexoType;
use AsesoresSABundle\Form\PagoType;
use AsesoresSABundle\Form\PolizaType;
use AsesoresSABundle\Form\TransaccionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Knp\Snappy;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;



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
        $formTransaccion = $this->createForm(new TransaccionType(), $transaccion);

        $formTransaccion->handleRequest($request);
        $formPoliza->handleRequest($request);
        $formPago->handleRequest($request);
        $formAnexo->handleRequest($request);
        

        return $this->render(
                "AsesoresSABundle:Default:transaccion.html.twig", array("formTransaccion"=>$formTransaccion->createView(),
                "formAnexo"=>$formAnexo->createView(),"formPoliza"=>$formPoliza->createView(),"formPago"=>$formPago->createView()));
    }
    
    
    /**
     * @Route("/poliza/registraPoliza", options={"expose"=true} , name="registraPoliza")
     */
    public function registraPoliza(Request $request) {
        $numeropoliza = $request->request->get('nropoliza');
        $idaseguradora = $request->request->get('idaseguradora');
        $idcliente = $request->request->get('idcliente');
        
        $em=$this->getDoctrine()->getManager();
	$cliente=$em->getRepository('AsesoresSABundle:Cliente')->findOneByIdcliente($idcliente);
        $aseguradora=$em->getRepository('AsesoresSABundle:Aseguradora')->findOneByIdaseguradora($idaseguradora);
        
        $poliza = new Poliza();
        
        $poliza->setNumeropoliza($numeropoliza);
	$poliza->setIdaseguradora($aseguradora);
        $poliza->setIdcliente($cliente);
        
        $em->persist($poliza);
        $em->flush();
        
	return new Response("La poliza ".$numeropoliza." ha sido registrada exitosamente.");
    } 
    
    /**
     * @Route("/poliza/consultaPolizaById", options={"expose"=true} , name="consultaPoliza")
     */
    public function consultaPolizaById(Request $request) {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $nroPoliza = $request->request->get('nropoliza');
        $em=$this->getDoctrine()->getManager();
	$poliza=$em->getRepository('AsesoresSABundle:Poliza')->findOneByNumeropoliza($nroPoliza);
	return new Response($serializer->serialize($poliza, 'json'), 200, array('Content-Type'=>'application/json'));
    }     
    
    /**
     * @Route("/anexo/consultaAnexosByIdPoliza", options={"expose"=true} , name="consultaAnexos")
     */
    public function consultaAnexosByIdPoliza(Request $request) {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $idPoliza = $request->request->get('idpoliza');
        $em=$this->getDoctrine()->getManager();
        $anexos=$em->getRepository('AsesoresSABundle:Anexo')->findByIdpoliza($idPoliza);
        foreach($anexos as $anexo){
            $anexo->setIniciovigenciaanexo($anexo->getIniciovigenciaanexo()->format('Y-m-d'));
            $anexo->setFinvigenciaanexo($anexo->getFinvigenciaanexo()->format('Y-m-d'));
        }
	return new Response($serializer->serialize($anexos, 'json'), 200, array('Content-Type'=>'application/json'));
    }
    
    /**
     * @Route("/anexo/consultaTransaccionesByIdAnexo", options={"expose"=true} , name="consultaTransacciones")
     */
    public function consultaTransaccionesByIdAnexo(Request $request) {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $idAnexo = $request->request->get('idanexo');
        $em=$this->getDoctrine()->getManager();
        $anexo=$em->getRepository('AsesoresSABundle:Anexo')->findOneByIdanexo($idAnexo);
        $transaccionAnexo=$em->getRepository('AsesoresSABundle:Transaccionanexo')->findByIdanexo($anexo);
        foreach($transaccionAnexo as $ta){
            $ta->getIdtransaccion()->getFechaentrega() ? $ta->getIdtransaccion()->setFechaentrega($ta->getIdtransaccion()->getFechaentrega()->format('Y-m-d')) : null;
            $ta->getIdtransaccion()->getFechasolicitud() ? $ta->getIdtransaccion()->setFechasolicitud($ta->getIdtransaccion()->getFechasolicitud()->format('Y-m-d')) : null;
        }
	return new Response($serializer->serialize($transaccionAnexo, 'json'), 200, array('Content-Type'=>'application/json'));
    }
    
    /**
     * @Route("/poliza/consultaClienteById", options={"expose"=true} , name="consultaCliente")
     */
    public function consultaClienteById(Request $request) {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $idCliente = $request->request->get('idcliente');
        $em=$this->getDoctrine()->getManager();
	$cliente=$em->getRepository('AsesoresSABundle:Cliente')->findOneByIdcliente($idCliente);
	return new Response($serializer->serialize($cliente, 'json'), 200, array('Content-Type'=>'application/json'));
    }
    
    /**
     * @Route("/poliza/consultaMovInTransaccion", options={"expose"=true} , name="consultaMovInTransaccion")
     */
    public function consultaMovInTransaccion(Request $request) {
        $idAnexo = $request->request->get('idanexo');
        $idMovimiento = $request->request->get('idmovimiento');
        $em=$this->getDoctrine()->getManager();
        $anexo=$em->getRepository('AsesoresSABundle:Anexo')->findOneByIdanexo($idAnexo);
        $movimiento=$em->getRepository('AsesoresSABundle:Movimiento')->findOneByIdmovimiento($idMovimiento);
        $transaccionAnexo=$em->getRepository('AsesoresSABundle:Transaccionanexo')->findByIdanexo($anexo);
        $transaccion = null;
        foreach($transaccionAnexo as $ta){
            if($ta->getIdtransaccion()->getIdmovimiento() == $movimiento){
                $transaccion =  $ta->getIdtransaccion()->getIdmovimiento()->getSiglamovimiento();
            }
        }
	return new Response($transaccion);
    }
    
    
    /**
     * @Route("/anexo/consultaAseguradoraById", options={"expose"=true} , name="consultaAseguradora")
     */
    public function consultaAseguradoraById(Request $request) {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $idAseguradora = $request->request->get('idaseguradora');
        $em=$this->getDoctrine()->getManager();
        $aseguradora=$em->getRepository('AsesoresSABundle:Aseguradora')->findByIdaseguradora($idAseguradora);
	return new Response($serializer->serialize($aseguradora, 'json'), 200, array('Content-Type'=>'application/json'));
    }
    /**
     * @Route("/anexo/consultaAnexoById", options={"expose"=true} , name="consultaAnexoById")
     */
    public function consultaAnexoById(Request $request) {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $idPoliza = $request->request->get('idpoliza');
        $nroAnexo = $request->request->get('nroanexo');
        $em=$this->getDoctrine()->getManager();
        $anexo=$em->getRepository('AsesoresSABundle:Anexo')->findOneBy(array('idpoliza' => $idPoliza, 'numeroanexo' => $nroAnexo));
	return new Response($serializer->serialize($anexo, 'json'), 200, array('Content-Type'=>'application/json'));
    }
    
    
    /**
     * @Route("/anexo/consultaAnexoByIdAnexo", options={"expose"=true} , name="consultaAnexoByIdAnexo")
     */
    public function consultaAnexoByIdAnexo(Request $request) {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $idanexo = $request->request->get('idanexo');
        $em=$this->getDoctrine()->getManager();
        $anexo=$em->getRepository('AsesoresSABundle:Anexo')->findOneByIdanexo($idanexo);
        $anexo->setFinvigenciaanexo($anexo->getFinvigenciaanexo()->format('Y-m-d'));
        $anexo->setIniciovigenciaanexo($anexo->getIniciovigenciaanexo()->format('Y-m-d'));
	return new Response($serializer->serialize($anexo, 'json'), 200, array('Content-Type'=>'application/json'));
    }
    
    
    /**
     * @Route("/anexo/registraPago", options={"expose"=true} , name="registraPago")
     */
    public function registraPago(Request $request) {
        //Para el pago
        $tasaPago = $request->request->get('tasaPago');
        $primaPago = $request->request->get('primaPago');
        $porcentajeComisionPago = $request->request->get('porcentajeComisionPago');
        $metodoPago = $request->request->get('metodoPago');
        $numeroCuotasPago = $request->request->get('numeroCuotasPago');
        $comisionPago = $request->request->get('comisionPago');
        
        $pago = new Pago();
        $pago->setTasapago($tasaPago);
        $pago->setPrimapago($primaPago);
        $pago->setPorcentajecomisionpago($porcentajeComisionPago);
        $pago->setMetodopago($metodoPago);
        $pago->setNumerocuotas($numeroCuotasPago);
        $pago->setComisionpago($comisionPago);
        
        $em=$this->getDoctrine()->getManager();
        $em->persist($pago);
        $em->flush();
        
        return new Response($pago->getIdpago());
    }
    
    
    /**
     * @Route("/anexo/registraAnexo", options={"expose"=true} , name="registraAnexo")
     */
    public function registraAnexo(Request $request) {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $idPago = $request->request->get('idPago');
        $idRamo = $request->request->get('idRamo');
        $idPoliza = $request->request->get('idPoliza');
        $inicioVigenciaAnexo = $request->request->get('inicioVigenciaAnexo');
        $finVigenciaAnexo = $request->request->get('finVigenciaAnexo');
        $numeroAnexo = $request->request->get('numeroAnexo');
        $valorTotalAseguradoAnexo = $request->request->get('valorTotalAseguradoAnexo');
        
        try 
        {
            $em=$this->getDoctrine()->getManager();
            $pago = $em->getRepository('AsesoresSABundle:Pago')->findOneByIdpago($idPago);
            $poliza = $em->getRepository('AsesoresSABundle:Poliza')->findOneByIdpoliza($idPoliza);
            $ramo = $em->getRepository('AsesoresSABundle:Ramo')->findOneByIdramo($idRamo);

            $anexo = new Anexo();

            $anexo->setIdpago($pago);
            $anexo->setIdpoliza($poliza);
            $anexo->setIdramo($ramo);
            $anexo->setIniciovigenciaanexo(new \DateTime($inicioVigenciaAnexo));
            $anexo->setFinvigenciaanexo(new \DateTime($finVigenciaAnexo));
            $anexo->setNumeroanexo($numeroAnexo);
            $anexo->setValortotalaseguradoanexo($valorTotalAseguradoAnexo);
            $em->persist($anexo);
            $em->flush();
            
        } catch (Exception $e) {
            console.log($e->getMessage());
         }
        
        
	return new Response($serializer->serialize($anexo, 'json'), 200, array('Content-Type'=>'application/json'));
    }
    
    /**
     * @Route("/anexo/registraTransaccion", options={"expose"=true} , name="registraTransaccion")
     */
    public function registraTransaccion(Request $request) {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $idMovimiento = $request->request->get('idmovimiento');
        $idUsuario = $request->request->get('idusuario');
        $idAnexo = $request->request->get('idanexo');
        $fechaEntrega = $request->request->get('fechaentrega');
        $medioSolicitud = $request->request->get('mediosolicitud');
        $fechaSolicitud = $request->request->get('fechasolicitud');
        $cartaFirmadaEntrega = $request->request->get('cartafirmadaentrega');
        $numeroCartaSolicitud = $request->request->get('numerocartasolicitud');
        $estadoTransaccion = $request->request->get('estadotransaccion');
        
        try 
        {
            $em=$this->getDoctrine()->getManager();
            $movimiento = $em->getRepository('AsesoresSABundle:Movimiento')->findOneByIdmovimiento($idMovimiento);
            $usuario = $em->getRepository('AsesoresSABundle:Usuarios')->findOneByIdusuario($idUsuario);
            
            $transaccion = new Transaccion();
            $cartaFirmadaEntrega ? $transaccion->setCartafirmadaentrega($cartaFirmadaEntrega) : null;
            $transaccion->setEstadotransaccion($estadoTransaccion);
            $fechaEntrega ? $transaccion->setFechaentrega(new \DateTime($fechaEntrega)) : null;
            $fechaSolicitud ? $transaccion->setFechasolicitud(new \DateTime($fechaSolicitud)) : null;
            $transaccion->setIdmovimiento($movimiento);
            $transaccion->setIdusuario($usuario);
            $transaccion->setMediosolicitud($medioSolicitud);
            $numeroCartaSolicitud ? $transaccion->setNumerocartasolicitud($numeroCartaSolicitud): null;
            
            $em->persist($transaccion);
            $em->flush();
            
            $anexo = $em->getRepository('AsesoresSABundle:Anexo')->findOneByIdanexo($idAnexo);
            
            $transaccionanexo = new Transaccionanexo();
            $transaccionanexo->setIdanexo($anexo);
            $transaccionanexo->setIdtransaccion($transaccion);
            $em->persist($transaccionanexo);
            $em->flush();
            
            
        } catch (Exception $e) {
            console.log($e->getMessage());
         }
        
        
	return new Response($serializer->serialize($transaccionanexo, 'json'), 200, array('Content-Type'=>'application/json'));
    }
    
    
    
}
