<?php

namespace App\Entity;

use App\Model\NaytibaTypeEnum;
use App\Repository\NaytibaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NaytibaRepository::class)]
class Naytiba
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(enumType: NaytibaTypeEnum::class)]
    private ?NaytibaTypeEnum $classType = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getClassType(): ?NaytibaTypeEnum
    {
        return $this->classType;
    }

    public function setClassType(NaytibaTypeEnum $classType): static
    {
        $this->classType = $classType;

        return $this;
    }
}
