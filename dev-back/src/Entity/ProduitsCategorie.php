<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ProduitsCategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;

#[ORM\Entity(repositoryClass: ProduitsCategorieRepository::class)]
#[ApiResource(formats: ['json'])]
#[Get(normalizationContext: ['groups' => ['cat:get']])]
#[GetCollection(normalizationContext: ['groups' => ['cat:getcollection']])]
class ProduitsCategorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['cat:get', 'cat:getcollection'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['cat:get', 'cat:getcollection'])]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'produitCategorie', targetEntity: Produits::class)]
    #[Groups(['cat:get'])]
    private Collection $produits;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Produits>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produits $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits->add($produit);
            $produit->setProduitCategorie($this);
        }

        return $this;
    }

    public function removeProduit(Produits $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getProduitCategorie() === $this) {
                $produit->setProduitCategorie(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
}



