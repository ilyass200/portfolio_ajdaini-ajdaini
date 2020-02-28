<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\AvisRepository")
 */
class Avis
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_avs;

    /**
     * @ORM\Column(type="string", length=500)
     * @Assert\NotBlank(
     *      message = "le champ ne doit pas être vide"
     * )
     * @Assert\Length(
     *      max = 500,
     *      maxMessage = "Le champ ne peut être plus long que {{ limit }} caractères "
     * )
     */
    private $contenu_avs;

    /**
     * @ORM\Column(type="boolean",nullable=true)
     */
    private $accepte_avs;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_avs;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Personne", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false,name="id_personne", referencedColumnName="id_prs")
     */
    private $id_personne;

    public function getId(): ?int
    {
        return $this->id_avs;
    }

    public function getContenuAvs(): ?string
    {
        return $this->contenu_avs;
    }

    public function setContenuAvs(string $contenu_avs): self
    {
        $this->contenu_avs = $contenu_avs;

        return $this;
    }

    public function getAccepteAvs(): ?bool
    {
        return $this->accepte_avs;
    }

    public function setAccepteAvs(bool $accepte_avs): self
    {
        $this->accepte_avs = $accepte_avs;

        return $this;
    }

    public function getDateAvs(): ?\DateTimeInterface
    {
        return $this->date_avs;
    }

    public function setDateAvs(\DateTimeInterface $date_avs): self
    {
        $this->date_avs = $date_avs;

        return $this;
    }

    public function getIdPersonne(): ?Personne
    {
        return $this->id_personne;
    }

    public function setIdPersonne(Personne $id_personne): self
    {
        $this->id_personne = $id_personne;

        return $this;
    }
}
