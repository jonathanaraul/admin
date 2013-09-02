<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coordinacion
 *
 * @ORM\Table(name="coordinacion")
 * @ORM\Entity
 */
class Coordinacion
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
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="coordinador", type="string", length=255, nullable=false)
     */
    private $coordinador;

    /**
     * @var \Faltantes
     *
     * @ORM\ManyToOne(targetEntity="Faltantes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_cord", referencedColumnName="cod_cord")
     * })
     */
    private $codCord;



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
     * Set nombre
     *
     * @param string $nombre
     * @return Coordinacion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set coordinador
     *
     * @param string $coordinador
     * @return Coordinacion
     */
    public function setCoordinador($coordinador)
    {
        $this->coordinador = $coordinador;
    
        return $this;
    }

    /**
     * Get coordinador
     *
     * @return string 
     */
    public function getCoordinador()
    {
        return $this->coordinador;
    }

    /**
     * Set codCord
     *
     * @param \Proyecto\PrincipalBundle\Entity\Faltantes $codCord
     * @return Coordinacion
     */
    public function setCodCord(\Proyecto\PrincipalBundle\Entity\Faltantes $codCord = null)
    {
        $this->codCord = $codCord;
    
        return $this;
    }

    /**
     * Get codCord
     *
     * @return \Proyecto\PrincipalBundle\Entity\Faltantes 
     */
    public function getCodCord()
    {
        return $this->codCord;
    }
}