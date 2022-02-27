<?php

namespace App\Entity;

use App\Repository\ArtisteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArtisteRepository::class)]
class Artiste
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Pseudo;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $localisation;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $imgArtiste;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $description;

    #[ORM\Column(type: 'boolean')]
    private $estGroupe;

    #[ORM\OneToOne(mappedBy: 'artiste', targetEntity: Prestation::class, cascade: ['persist', 'remove'])]
    private $prestation;

    #[ORM\ManyToOne(targetEntity: DrTypeArtiste::class, inversedBy: 'artistes')]
    private $dr_type_artiste;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->Pseudo;
    }

    public function setPseudo(?string $Pseudo): self
    {
        $this->Pseudo = $Pseudo;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(?string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getImgArtiste(): ?string
    {
        return $this->imgArtiste;
    }

    public function setImgArtiste(?string $imgArtiste): self
    {
        $this->imgArtiste = $imgArtiste;

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

    public function getEstGroupe(): ?bool
    {
        return $this->estGroupe;
    }

    public function setEstGroupe(bool $estGroupe): self
    {
        $this->estGroupe = $estGroupe;

        return $this;
    }

    public function getPrestation(): ?Prestation
    {
        return $this->prestation;
    }

    public function setPrestation(Prestation $prestation): self
    {
        // set the owning side of the relation if necessary
        if ($prestation->getArtiste() !== $this) {
            $prestation->setArtiste($this);
        }

        $this->prestation = $prestation;

        return $this;
    }

    public function getDrTypeArtiste(): ?DrTypeArtiste
    {
        return $this->dr_type_artiste;
    }

    public function setDrTypeArtiste(?DrTypeArtiste $dr_type_artiste): self
    {
        $this->dr_type_artiste = $dr_type_artiste;

        return $this;
    }
}
