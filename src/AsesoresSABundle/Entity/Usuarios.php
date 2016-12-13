<?php

namespace AsesoresSABundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", indexes={@ORM\Index(name="idPerfil", columns={"idPerfil"})})
 * @ORM\Entity
 */
class Usuarios implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="contrasenaUsuario", type="string", length=10, nullable=true)
     */
    private $contrasenausuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreUsuario", type="string", length=10, nullable=true)
     */
    private $nombreusuario;

    /**
     * @var \Perfil
     *
     * @ORM\ManyToOne(targetEntity="Perfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPerfil", referencedColumnName="idPerfil")
     * })
     */
    private $idperfil;



    /**
     * Get idusuario
     *
     * @return integer 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set contrasenausuario
     *
     * @param string $contrasenausuario
     * @return Usuarios
     */
    public function setContrasenausuario($contrasenausuario)
    {
        $this->contrasenausuario = $contrasenausuario;

        return $this;
    }

    /**
     * Get contrasenausuario
     *
     * @return string 
     */
    public function getContrasenausuario()
    {
        return $this->contrasenausuario;
    }

    /**
     * Set nombreusuario
     *
     * @param string $nombreusuario
     * @return Usuarios
     */
    public function setNombreusuario($nombreusuario)
    {
        $this->nombreusuario = $nombreusuario;

        return $this;
    }

    /**
     * Get nombreusuario
     *
     * @return string 
     */
    public function getNombreusuario()
    {
        return $this->nombreusuario;
    }

    /**
     * Set idperfil
     *
     * @param \AsesoresSABundle\Entity\Perfil $idperfil
     * @return Usuarios
     */
    public function setIdperfil(\AsesoresSABundle\Entity\Perfil $idperfil = null)
    {
        $this->idperfil = $idperfil;

        return $this;
    }

    /**
     * Get idperfil
     *
     * @return \AsesoresSABundle\Entity\Perfil 
     */
    public function getIdperfil()
    {
        return $this->idperfil;
    }
    
     public function getSalt()
    {
        // The bcrypt algorithm doesn't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }
    
     public function getRoles()
    {
        // The bcrypt algorithm doesn't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }
    
     public function getPassword()
    {
        // The bcrypt algorithm doesn't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }
    
     public function getUsername()
    {
        // The bcrypt algorithm doesn't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }
    
     public function eraseCredentials()
    {
        // The bcrypt algorithm doesn't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }
}
