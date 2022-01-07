<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments", indexes={@ORM\Index(name="id_articles", columns={"id_articles"})})
 * @ORM\Entity
 */
class Comments
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
     * @ORM\Column(name="author", type="text", length=255, nullable=true)
     */
    private $author;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=true)
     */
    private $text;

    /**
     * @var \Entities\Articles
     *
     * @ORM\ManyToOne(targetEntity="Entities\Articles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_articles", referencedColumnName="id")
     * })
     */
    private $idArticles;

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
     * Set author.
     *
     * @param string|null $author
     *
     * @return Comments
     */
    public function setAuthor($author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author.
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set text.
     *
     * @param string|null $text
     *
     * @return Comments
     */
    public function setText($text = null)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text.
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set idArticles.
     *
     * @param int $idArticles
     *
     * @return Comments
     */
    public function setIdArticles($idArticles)
    {
        $this->idArticles = $idArticles;

        return $this;
    }

    /**
     * Get idArticles.
     *
     * @return int
     */
    public function getIdArticles()
    {
        return $this->idArticles;
    }
}

