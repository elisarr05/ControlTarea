<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TareaRepository")
 */
class Tarea
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Nombre;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $Descripcion;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $Miembros;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $Estado;

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

    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }

    public function setDescripcion(string $Descripcion): self
    {
        $this->Descripcion = $Descripcion;

        return $this;
    }

    public function getMiembros(): ?string
    {
        return $this->Miembros;
    }

    public function setMiembros(string $Miembros): self
    {
        $this->Miembros = $Miembros;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->Estado;
    }

    public function setEstado(?string $Estado): self
    {
        $this->Estado = $Estado;

        return $this;
    }
}
