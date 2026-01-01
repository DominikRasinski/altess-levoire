<?php

namespace App\Repository;

use App\Model\Naytiba;
use App\Model\NaytibaTypeEnum;

class FirstLevelRepo 
{
    public function __construct(){}

    public function findAll(): Array 
    {
        return [
            new Naytiba(
                1,
                'Creeper',
                'Creeper is a Naytiba Minion enemy',
                NaytibaTypeEnum::MINION
            ),
            new Naytiba(
                2,
                'Mutated Creeper',
                'Mutated Creeper is a Naytiba Warrior enemy',
                NaytibaTypeEnum::WARRIOR
            ),
            new Naytiba(
                3,
                'Cricket Slasher',
                'Cricket Slasher is a Naytiba Warrior enemy',
                NaytibaTypeEnum::WARRIOR
            )
        ];
    }

    public function find(int $id): ?Naytiba
    {
        foreach($this->findAll() as $naytiba) {
            if($naytiba->getId() === $id) {
                return $naytiba;
            }
        }
        return null;
    }

}
