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
     * @var integer
     *
     * @ORM\Column(name="cod_falt", type="integer", nullable=false)
     */
    private $codFalt;

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
     * @var \Estado
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_estd", referencedColumnName="cod_estd")
     * })
     */
    private $codEstd;

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
     * @var \Direccion
     *
     * @ORM\ManyToOne(targetEntity="Direccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_dirc", referencedColumnName="cod_dirc")
     * })
     */
    private $codDirc;



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
     * Set codFalt
     *
     * @param integer $codFalt
     * @return Faltantes
     */
    public function setCodFalt($codFalt)
    {
        $this->codFalt = $codFalt;
    
        return $this;
    }

    /**
     * Get codFalt
     *
     * @return integer 
     */
    public function getCodFalt()
    {
        return $this->codFalt;
    }

    /**
     * Set codMuni
     *
     * @param \Proyecto\PrincipalBundle\Entity\Municipio $codMuni
     * @return Faltantes
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
     * Set codEstd
     *
     * @param \Proyecto\PrincipalBundle\Entity\Estado $codEstd
     * @return Faltantes
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

    /**
     * Set codCord
     *
     * @param \Proyecto\PrincipalBundle\Entity\Coordinacion $codCord
     * @return Faltantes
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
     * Set codDirc
     *
     * @param \Proyecto\PrincipalBundle\Entity\Direccion $codDirc
     * @return Faltantes
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
}