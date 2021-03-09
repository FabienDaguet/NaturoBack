<?php

namespace App\Entity;

use App\Entity\Users;
use App\Entity\Category;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PostsRepository;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=PostsRepository::class)
 * @Vich\Uploadable
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
     * @var string
     */
    private $postImg;

    /**
     * @Vich\UploadableField(mapping="post_image", fileNameProperty="postImg")
     * @var file
     */
    private $imageFile;

    /**
     * @var \DateTime $updateAt
     * 
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $postDate;

    /**
     * @var \DateTime $updateAt
     * 
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updateAt;

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

    public function __construct()
    {
        $this->updateAt = new \DateTime();
    }


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

    public function getPostImg()
    {
        return $this->postImg;
    }

    public function setPostImg($postImg)
    {
        $this->postImg = $postImg;
        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param File|null $imageFile
     */
    public function setImageFile($imageFile = null)
    {
        $this->imageFile = $imageFile;
        if ($imageFile) {
            $this->updateAt= new \DateTime('now');
        }    
    }

    public function getPostDate(): ?\DateTimeInterface
    {
        return $this->postDate;
    }


    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->updateAt;
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

    /*public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }*/

}
