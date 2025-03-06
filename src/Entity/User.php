<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use App\Entity\Infos;

#[ORM\Entity]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $username = null;

    #[ORM\Column(length: 78, unique: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(type: 'json')]
    private array $roles = [];

    // Relation OneToOne avec Infos
    #[ORM\OneToOne(targetEntity: Infos::class, mappedBy: 'user', cascade: ['persist', 'remove'])]
    private ?Infos $infos = null;

    // Getters et Setters pour Infos
    public function getInfos(): ?Infos
    {
        return $this->infos;
    }

    public function setInfos(?Infos $infos): self
    {
        // Permet de gérer automatiquement la relation inverse dans Infos
        if ($infos !== null && $infos->getUser() !== $this) {
            $infos->setUser($this);
        }

        $this->infos = $infos;

        return $this;
    }

    // Getters et Setters pour les autres champs
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return (string) ($this->username ?? '');
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRoles(): array
    {
        // Ajoute ROLE_USER par défaut si aucun rôle n'est défini
        if (empty($this->roles)) {
            $this->roles[] = 'ROLE_USER';
        }

        return array_unique($this->roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    // Méthodes requises par UserInterface

    /**
     * Efface les données sensibles temporaires (comme un mot de passe en clair)
     */
    public function eraseCredentials(): void
    {
        // Rien à faire ici si vous ne stockez pas de données sensibles temporaires
    }

    /**
     * Retourne l'identifiant unique de l'utilisateur (par exemple, l'email ou le username)
     */
    public function getUserIdentifier(): string
    {
        return (string) ($this->email ?? '');
    }
}
