<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Terminal
 *
 * @ORM\Table(name="terminal")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TerminalRepository")
 */
class Terminal
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
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="coordenada", type="string", length=255, unique=true)
     */
    private $coordenada;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="Bateria")
     * @ORM\JoinColumn(name="bateria_id", referencedColumnName="id")
     */
    private $bateria;


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
     * @return Terminal
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
     * Set estado
     *
     * @param string $estado
     *
     * @return Terminal
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set coordenada
     *
     * @param string $coordenada
     *
     * @return Terminal
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
     * Set usuario
     *
     * @param Usuario $usuario
     *
     * @return Terminal
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }


    /**
     * Get usuario
     *
     * @return Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }


    /**
     * Set bateria
     *
     * @param Bateria $bateria
     *
     * @return Terminal
     */
    public function setBateria($bateria)
    {
        $this->bateria = $bateria;

        return $this;
    }


    /**
     * Get bateria
     *
     * @return Bateria
     */
    public function getBateria()
    {
        return $this->bateria;
    }
}

