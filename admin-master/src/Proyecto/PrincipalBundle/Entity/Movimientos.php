<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movimientos
 *
 * @ORM\Table(name="movimientos")
 * @ORM\Entity
 */
class Movimientos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255, nullable=false)
     */
    private $direccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="periodo", type="datetime", nullable=false)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="grupo", type="string", length=70, nullable=false)
     */
    private $grupo;

    /**
     * @var string
     *
     * @ORM\Column(name="subgrupo", type="string", length=70, nullable=false)
     */
    private $subgrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="seccion", type="string", length=70, nullable=false)
     */
    private $seccion;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="string", length=200, nullable=false)
     */
    private $concepto;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_rspn", type="integer", nullable=false)
     */
    private $codRspn;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_mvts", type="integer", nullable=false)
     */
    private $codMvts;

    /**
     * @var \Municipio
     *
     * @ORM\ManyToOne(targetEntity="Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_muni", referencedColumnName="cod_muni")
     * })
     */
    private $codMuni;

    /**
     * @var \Direccion
     *
     * @ORM\ManyToOne(targetEntity="Direccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_dirc", referencedColumnName="cod_dirc")
     * })
     */
    private $codDirc;

    /**
     * @var \Coordinacion
     *
     * @ORM\ManyToOne(targetEntity="Coordinacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_cord", referencedColumnName="cod_cord")
     * })
     */
    private $codCord;

    /**
     * @var \Estado
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_estd", referencedColumnName="cod_estd")
     * })
     */
    private $codEstd;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Movimientos
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set periodo
     *
     * @param \DateTime $periodo
     * @return Movimientos
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;
    
        return $this;
    }

    /**
     * Get periodo
     *
     * @return \DateTime 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set grupo
     *
     * @param string $grupo
     * @return Movimientos
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;
    
        return $this;
    }

    /**
     * Get grupo
     *
     * @return string 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set subgrupo
     *
     * @param string $subgrupo
     * @return Movimientos
     */
    public function setSubgrupo($subgrupo)
    {
        $this->subgrupo = $subgrupo;
    
        return $this;
    }

    /**
     * Get subgrupo
     *
     * @return string 
     */
    public function getSubgrupo()
    {
        return $this->subgrupo;
    }

    /**
     * Set seccion
     *
     * @param string $seccion
     * @return Movimientos
     */
    public function setSeccion($seccion)
    {
        $this->seccion = $seccion;
    
        return $this;
    }

    /**
     * Get seccion
     *
     * @return string 
     */
    public function getSeccion()
    {
        return $this->seccion;
    }

    /**
     * Set concepto
     *
     * @param string $concepto
     * @return Movimientos
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;
    
        return $this;
    }

    /**
     * Get concepto
     *
     * @return string 
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Movimientos
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set codRspn
     *
     * @param integer $codRspn
     * @return Movimientos
     */
    public function setCodRspn($codRspn)
    {
        $this->codRspn = $codRspn;
    
        return $this;
    }

    /**
     * Get codRspn
     *
     * @return integer 
     */
    public function getCodRspn()
    {
        return $this->codRspn;
    }

    /**
     * Set codMvts
     *
     * @param integer $codMvts
     * @return Movimientos
     */
    public function setCodMvts($codMvts)
    {
        $this->codMvts = $codMvts;
    
        return $this;
    }

    /**
     * Get codMvts
     *
     * @return integer 
     */
    public function getCodMvts()
    {
        return $this->codMvts;
    }

    /**
     * Set codMuni
     *
     * @param \Proyecto\PrincipalBundle\Entity\Municipio $codMuni
     * @return Movimientos
     */
    public function setCodMuni(\Proyecto\PrincipalBundle\Entity\Municipio $codMuni = null)
    {
        $this->codMuni = $codMuni;
    
        return $this;
    }

    /**
     * Get codMuni
     *
     * @return \Proyecto\PrincipalBundle\Entity\Municipio 
     */
    public function getCodMuni()
    {
        return $this->codMuni;
    }

    /**
     * Set codDirc
     *
     * @param \Proyecto\PrincipalBundle\Entity\Direccion $codDirc
     * @return Movimientos
     */
    public function setCodDirc(\Proyecto\PrincipalBundle\Entity\Direccion $codDirc = null)
    {
        $this->codDirc = $codDirc;
    
        return $this;
    }

    /**
     * Get codDirc
     *
     * @return \Proyecto\PrincipalBundle\Entity\Direccion 
     */
    public function getCodDirc()
    {
        return $this->codDirc;
    }

    /**
     * Set codCord
     *
     * @param \Proyecto\PrincipalBundle\Entity\Coordinacion $codCord
     * @return Movimientos
     */
    public function setCodCord(\Proyecto\PrincipalBundle\Entity\Coordinacion $codCord = null)
    {
        $this->codCord = $codCord;
    
        return $this;
    }

    /**
     * Get codCord
     *
     * @return \Proyecto\PrincipalBundle\Entity\Coordinacion 
     */
    public function getCodCord()
    {
        return $this->codCord;
    }

    /**
     * Set codEstd
     *
     * @param \Proyecto\PrincipalBundle\Entity\Estado $codEstd
     * @return Movimientos
     */
    public function setCodEstd(\Proyecto\PrincipalBundle\Entity\Estado $codEstd = null)
    {
        $this->codEstd = $codEstd;
    
        return $this;
    }

    /**
     * Get codEstd
     *
     * @return \Proyecto\PrincipalBundle\Entity\Estado 
     */
    public function getCodEstd()
    {
        return $this->codEstd;
    }
}