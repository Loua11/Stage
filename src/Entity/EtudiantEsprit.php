<?php

namespace App\Entity;

use App\Repository\EtudiantEspritRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: EtudiantEspritRepository::class)]
class EtudiantEsprit implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $IdEsprit = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $Adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $Mail = null;

    #[ORM\Column]
    private ?int $Cin = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datedenaissance = null;

    #[ORM\Column]
    private ?float $moyenne1 = null;

    #[ORM\Column]
    private ?float $moyenne2 = null;

    #[ORM\Column]
    private ?float $moyenne3 = null;

    #[ORM\Column(length: 255)]
    private ?string $niveauFr = null;

    #[ORM\Column(length: 255)]
    private ?string $niveauAng = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEsprit(): ?string
    {
        return $this->IdEsprit;
    }

    public function setIdEsprit(string $IdEsprit): static
    {
        $this->IdEsprit = $IdEsprit;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->IdEsprit;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->IdEsprit;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): static
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): static
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->Mail;
    }

    public function setMail(string $Mail): static
    {
        $this->Mail = $Mail;

        return $this;
    }

    public function getCin(): ?int
    {
        return $this->Cin;
    }

    public function setCin(int $Cin): static
    {
        $this->Cin = $Cin;

        return $this;
    }

    public function getDatedenaissance(): ?\DateTimeInterface
    {
        return $this->datedenaissance;
    }

    public function setDatedenaissance(\DateTimeInterface $datedenaissance): static
    {
        $this->datedenaissance = $datedenaissance;

        return $this;
    }

    public function getMoyenne1(): ?float
    {
        return $this->moyenne1;
    }

    public function setMoyenne1(float $moyenne1): static
    {
        $this->moyenne1 = $moyenne1;

        return $this;
    }

    public function getMoyenne2(): ?float
    {
        return $this->moyenne2;
    }

    public function setMoyenne2(float $moyenne2): static
    {
        $this->moyenne2 = $moyenne2;

        return $this;
    }

    public function getMoyenne3(): ?float
    {
        return $this->moyenne3;
    }

    public function setMoyenne3(float $moyenne3): static
    {
        $this->moyenne3 = $moyenne3;

        return $this;
    }

    public function getNiveauFr(): ?string
    {
        return $this->niveauFr;
    }

    public function setNiveauFr(string $niveauFr): static
    {
        $this->niveauFr = $niveauFr;

        return $this;
    }

    public function getNiveauAng(): ?string
    {
        return $this->niveauAng;
    }

    public function setNiveauAng(string $niveauAng): static
    {
        $this->niveauAng = $niveauAng;

        return $this;
    }
}
