<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_commande = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column]
    private ?float $total = null;

    /**
     * @var Collection<int, CommandeLivre>
     */
    #[ORM\OneToMany(targetEntity: CommandeLivre::class, mappedBy: 'commande')]
    private Collection $livre;

    /**
     * @var Collection<int, CommandeLivre>
     */
    #[ORM\OneToMany(targetEntity: CommandeLivre::class, mappedBy: 'commande')]
    private Collection $commandeLivres;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function __construct()
    {
        $this->livre = new ArrayCollection();
        $this->commandeLivres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->date_commande;
    }

    public function setDateCommande(\DateTimeInterface $date_commande): static
    {
        $this->date_commande = $date_commande;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): static
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return Collection<int, CommandeLivre>
     */
    public function getLivre(): Collection
    {
        return $this->livre;
    }

    public function addLivre(CommandeLivre $livre): static
    {
        if (!$this->livre->contains($livre)) {
            $this->livre->add($livre);
            $livre->setCommande($this);
        }

        return $this;
    }

    public function removeLivre(CommandeLivre $livre): static
    {
        if ($this->livre->removeElement($livre)) {
            // set the owning side to null (unless already changed)
            if ($livre->getCommande() === $this) {
                $livre->setCommande(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, CommandeLivre>
     */
    public function getCommandeLivres(): Collection
    {
        return $this->commandeLivres;
    }

    public function addCommandeLivre(CommandeLivre $commandeLivre): static
    {
        if (!$this->commandeLivres->contains($commandeLivre)) {
            $this->commandeLivres->add($commandeLivre);
            $commandeLivre->setCommande($this);
        }

        return $this;
    }

    public function removeCommandeLivre(CommandeLivre $commandeLivre): static
    {
        if ($this->commandeLivres->removeElement($commandeLivre)) {
            // set the owning side to null (unless already changed)
            if ($commandeLivre->getCommande() === $this) {
                $commandeLivre->setCommande(null);
            }
        }

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): static
    {
        $this->user = $user;

        return $this;
    }
}
