<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TagRepository")
 */
class Tag
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
    private $title;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Suit", mappedBy="tags")
     */
    private $suits;


    public function __construct()
    {
        $this->suits = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Collection|Suit[]
     */
    public function getSuits(): Collection
    {
        return $this->suits;
    }

    public function addSuit(Suit $suit): self
    {
        if (!$this->suits->contains($suit)) {
            $this->suits[] = $suit;
            $suit->addT($this);
        }

        return $this;
    }

    public function removeSuit(Suit $suit): self
    {
        if ($this->suits->contains($suit)) {
            $this->suits->removeElement($suit);
            $suit->removeT($this);
        }

        return $this;
    }
}
