<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * CentroAlmacenamiento
 *
 * @ORM\Table(name="centro_almacenamiento")
 * @UniqueEntity("numero")
 * @UniqueEntity("coordenada")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CentroAlmacenamientoRepository")
 */
class CentroAlmacenamiento
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer", unique=true)
     */
    private $numero;

    /**
     * @var int
     *
     * @ORM\Column(name="energia", type="integer")
     */
    private $energia;

    /**
     * @var string
     *
     * @ORM\Column(name="coordenada", type="string", length=255, unique=true)
     */
    private $coordenada;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return CentroAlmacenamiento
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return int
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set energia
     *
     * @param integer $energia
     *
     * @return CentroAlmacenamiento
     */
    public function setEnergia($energia)
    {
        $this->energia = $energia;

        return $this;
    }

    /**
     * Get energia
     *
     * @return int
     */
    public function getEnergia()
    {
        return $this->energia;
    }

    /**
     * Set coordenada
     *
     * @param string $coordenada
     *
     * @return CentroAlmacenamiento
     */
    public function setCoordenada($coordenada)
    {
        $this->coordenada = $coordenada;

        return $this;
    }

    /**
     * Get coordenada
     *
     * @return string
     */
    public function getCoordenada()
    {
        return $this->coordenada;
    }

    public function __toString() 
    {
        return $this->numero . " | " . $this->coordenada;
    }
}

