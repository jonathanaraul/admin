<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposBienes
 *
 * @ORM\Table(name="tipos_bienes")
 * @ORM\Entity
 */
class TiposBienes
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
     * @ORM\Column(name="tipo_bien", type="string", length=40, nullable=false)
     */
    private $tipoBien;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_tbien", type="integer", nullable=false)
     */
    private $codTbien;



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
     * Set tipoBien
     *
     * @param string $tipoBien
     * @return TiposBienes
     */
    public function setTipoBien($tipoBien)
    {
        $this->tipoBien = $tipoBien;
    
        return $this;
    }

    /**
     * Get tipoBien
     *
     * @return string 
     */
    public function getTipoBien()
    {
        return $this->tipoBien;
    }

    /**
     * Set codTbien
     *
     * @param integer $codTbien
     * @return TiposBienes
     */
    public function setCodTbien($codTbien)
    {
        $this->codTbien = $codTbien;
    
        return $this;
    }

    /**
     * Get codTbien
     *
     * @return integer 
     */
    public function getCodTbien()
    {
        return $this->codTbien;
    }
}