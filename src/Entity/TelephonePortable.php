<?php

namespace App\Entity;

use App\Repository\TelephonePortableRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TelephonePortableRepository::class)]
class TelephonePortable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ligne = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $marque = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $modele = null;

    #[ORM\ManyToOne(inversedBy: 'telephonePortables')]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id', onDelete: 'SET NULL')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Etat $etat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numero_serie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imei1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imei2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $date_achat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $date_garantie = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $commentaire = null;

    #[ORM\ManyToOne(inversedBy: 'telephonePortables')]
    #[ORM\JoinColumn(name: 'fournisseur_id', referencedColumnName: 'id', onDelete: 'SET NULL')]
    private ?Fournisseur $fournisseur = null;

    #[ORM\ManyToOne(inversedBy: 'telephonePortables')]
    #[ORM\JoinColumn(name: 'entreprise_id', referencedColumnName: 'id', onDelete: 'SET NULL')]
    private ?Entreprise $entreprise = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $date_installation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLigne(): ?string
    {
        return $this->ligne;
    }

    public function setLigne(?string $ligne): static
    {
        $this->ligne = $ligne;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(?string $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(?string $modele): static
    {
        $this->modele = $modele;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getEtat(): ?Etat
    {
        return $this->etat;
    }

    public function setEtat(?Etat $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getNumeroSerie(): ?string
    {
        return $this->numero_serie;
    }

    public function setNumeroSerie(?string $numero_serie): static
    {
        $this->numero_serie = $numero_serie;

        return $this;
    }

    public function getImei1(): ?string
    {
        return $this->imei1;
    }

    public function setImei1(?string $imei1): static
    {
        $this->imei1 = $imei1;

        return $this;
    }

    public function getImei2(): ?string
    {
        return $this->imei2;
    }

    public function setImei2(?string $imei2): static
    {
        $this->imei2 = $imei2;

        return $this;
    }

    public function getDateAchat(): ?string
    {
        return $this->date_achat;
    }

    public function setDateAchat(?string $date_achat): static
    {
        $this->date_achat = $date_achat;

        return $this;
    }

    public function getDateGarantie(): ?string
    {
        return $this->date_garantie;
    }

    public function setDateGarantie(?string $date_garantie): static
    {
        $this->date_garantie = $date_garantie;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): static
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    public function getEntreprise(): ?Entreprise
    {
        return $this->entreprise;
    }

    public function setEntreprise(?Entreprise $entreprise): static
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getDateInstallation(): ?string
    {
        return $this->date_installation;
    }

    public function setDateInstallation(?string $date_installation): static
    {
        $this->date_installation = $date_installation;

        return $this;
    }
}
