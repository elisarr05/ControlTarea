<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuarioRepository")
 */
class Usuario
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $Nombre;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $Telefono;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $Correo;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $Direccion;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Edad;

    public function getId()
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->Telefono;
    }

    public function setTelefono(string $Telefono): self
    {
        $this->Telefono = $Telefono;

        return $this;
    }

    public function getCorreo(): ?string
    {
        return $this->Correo;
    }

    public function setCorreo(?string $Correo): self
    {
        $this->Correo = $Correo;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->Direccion;
    }

    public function setDireccion(?string $Direccion): self
    {
        $this->Direccion = $Direccion;

        return $this;
    }

    public function getEdad(): ?int
    {
        return $this->Edad;
    }

    public function setEdad(?int $Edad): self
    {
        $this->Edad = $Edad;

        return $this;
    }
}
