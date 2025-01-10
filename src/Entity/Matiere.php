<?php

namespace App\Entity;

use App\Repository\MatiereRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatiereRepository::class)]
class Matiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, Tutoriel>
     */
    #[ORM\OneToMany(targetEntity: Tutoriel::class, mappedBy: 'matiere')]
    private Collection $tutoriels;

    public function __construct()
    {
        $this->tutoriels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Tutoriel>
     */
    public function getTutoriels(): Collection
    {
        return $this->tutoriels;
    }

    public function addTutoriel(Tutoriel $tutoriel): static
    {
        if (!$this->tutoriels->contains($tutoriel)) {
            $this->tutoriels->add($tutoriel);
            $tutoriel->setMatiere($this);
        }

        return $this;
    }

    public function removeTutoriel(Tutoriel $tutoriel): static
    {
        if ($this->tutoriels->removeElement($tutoriel)) {
            // set the owning side to null (unless already changed)
            if ($tutoriel->getMatiere() === $this) {
                $tutoriel->setMatiere(null);
            }
        }

        return $this;
    }
}
