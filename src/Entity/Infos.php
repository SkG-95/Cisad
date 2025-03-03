<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;

#[ORM\Entity]
class Infos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $rank;

    #[ORM\Column(type: 'integer')]
    private $victoire;

    #[ORM\Column(type: 'integer')]
    private $defaite;

    // Relation OneToOne avec User
    #[ORM\OneToOne(targetEntity: User::class, inversedBy: 'infos', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: false)]
    private $user;

    // Getters et setters...

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRank(): ?string
    {
        return $this->rank;
    }

    public function setRank(string $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getVictoire(): ?int
    {
        return $this->victoire;
    }

    public function setVictoire(int $victoire): self
    {
        $this->victoire = $victoire;

        return $this;
    }

    public function getDefaite(): ?int
    {
        return $this->defaite;
    }

    public function setDefaite(int $defaite): self
    {
        $this->defaite = $defaite;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }
}

