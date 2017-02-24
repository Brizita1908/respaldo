<?php

namespace AsesoresSABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perfil
 *
 * @ORM\Table(name="perfil")
 * @ORM\Entity
 */
class Perfil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPerfil", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idperfil;

    /**
     * @var string
     *
     * @ORM\Column(name="rolPerfil", type="string", length=20, nullable=true)
     */
    private $rolperfil;



    /**
     * Get idperfil
     *
     * @return integer 
     */
    public function getIdperfil()
    {
        return $this->idperfil;
    }

    /**
     * Set rolperfil
     *
     * @param string $rolperfil
     * @return Perfil
     */
    public function setRolperfil($rolperfil)
    {
        $this->rolperfil = $rolperfil;

        return $this;
    }

    /**
     * Get rolperfil
     *
     * @return string 
     */
    public function getRolperfil()
    {
        return $this->rolperfil;
    }
}
