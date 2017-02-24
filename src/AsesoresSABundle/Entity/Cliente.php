<?php

namespace AsesoresSABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente", uniqueConstraints={@ORM\UniqueConstraint(name="fileCliente", columns={"fileCliente"})})
 * @ORM\Entity
 */
class Cliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCliente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="fileCliente", type="string", length=5, nullable=false)
     */
    private $filecliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreCliente", type="string", length=100, nullable=true)
     */
    private $nombrecliente;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoCliente", type="string", length=100, nullable=true)
     */
    private $apellidocliente;



    /**
     * Get idcliente
     *
     * @return integer 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set filecliente
     *
     * @param string $filecliente
     * @return Cliente
     */
    public function setFilecliente($filecliente)
    {
        $this->filecliente = $filecliente;

        return $this;
    }

    /**
     * Get filecliente
     *
     * @return string 
     */
    public function getFilecliente()
    {
        return $this->filecliente;
    }

    /**
     * Set nombrecliente
     *
     * @param string $nombrecliente
     * @return Cliente
     */
    public function setNombrecliente($nombrecliente)
    {
        $this->nombrecliente = $nombrecliente;

        return $this;
    }

    /**
     * Get nombrecliente
     *
     * @return string 
     */
    public function getNombrecliente()
    {
        return $this->nombrecliente;
    }

    /**
     * Set apellidocliente
     *
     * @param string $apellidocliente
     * @return Cliente
     */
    public function setApellidocliente($apellidocliente)
    {
        $this->apellidocliente = $apellidocliente;

        return $this;
    }

    /**
     * Get apellidocliente
     *
     * @return string 
     */
    public function getApellidocliente()
    {
        return $this->apellidocliente;
    }
}
