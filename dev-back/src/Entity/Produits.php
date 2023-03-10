<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ProduitsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: ProduitsRepository::class)]
#[ApiResource(formats: ['json'])]
class Produits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['cat:get'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['cat:get'])]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['cat:get'])]
    private ?string $description = null;

    #[ORM\Column]
    #[Groups(['cat:get'])]
    private ?float $price = null;

    #[ORM\Column(length: 500)]
    #[Groups(['cat:get'])]
    private ?string $image = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?ProduitsCategorie $produitCategorie = null;

    #[ORM\ManyToMany(targetEntity: Options::class, mappedBy: 'produits')]
    private Collection $options;

    public function __construct()
    {
        $this->options = new ArrayCollection();
    }

    // public function __construct(int $id){
    //     $this->id = $id;
    // }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getProduitCategorie(): ?ProduitsCategorie
    {
        return $this->produitCategorie;
    }

    public function setProduitCategorie(?ProduitsCategorie $produitCategorie): self
    {
        $this->produitCategorie = $produitCategorie;

        return $this;
    }

    /**
     * @return Collection<int, Options>
     */
    public function getOptions(): Collection
    {
        return $this->options;
    }

    public function addOption(Options $option): self
    {
        if (!$this->options->contains($option)) {
            $this->options->add($option);
            $option->addProduit($this);
        }

        return $this;
    }

    public function removeOption(Options $option): self
    {
        if ($this->options->removeElement($option)) {
            $option->removeProduit($this);
        }

        return $this;
    }
}
