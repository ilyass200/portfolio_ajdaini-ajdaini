<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjetRepository")
 */
class Projet
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_prj;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre_prj;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $contenu_prj;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_prj;

    public function getId(): ?int
    {
        return $this->id_prj;
    }

    public function getTitrePrj(): ?string
    {
        return $this->titre_prj;
    }

    public function setTitrePrj(string $titre_prj): self
    {
        $this->titre_prj = $titre_prj;

        return $this;
    }

    public function getContenuPrj(): ?string
    {
        return $this->contenu_prj;
    }

    public function setContenuPrj(string $contenu_prj): self
    {
        $this->contenu_prj = $contenu_prj;

        return $this;
    }

    public function getDatePrj(): ?\DateTimeInterface
    {
        return $this->date_prj;
    }

    public function setDatePrj(\DateTimeInterface $date_prj): self
    {
        $this->date_prj = $date_prj;

        return $this;
    }
}
