<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\FotosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FotosRepository::class)]
#[ApiResource]
class Fotos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $filename = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $upload = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $shootdate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $comment = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): static
    {
        $this->filename = $filename;

        return $this;
    }

    public function getUpload(): ?\DateTime
    {
        return $this->upload;
    }

    public function setUpload(?\DateTime $upload): static
    {
        $this->upload = $upload;

        return $this;
    }

    public function getShootdate(): ?\DateTime
    {
        return $this->shootdate;
    }

    public function setShootdate(?\DateTime $shootdate): static
    {
        $this->shootdate = $shootdate;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): static
    {
        $this->comment = $comment;

        return $this;
    }
}
