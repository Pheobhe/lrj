<?php

namespace App\Entity;

use App\Repository\ActividadRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[UniqueEntity(
    fields: ['nombre'],
    message: 'Este Actividad ya existe',
)]


#[ORM\Entity(repositoryClass: ActividadRepository::class)]
class Actividad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTime $created_at;

    #[ORM\Column(type: 'boolean')]
    private ?bool $removed  = false;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTime  $deleted_at = null;

    
    public function __toString(): string
    {
        return $this->getNombre();
    }

    public function __construct()
    {
        
        $this->created_at = new \DateTime();
        //$this->actividades = new ArrayCollection();
        $this->removed = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
   
    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deleted_at;
    }


    
    public function getRemoved(): ?bool
    {
        return $this->removed;
    }

    public function toogleRemoved(): self
    {
        ($this->removed) ? $this->deleted_at = null : $this->deleted_at = new \DateTime();
        $this->removed = !$this->removed;
        return $this;
    }
}
