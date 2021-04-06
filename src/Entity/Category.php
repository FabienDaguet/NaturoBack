<?php

namespace App\Entity;

use App\Entity\Posts;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CategoryRepository;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 * @Vich\Uploadable
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $catName;

    /**
     * @ORM\OneToMany(targetEntity=Posts::class, mappedBy="postCategory")
     */
    private $posts;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $catImg;

    /**
     * @Vich\UploadableField(mapping="cat_image", fileNameProperty="catImg")
     * @var file
     */
    private $imageFile;

    /**
     * @Gedmo\Slug(fields={"catName"})
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatName(): ?string
    {
        return $this->catName;
    }

    public function setCatName(string $catName): self
    {
        $this->catName = $catName;

        return $this;
    }

    /**
     * @return Collection|Posts[]
     */
    public function getPosts(): Collection
    {
        return $this->posts;
    }

    public function addPost(Posts $post): self
    {
        if (!$this->posts->contains($post)) {
            $this->posts[] = $post;
            $post->setPostCategory($this);
        }

        return $this;
    }

    public function removePost(Posts $post): self
    {
        if ($this->posts->removeElement($post)) {
            // set the owning side to null (unless already changed)
            if ($post->getPostCategory() === $this) {
                $post->setPostCategory(null);
            }
        }

        return $this;
    }

    public function getCatImg(): ?string
    {
        return $this->catImg;
    }

    public function setCatImg(?string $catImg): self
    {
        $this->catImg = $catImg;

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
        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function __toString()
    {
        return $this->catName;
    }

    /*public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }*/

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}
