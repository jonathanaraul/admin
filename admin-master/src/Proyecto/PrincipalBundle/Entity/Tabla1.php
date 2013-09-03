<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tabla1
 *
 * @ORM\Table(name="tabla1")
 * @ORM\Entity
 */
class Tabla1
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
     * @ORM\Column(name="nombre", type="string", length=30, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_tabla1", type="integer", nullable=false)
     */
    private $codTabla1;



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
     * @return Tabla1
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
     * Set codTabla1
     *
     * @param integer $codTabla1
     * @return Tabla1
     */
    public function setCodTabla1($codTabla1)
    {
        $this->codTabla1 = $codTabla1;
    
        return $this;
    }

    /**
     * Get codTabla1
     *
     * @return integer 
     */
    public function getCodTabla1()
    {
        return $this->codTabla1;
    }
}