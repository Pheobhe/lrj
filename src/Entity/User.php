<?php

namespace App\Entity;

use App\Repository\UserRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: UserRepository::class)]

#[UniqueEntity(
    fields: ['username'],
    message: 'Este Usuario ya existe',
)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $username = null;

    #[ORM\Column(type: 'json')]
    private array $roles = [];

    #[ORM\Column(type: 'datetime')]
    private ?DateTime $createdAt;

    #[ORM\Column(type: 'boolean')]
    private ?bool $removed;

    #[ORM\Column(type: 'string')]
    private $password ;

    
    public function __toString(): string
    {
        return $this->getusername();
    }

    public function __construct()
    {
        $this->removed = false;
        $this->createdAt = new \DateTime();
        
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getusername(): ?string
    {
        return $this->username;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setusername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        // $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }
   
    public function getStringRole(): string
    {
        $arr = array(
        "ROLE_SUPER_ADMIN" => "Super Administrador",
        "ROLE_ADMIN" => "Administrador",
        "ROLE_USER" => "Rol de Usuario",
        "ROLE_EXTERNAL" => "Rol de Usuario EXTERNO"
        );
        $roles="";
        $numItems = count($this->roles);
        $i = 0;
        foreach ($this->roles as $key => $role) {
            $roles .= $arr[$role];
            if(++$i !== $numItems) {
                $roles .= " | ";
            }
        }
        return $roles;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }


    public function getRemoved(): ?bool
    {
        return $this->removed;
    }

    public function toggleRemoved(): self
    {
        $this->removed = !$this->removed;

        return $this;
    }

       
    
}
