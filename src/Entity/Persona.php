<?php

namespace App\Entity;

use App\Repository\PersonaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[UniqueEntity(
    fields: ['nombre'],
    message: 'Este Persona ya existe',
)]

#[ORM\Entity(repositoryClass: PersonaRepository::class)]
class Persona
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(type: 'boolean')]
    private ?bool $removed  = false;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTime  $deleted_at = null;


    #[ORM\ManyToMany(targetEntity: Actividad::class, inversedBy: 'personas')]
    private Collection $actividades;

    #[ORM\ManyToMany(targetEntity: Pago::class, inversedBy: 'personas')]
    private Collection $pagos;

    
    public function __toString(): string
    {
        return $this->getNombre();
    }

    public function __construct()
    {
        $this->created_at = new \DateTime();
        $this->actividades = new ArrayCollection();
        $this->pagos = new ArrayCollection();
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

    /**
     * @return Collection<int, Actividad>
     */
    public function getActividads(): Collection
    {
        return $this->actividades;
    }

    public function addActividad(Actividad $actividad): self
    {
        if (!$this->actividades->contains($actividad)) {
            $this->actividades[] = $actividad;
        }

        return $this;
    }

    public function removeActividad(Actividad $actividad): self
    {
        $this->actividades->removeElement($actividad);

        return $this;
    }

    /**
     * @return Collection<int, Pago>
     */
    public function getPago(): Collection
    {
        return $this->pagos;
    }

    public function addPago(Pago $pagos): self
    {
        if (!$this->pagos->contains($pagos)) {
            $this->pagos[] = $pagos;
        }

        return $this;
    }

    public function removePago(Pago $pagos): self
    {
        $this->pagos->removeElement($pagos);

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

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deleted_at;
    }
}
