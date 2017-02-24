<?php

namespace AsesoresSABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuotas
 *
 * @ORM\Table(name="cuotas", indexes={@ORM\Index(name="idPago", columns={"idPago"})})
 * @ORM\Entity
 */
class Cuotas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCuota", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcuota;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroCuota", type="string", length=10, nullable=true)
     */
    private $numerocuota;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaPagoCuota", type="string", length=10, nullable=true)
     */
    private $fechapagocuota;

    /**
     * @var string
     *
     * @ORM\Column(name="valorCuota", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $valorcuota;

    /**
     * @var string
     *
     * @ORM\Column(name="primaCuota", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $primacuota;

    /**
     * @var \Pago
     *
     * @ORM\ManyToOne(targetEntity="Pago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPago", referencedColumnName="idPago")
     * })
     */
    private $idpago;



    /**
     * Get idcuota
     *
     * @return integer 
     */
    public function getIdcuota()
    {
        return $this->idcuota;
    }

    /**
     * Set numerocuota
     *
     * @param string $numerocuota
     * @return Cuotas
     */
    public function setNumerocuota($numerocuota)
    {
        $this->numerocuota = $numerocuota;

        return $this;
    }

    /**
     * Get numerocuota
     *
     * @return string 
     */
    public function getNumerocuota()
    {
        return $this->numerocuota;
    }

    /**
     * Set fechapagocuota
     *
     * @param string $fechapagocuota
     * @return Cuotas
     */
    public function setFechapagocuota($fechapagocuota)
    {
        $this->fechapagocuota = $fechapagocuota;

        return $this;
    }

    /**
     * Get fechapagocuota
     *
     * @return string 
     */
    public function getFechapagocuota()
    {
        return $this->fechapagocuota;
    }

    /**
     * Set valorcuota
     *
     * @param string $valorcuota
     * @return Cuotas
     */
    public function setValorcuota($valorcuota)
    {
        $this->valorcuota = $valorcuota;

        return $this;
    }

    /**
     * Get valorcuota
     *
     * @return string 
     */
    public function getValorcuota()
    {
        return $this->valorcuota;
    }

    /**
     * Set primacuota
     *
     * @param string $primacuota
     * @return Cuotas
     */
    public function setPrimacuota($primacuota)
    {
        $this->primacuota = $primacuota;

        return $this;
    }

    /**
     * Get primacuota
     *
     * @return string 
     */
    public function getPrimacuota()
    {
        return $this->primacuota;
    }

    /**
     * Set idpago
     *
     * @param \AsesoresSABundle\Entity\Pago $idpago
     * @return Cuotas
     */
    public function setIdpago(\AsesoresSABundle\Entity\Pago $idpago = null)
    {
        $this->idpago = $idpago;

        return $this;
    }

    /**
     * Get idpago
     *
     * @return \AsesoresSABundle\Entity\Pago 
     */
    public function getIdpago()
    {
        return $this->idpago;
    }
}
