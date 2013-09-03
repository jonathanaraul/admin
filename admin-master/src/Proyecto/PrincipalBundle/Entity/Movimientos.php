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
     * @ORM\Column(name="id_rspn", type="integer", nullable=false)
     */
    private $idRspn;

    /**
     * @var \Municipio
     *
     * @ORM\ManyToOne(targetEntity="Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_muni", referencedColumnName="id")
     * })
     */
    private $idMuni;

    /**
     * @var \Direccion
     *
     * @ORM\ManyToOne(targetEntity="Direccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dirc", referencedColumnName="id")
     * })
     */
    private $idDirc;

    /**
     * @var \Coordinacion
     *
     * @ORM\ManyToOne(targetEntity="Coordinacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cord", referencedColumnName="id")
     * })
     */
    private $idCord;

    /**
     * @var \Estado
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estd", referencedColumnName="id")
     * })
     */
    private $idEstd;



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
     * Set idRspn
     *
     * @param integer $idRspn
     * @return Movimientos
     */
    public function setIdRspn($idRspn)
    {
        $this->idRspn = $idRspn;
    
        return $this;
    }

    /**
     * Get idRspn
     *
     * @return integer 
     */
    public function getIdRspn()
    {
        return $this->idRspn;
    }

    /**
     * Set idMuni
     *
     * @param \Proyecto\PrincipalBundle\Entity\Municipio $idMuni
     * @return Movimientos
     */
    public function setIdMuni(\Proyecto\PrincipalBundle\Entity\Municipio $idMuni = null)
    {
        $this->idMuni = $idMuni;
    
        return $this;
    }

    /**
     * Get idMuni
     *
     * @return \Proyecto\PrincipalBundle\Entity\Municipio 
     */
    public function getIdMuni()
    {
        return $this->idMuni;
    }

    /**
     * Set idDirc
     *
     * @param \Proyecto\PrincipalBundle\Entity\Direccion $idDirc
     * @return Movimientos
     */
    public function setIdDirc(\Proyecto\PrincipalBundle\Entity\Direccion $idDirc = null)
    {
        $this->idDirc = $idDirc;
    
        return $this;
    }

    /**
     * Get idDirc
     *
     * @return \Proyecto\PrincipalBundle\Entity\Direccion 
     */
    public function getIdDirc()
    {
        return $this->idDirc;
    }

    /**
     * Set idCord
     *
     * @param \Proyecto\PrincipalBundle\Entity\Coordinacion $idCord
     * @return Movimientos
     */
    public function setIdCord(\Proyecto\PrincipalBundle\Entity\Coordinacion $idCord = null)
    {
        $this->idCord = $idCord;
    
        return $this;
    }

    /**
     * Get idCord
     *
     * @return \Proyecto\PrincipalBundle\Entity\Coordinacion 
     */
    public function getIdCord()
    {
        return $this->idCord;
    }

    /**
     * Set idEstd
     *
     * @param \Proyecto\PrincipalBundle\Entity\Estado $idEstd
     * @return Movimientos
     */
    public function setIdEstd(\Proyecto\PrincipalBundle\Entity\Estado $idEstd = null)
    {
        $this->idEstd = $idEstd;
    
        return $this;
    }

    /**
     * Get idEstd
     *
     * @return \Proyecto\PrincipalBundle\Entity\Estado 
     */
    public function getIdEstd()
    {
        return $this->idEstd;
    }
}