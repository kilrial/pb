<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles", indexes={@ORM\Index(name="id_categories", columns={"id_categories"})})
 * @ORM\Entity
 */
class Articles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titel", type="text", length=255, nullable=true)
     */
    private $titel;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=255, nullable=false)
     */
    private $image;

    /**
     * @var \Entities\Categories
     *
     * @ORM\ManyToOne(targetEntity="Entities\Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categories", referencedColumnName="id")
     * })
     */
    private $idCategories;

 /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titel.
     *
     * @param string|null $titel
     *
     * @return Articles
     */
    public function setTitel($titel = null)
    {
        $this->titel = $titel;

        return $this;
    }

    /**
     * Get titel.
     *
     * @return string|null
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * Set text.
     *
     * @param string $text
     *
     * @return Articles
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set idCategories.
     *
     * @param int|null $idCategories
     *
     * @return Articles
     */
    public function setIdCategories($idCategories = null)
    {
        $this->idCategories = $idCategories;

        return $this;
    }

    /**
     * Get idCategories.
     *
     * @return int|null
     */
    public function getIdCategories()
    {
        return $this->idCategories;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Articles
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set image.
     *
     * @param string $image
     *
     * @return Articles
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}

