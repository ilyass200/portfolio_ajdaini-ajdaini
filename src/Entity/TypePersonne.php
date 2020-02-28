<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TypePersonneRepository")
 */
class TypePersonne
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_type_prs;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $status_type_prs;

    public function getId(): ?int
    {
        return $this->id_type_prs;
    }

    public function getStatusTypePrs(): ?string
    {
        return $this->status_type_prs;
    }

    public function setStatusTypePrs(string $status_type_prs): self
    {
        $this->status_type_prs = $status_type_prs;

        return $this;
    }
}
