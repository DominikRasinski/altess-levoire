<?php

namespace App\DataFixtures;

use App\Entity\Naytiba;
use App\Model\NaytibaTypeEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $naytiba1 = new Naytiba();
       $naytiba1->setId(1);
       $naytiba1->setName("Creeper");
       $naytiba1->setDescription('Creeper is a Naytiba Minion enemy');
       $naytiba1->setClassType(NaytibaTypeEnum::MINION);

       $naytiba2 = new Naytiba();
       $naytiba2->setId(2);
       $naytiba2->setName('Mutated Creeper');
       $naytiba2->setDescription('Mutated Creeper is a Naytiba Warrior');
       $naytiba2->setClassType(NaytibaTypeEnum::WARRIOR);

       $naytiba3 = new Naytiba();
       $naytiba3->setId(3);
       $naytiba3->setName('Cricket Slasher');
       $naytiba3->setDescription('Cricket Slasher is a Naytiba Warrior');
       $naytiba3->setClassType(NaytibaTypeEnum::WARRIOR);

       $manager->persist($naytiba1);
       $manager->persist($naytiba2);
       $manager->persist($naytiba3);

       $manager->flush();
    }
}
