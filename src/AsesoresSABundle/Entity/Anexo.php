<?php

namespace AsesoresSABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anexo
 *
 * @ORM\Table(name="anexo", uniqueConstraints={@ORM\UniqueConstraint(name="numeroAnexo", columns={"numeroAnexo"})}, indexes={@ORM\Index(name="idPago", columns={"idPago"}), @ORM\Index(name="idRamo", columns={"idRamo"}), @ORM\Index(name="idPoliza", columns={"idPoliza"})})
 * @ORM\Entity
 */
class Anexo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAnexo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idanexo;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroAnexo", type="string", length=10, nullable=false)
     */
    private $numeroanexo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicioVigenciaAnexo", type="datetime", nullable=true)
     */
    private $iniciovigenciaanexo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finVigenciaAnexo", type="datetime", nullable=true)
     */
    private $finvigenciaanexo;

    /**
     * @var string
     *
     * @ORM\Column(name="valorTotalAseguradoAnexo", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $valortotalaseguradoanexo;

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
     * @var \Ramo
     *
     * @ORM\ManyToOne(targetEntity="Ramo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRamo", referencedColumnName="idRamo")
     * })
     */
    private $idramo;

    /**
     * @var \Poliza
     *
     * @ORM\ManyToOne(targetEntity="Poliza")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPoliza", referencedColumnName="idPoliza")
     * })
     */
    private $idpoliza;



    /**
     * Get idanexo
     *
     * @return integer 
     */
    public function getIdanexo()
    {
        return $this->idanexo;
    }

    /**
     * Set numeroanexo
     *
     * @param string $numeroanexo
     * @return Anexo
     */
    public function setNumeroanexo($numeroanexo)
    {
        $this->numeroanexo = $numeroanexo;

        return $this;
    }

    /**
     * Get numeroanexo
     *
     * @return string 
     */
    public function getNumeroanexo()
    {
        return $this->numeroanexo;
    }

    /**
     * Set iniciovigenciaanexo
     *
     * @param \DateTime $iniciovigenciaanexo
     * @return Anexo
     */
    public function setIniciovigenciaanexo($iniciovigenciaanexo)
    {
        $this->iniciovigenciaanexo = $iniciovigenciaanexo;

        return $this;
    }

    /**
     * Get iniciovigenciaanexo
     *
     * @return \DateTime 
     */
    public function getIniciovigenciaanexo()
    {
        return $this->iniciovigenciaanexo;
    }

    /**
     * Set finvigenciaanexo
     *
     * @param \DateTime $finvigenciaanexo
     * @return Anexo
     */
    public function setFinvigenciaanexo($finvigenciaanexo)
    {
        $this->finvigenciaanexo = $finvigenciaanexo;

        return $this;
    }

    /**
     * Get finvigenciaanexo
     *
     * @return \DateTime 
     */
    public function getFinvigenciaanexo()
    {
        return $this->finvigenciaanexo;
    }

    /**
     * Set valortotalaseguradoanexo
     *
     * @param string $valortotalaseguradoanexo
     * @return Anexo
     */
    public function setValortotalaseguradoanexo($valortotalaseguradoanexo)
    {
        $this->valortotalaseguradoanexo = $valortotalaseguradoanexo;

        return $this;
    }

    /**
     * Get valortotalaseguradoanexo
     *
     * @return string 
     */
    public function getValortotalaseguradoanexo()
    {
        return $this->valortotalaseguradoanexo;
    }

    /**
     * Set idpago
     *
     * @param \AsesoresSABundle\Entity\Pago $idpago
     * @return Anexo
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

    /**
     * Set idramo
     *
     * @param \AsesoresSABundle\Entity\Ramo $idramo
     * @return Anexo
     */
    public function setIdramo(\AsesoresSABundle\Entity\Ramo $idramo = null)
    {
        $this->idramo = $idramo;

        return $this;
    }

    /**
     * Get idramo
     *
     * @return \AsesoresSABundle\Entity\Ramo 
     */
    public function getIdramo()
    {
        return $this->idramo;
    }

    /**
     * Set idpoliza
     *
     * @param \AsesoresSABundle\Entity\Poliza $idpoliza
     * @return Anexo
     */
    public function setIdpoliza(\AsesoresSABundle\Entity\Poliza $idpoliza = null)
    {
        $this->idpoliza = $idpoliza;

        return $this;
    }

    /**
     * Get idpoliza
     *
     * @return \AsesoresSABundle\Entity\Poliza 
     */
    public function getIdpoliza()
    {
        return $this->idpoliza;
    }
}
