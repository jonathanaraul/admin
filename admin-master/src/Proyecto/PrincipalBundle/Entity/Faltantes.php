<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Faltantes
 *
 * @ORM\Table(name="faltantes")
 * @ORM\Entity
 */
class Faltantes
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
     * @ORM\Column(name="grupo", type="string", length=255, nullable=false)
     */
    private $grupo;

    /**
     * @var string
     *
     * @ORM\Column(name="subgrupo", type="string", length=255, nullable=false)
     */
    private $subgrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="seccion", type="string", length=255, nullable=false)
     */
    private $seccion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="valor_uni", type="integer", nullable=false)
     */
    private $valorUni;

    /**
     * @var integer
     *
     * @ORM\Column(name="diferencia", type="integer", nullable=false)
     */
    private $diferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="obsrvc", type="string", length=255, nullable=false)
     */
    private $obsrvc;

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
     * @var \Estado
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estd", referencedColumnName="id")
     * })
     */
    private $idEstd;

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
     * @var \Direccion
     *
     * @ORM\ManyToOne(targetEntity="Direccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dirc", referencedColumnName="id")
     * })
     */
    private $idDirc;



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
     * Set grupo
     *
     * @param string $grupo
     * @return Faltantes
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
     * @return Faltantes
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
     * @return Faltantes
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Faltantes
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Faltantes
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
     * Set valorUni
     *
     * @param integer $valorUni
     * @return Faltantes
     */
    public function setValorUni($valorUni)
    {
        $this->valorUni = $valorUni;
    
        return $this;
    }

    /**
     * Get valorUni
     *
     * @return integer 
     */
    public function getValorUni()
    {
        return $this->valorUni;
    }

    /**
     * Set diferencia
     *
     * @param integer $diferencia
     * @return Faltantes
     */
    public function setDiferencia($diferencia)
    {
        $this->diferencia = $diferencia;
    
        return $this;
    }

    /**
     * Get diferencia
     *
     * @return integer 
     */
    public function getDiferencia()
    {
        return $this->diferencia;
    }

    /**
     * Set obsrvc
     *
     * @param string $obsrvc
     * @return Faltantes
     */
    public function setObsrvc($obsrvc)
    {
        $this->obsrvc = $obsrvc;
    
        return $this;
    }

    /**
     * Get obsrvc
     *
     * @return string 
     */
    public function getObsrvc()
    {
        return $this->obsrvc;
    }

    /**
     * Set idMuni
     *
     * @param \Proyecto\PrincipalBundle\Entity\Municipio $idMuni
     * @return Faltantes
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
     * Set idEstd
     *
     * @param \Proyecto\PrincipalBundle\Entity\Estado $idEstd
     * @return Faltantes
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

    /**
     * Set idCord
     *
     * @param \Proyecto\PrincipalBundle\Entity\Coordinacion $idCord
     * @return Faltantes
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
     * Set idDirc
     *
     * @param \Proyecto\PrincipalBundle\Entity\Direccion $idDirc
     * @return Faltantes
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
}