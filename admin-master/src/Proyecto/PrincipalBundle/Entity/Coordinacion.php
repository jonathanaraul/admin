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
     * @var integer
     *
     * @ORM\Column(name="cod_cord", type="integer", nullable=false)
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
     * @param integer $codCord
     * @return Coordinacion
     */
    public function setCodCord($codCord)
    {
        $this->codCord = $codCord;
    
        return $this;
    }

    /**
     * Get codCord
     *
     * @return integer 
     */
    public function getCodCord()
    {
        return $this->codCord;
    }
}