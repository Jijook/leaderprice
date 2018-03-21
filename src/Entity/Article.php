<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomArticle;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $poidsArticle;

    /**
     * @ORM\Column(type="float")
     */
    private $prixArticle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $catArticle;

    public function getId()
    {
        return $this->id;
    }

    public function getNomArticle(): ?string
    {
        return $this->nomArticle;
    }

    public function setNomArticle(string $nomArticle): self
    {
        $this->nomArticle = $nomArticle;

        return $this;
    }

    public function getPoidsArticle(): ?float
    {
        return $this->poidsArticle;
    }

    public function setPoidsArticle(?float $poidsArticle): self
    {
        $this->poidsArticle = $poidsArticle;

        return $this;
    }

    public function getPrixArticle(): ?float
    {
        return $this->prixArticle;
    }

    public function setPrixArticle(float $prixArticle): self
    {
        $this->prixArticle = $prixArticle;

        return $this;
    }

    public function getCatArticle(): ?string
    {
        return $this->catArticle;
    }

    public function setCatArticle(string $catArticle): self
    {
        $this->catArticle = $catArticle;

        return $this;
    }
}
