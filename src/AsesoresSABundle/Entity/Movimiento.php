<?php

namespace AsesoresSABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movimiento
 *
 * @ORM\Table(name="movimiento", uniqueConstraints={@ORM\UniqueConstraint(name="siglaMovimiento", columns={"siglaMovimiento"})})
 * @ORM\Entity
 */
class Movimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idMovimiento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmovimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="siglaMovimiento", type="string", length=5, nullable=false)
     */
    private $siglamovimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoMovimiento", type="string", length=1, nullable=true)
     */
    private $estadomovimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreMovimiento", type="string", length=20, nullable=true)
     */
    private $nombremovimiento;



    /**
     * Get idmovimiento
     *
     * @return integer 
     */
    public function getIdmovimiento()
    {
        return $this->idmovimiento;
    }

    /**
     * Set siglamovimiento
     *
     * @param string $siglamovimiento
     * @return Movimiento
     */
    public function setSiglamovimiento($siglamovimiento)
    {
        $this->siglamovimiento = $siglamovimiento;

        return $this;
    }

    /**
     * Get siglamovimiento
     *
     * @return string 
     */
    public function getSiglamovimiento()
    {
        return $this->siglamovimiento;
    }

    /**
     * Set estadomovimiento
     *
     * @param string $estadomovimiento
     * @return Movimiento
     */
    public function setEstadomovimiento($estadomovimiento)
    {
        $this->estadomovimiento = $estadomovimiento;

        return $this;
    }

    /**
     * Get estadomovimiento
     *
     * @return string 
     */
    public function getEstadomovimiento()
    {
        return $this->estadomovimiento;
    }

    /**
     * Set nombremovimiento
     *
     * @param string $nombremovimiento
     * @return Movimiento
     */
    public function setNombremovimiento($nombremovimiento)
    {
        $this->nombremovimiento = $nombremovimiento;

        return $this;
    }

    /**
     * Get nombremovimiento
     *
     * @return string 
     */
    public function getNombremovimiento()
    {
        return $this->nombremovimiento;
    }
}
