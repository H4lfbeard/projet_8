<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass=TaskRepository::class)
 */
class Task
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isDone;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="tasks")
     */
    private $user;

    public function getId():  ? int
    {
        return $this->id;
    }

    public function getTitle() :  ? string
    {
        return $this->title;
    }

    public function setTitle(string $title) : self
    {
        $this->title = $title;

        return $this;
    }

    public function getCreatedAt():  ? \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt) : self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getContent():  ? string
    {
        return $this->content;
    }

    public function setContent( ? string $content) : self
    {
        $this->content = $content;

        return $this;
    }

    public function isIsDone() :  ? bool
    {
        return $this->isDone;
    }

    public function setIsDone(bool $isDone) : self
    {
        $this->isDone = $isDone;

        return $this;
    }

    public function getUser():  ? User
    {
        return $this->user;
    }

    public function setUser( ? User $user) : self
    {
        $this->user = $user;

        return $this;
    }

    public function isDone()
    {
        return $this->isDone;
    }

    public function toggle($flag)
    {
        $this->isDone = $flag;
    }
}
