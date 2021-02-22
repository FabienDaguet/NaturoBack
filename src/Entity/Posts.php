<?php

namespace App\Entity;

use App\Entity\Users;
use App\Entity\Category;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PostsRepository;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass=PostsRepository::class)
 */
class Posts
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $postTitle;

    /**
     * @ORM\Column(type="text")
     */
    private $postContent;

    /**
     * @ORM\Column(type="text")
     */
    private $postImg;

    /**
     * @ORM\Column(type="datetime")
     */
    private $postDate;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="posts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $postAuthor;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="posts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $postCategory;

    /**
     * @Gedmo\Slug(fields={"postTitle"})
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPostTitle(): ?string
    {
        return $this->postTitle;
    }

    public function setPostTitle(string $postTitle): self
    {
        $this->postTitle = $postTitle;

        return $this;
    }

    public function getPostContent(): ?string
    {
        return $this->postContent;
    }

    public function setPostContent(string $postContent): self
    {
        $this->postContent = $postContent;

        return $this;
    }

    public function getPostImg(): ?string
    {
        return $this->postImg;
    }

    public function setPostImg(string $postImg): self
    {
        $this->postImg = $postImg;

        return $this;
    }

    public function getPostDate(): ?\DateTimeInterface
    {
        return $this->postDate;
    }

    public function setPostDate(\DateTimeInterface $postDate): self
    {
        $this->postDate = $postDate;

        return $this;
    }

    public function getPostAuthor(): ?Users
    {
        return $this->postAuthor;
    }

    public function setPostAuthor(?Users $postAuthor): self
    {
        $this->postAuthor = $postAuthor;

        return $this;
    }

    public function getPostCategory(): ?Category
    {
        return $this->postCategory;
    }

    public function setPostCategory(?Category $postCategory): self
    {
        $this->postCategory = $postCategory;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }
}
