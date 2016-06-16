<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bateria
 *
 * @ORM\Table(name="bateria")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BateriaRepository")
 */
class Bateria
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
     * @var float
     *
     * @ORM\Column(name="temperatura", type="float")
     */
    private $temperatura;

    /**
     * @var string
     *
     * @ORM\Column(name="coordenada", type="string", length=255, unique=true)
     */
    private $coordenada;

    /**
     * @ORM\ManyToOne(targetEntity="CentroAlmacenamiento")
     * @ORM\JoinColumn(name="centroAlmacenamiento_id", referencedColumnName="id")
     */
    private $centroAlmacenamiento;


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
     * @return Bateria
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
     * @return Bateria
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
     * Set temperatura
     *
     * @param float $temperatura
     *
     * @return Bateria
     */
    public function setTemperatura($temperatura)
    {
        $this->temperatura = $temperatura;

        return $this;
    }

    /**
     * Get temperatura
     *
     * @return float
     */
    public function getTemperatura()
    {
        return $this->temperatura;
    }

    /**
     * Set coordenada
     *
     * @param string $coordenada
     *
     * @return Bateria
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

    /**
     * Set centroAlmacenamiento
     *
     * @param CentroAlmacenamiento $centroAlmacenamiento
     *
     * @return Terminal
     */
    public function setCentroAlmacenamiento($centroAlmacenamiento)
    {
        $this->centroAlmacenamiento = $centroAlmacenamiento;

        return $this;
    }


    /**
     * Get centroAlmacenamiento
     *
     * @return CentroAlmacenamiento
     */
    public function getCentroAlmacenamiento()
    {
        return $this->centroAlmacenamiento;
    }
}

