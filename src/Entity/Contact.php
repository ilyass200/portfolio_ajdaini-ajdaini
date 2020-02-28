<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 */
class Contact
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_ctt;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     *     message= "le champ sujet ne doit pas être vide "
     * )
     * @Assert\Length(
     *      max = 255,
     *      maxMessage = "Le champ sujet ne peut être plus long que {{ limit }} caractères "
     * )
     */
    private $sujet_ctt;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     *     message= "le champ ville ne doit pas être vide "
     * )
     * @Assert\Length(
     *      max = 255,
     *      maxMessage = "Le champ ville ne peut être plus long que {{ limit }} caractères "
     * )
     */
    private $ville_ctt;

    /**
     * @ORM\Column(type="string", length=500)
     * @Assert\NotBlank(
     *     message= "Le champ message ne doit pas être vide"
     * )
     * @Assert\Length(
     *      max = 500,
     *      maxMessage = "Le champ message ne peut être plus long que {{ limit }} caractères "
     * )
     */
    private $message_ctt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_ctt;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Personne", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false,name="id_personne", referencedColumnName="id_prs")
     */
    private $id_personne;

    public function getId(): ?int
    {
        return $this->id_ctt;
    }

    public function getSujet(): ?string
    {
        return $this->sujet_ctt;
    }

    public function setSujet(string $sujet_ctt): self
    {
        $this->sujet_ctt = $sujet_ctt;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville_ctt;
    }

    public function setVille(string $ville_ctt): self
    {
        $this->ville_ctt = $ville_ctt;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message_ctt;
    }

    public function setMessage(string $message_ctt): self
    {
        $this->message_ctt = $message_ctt;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date_ctt;
    }

    public function setDate(\DateTimeInterface $date_ctt): self
    {
        $this->date_ctt = $date_ctt;

        return $this;
    }

    public function getPersonne(): ?Personne
    {
        return $this->id_personne;
    }

    public function setPersonne(Personne $id_personne): self
    {
        $this->id_personne = $id_personne;

        return $this;
    }
}
