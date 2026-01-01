<?php

namespace App\Model;

use App\Model\NaytibaTypeEnum;

class Naytiba 
{
    public function __construct(
        private int $id,
        private string $name,
        private string $description,
        private NaytibaTypeEnum $classType,
    ){}

    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getClassType(): NaytibaTypeEnum
    {
        return $this->classType;
    }
}