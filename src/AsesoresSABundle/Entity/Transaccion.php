<?php

namespace AsesoresSABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccion
 *
 * @ORM\Table(name="transaccion", indexes={@ORM\Index(name="idMovimiento", columns={"idMovimiento"}), @ORM\Index(name="idUsuario", columns={"idUsuario"})})
 * @ORM\Entity
 */
class Transaccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTransaccion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtransaccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaEntrega", type="datetime", nullable=true)
     */
    private $fechaentrega;

    /**
     * @var string
     *
     * @ORM\Column(name="medioSolicitud", type="string", length=10, nullable=true)
     */
    private $mediosolicitud;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaSolicitud", type="datetime", nullable=true)
     */
    private $fechasolicitud;

    /**
     * @var string
     *
     * @ORM\Column(name="cartaFirmadaEntrega", type="string", length=100, nullable=true)
     */
    private $cartafirmadaentrega;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroCartaSolicitud", type="string", length=10, nullable=true)
     */
    private $numerocartasolicitud;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoTransaccion", type="string", length=1, nullable=true)
     */
    private $estadotransaccion;

    /**
     * @var \Movimiento
     *
     * @ORM\ManyToOne(targetEntity="Movimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMovimiento", referencedColumnName="idMovimiento")
     * })
     */
    private $idmovimiento;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsuario", referencedColumnName="idUsuario")
     * })
     */
    private $idusuario;



    /**
     * Get idtransaccion
     *
     * @return integer 
     */
    public function getIdtransaccion()
    {
        return $this->idtransaccion;
    }

    /**
     * Set fechaentrega
     *
     * @param \DateTime $fechaentrega
     * @return Transaccion
     */
    public function setFechaentrega($fechaentrega)
    {
        $this->fechaentrega = $fechaentrega;

        return $this;
    }

    /**
     * Get fechaentrega
     *
     * @return \DateTime 
     */
    public function getFechaentrega()
    {
        return $this->fechaentrega;
    }

    /**
     * Set mediosolicitud
     *
     * @param string $mediosolicitud
     * @return Transaccion
     */
    public function setMediosolicitud($mediosolicitud)
    {
        $this->mediosolicitud = $mediosolicitud;

        return $this;
    }

    /**
     * Get mediosolicitud
     *
     * @return string 
     */
    public function getMediosolicitud()
    {
        return $this->mediosolicitud;
    }

    /**
     * Set fechasolicitud
     *
     * @param \DateTime $fechasolicitud
     * @return Transaccion
     */
    public function setFechasolicitud($fechasolicitud)
    {
        $this->fechasolicitud = $fechasolicitud;

        return $this;
    }

    /**
     * Get fechasolicitud
     *
     * @return \DateTime 
     */
    public function getFechasolicitud()
    {
        return $this->fechasolicitud;
    }

    /**
     * Set cartafirmadaentrega
     *
     * @param string $cartafirmadaentrega
     * @return Transaccion
     */
    public function setCartafirmadaentrega($cartafirmadaentrega)
    {
        $this->cartafirmadaentrega = $cartafirmadaentrega;

        return $this;
    }

    /**
     * Get cartafirmadaentrega
     *
     * @return string 
     */
    public function getCartafirmadaentrega()
    {
        return $this->cartafirmadaentrega;
    }

    /**
     * Set numerocartasolicitud
     *
     * @param string $numerocartasolicitud
     * @return Transaccion
     */
    public function setNumerocartasolicitud($numerocartasolicitud)
    {
        $this->numerocartasolicitud = $numerocartasolicitud;

        return $this;
    }

    /**
     * Get numerocartasolicitud
     *
     * @return string 
     */
    public function getNumerocartasolicitud()
    {
        return $this->numerocartasolicitud;
    }

    /**
     * Set estadotransaccion
     *
     * @param string $estadotransaccion
     * @return Transaccion
     */
    public function setEstadotransaccion($estadotransaccion)
    {
        $this->estadotransaccion = $estadotransaccion;

        return $this;
    }

    /**
     * Get estadotransaccion
     *
     * @return string 
     */
    public function getEstadotransaccion()
    {
        return $this->estadotransaccion;
    }

    /**
     * Set idmovimiento
     *
     * @param \AsesoresSABundle\Entity\Movimiento $idmovimiento
     * @return Transaccion
     */
    public function setIdmovimiento(\AsesoresSABundle\Entity\Movimiento $idmovimiento = null)
    {
        $this->idmovimiento = $idmovimiento;

        return $this;
    }

    /**
     * Get idmovimiento
     *
     * @return \AsesoresSABundle\Entity\Movimiento 
     */
    public function getIdmovimiento()
    {
        return $this->idmovimiento;
    }

    /**
     * Set idusuario
     *
     * @param \AsesoresSABundle\Entity\Usuarios $idusuario
     * @return Transaccion
     */
    public function setIdusuario(\AsesoresSABundle\Entity\Usuarios $idusuario = null)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return \AsesoresSABundle\Entity\Usuarios 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }
}
