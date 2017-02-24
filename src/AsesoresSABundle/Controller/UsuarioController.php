<?php

namespace AsesoresSABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AsesoresSABundle\Entity\Usuarios;
use AsesoresSABundle\Entity\Perfil;
use AsesoresSABundle\Form\UsuariosType;
use AsesoresSABundle\Form\PerfilType;

class UsuarioController extends Controller
{ 
    /**
     * @Route("/usuario/listar", name="listarUsuario")
     */ 
    
    public function listarUsuarioAction() {
        
        $em=$this->getDoctrine()->getManager();
	$Usuarios=$em->getRepository('AsesoresSABundle:Usuarios')->findAll();
           
        return $this->render(
                "AsesoresSABundle:Default:listarUsuarios.html.twig", array("usuarios"=>$Usuarios
                ));
    }
    
    
    /**
     * @Route("/usuario/nuevo", name="nuevoUsuario")
     */
    
    public function nuevoUsuarioAction(Request $request) {
        
        
        $usuario = new Usuarios();
        $form = $this->createForm(new UsuariosType(), $usuario);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            
            $user = $usuario;

            $password = $this->get('security.password_encoder')
                ->encodePassword($usuario, $usuario->getContrasenausuario());
            $user->setContrasenausuario($password);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $metadata = $em->getClassMetaData(get_class($user));
            $em->flush();  
            return $this->redirectToRoute("nuevoUsuario");
        }
        
        return $this->render(
                "AsesoresSABundle:Default:usuario.html.twig", array("form"=>$form->createView()
                ));
    }
    
    /**
     * @Route("/usuario/editar/{nombreusuario}", name="editarUsuario")
     */
    
    public function editarUsuarioAction(Request $request, $nombreusuario) {
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('AsesoresSABundle:Usuarios')->findOneByNombreusuario($nombreusuario);
        
        $form = $this->createForm(new UsuariosType(), $usuario);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            
            $em->persist($usuario);
            $metadata = $em->getClassMetaData(get_class($usuario));
            $em->flush();  
        }
        
        return $this->render(
                "AsesoresSABundle:Default:usuario.html.twig", array("form"=>$form->createView()
                ));
    }

}