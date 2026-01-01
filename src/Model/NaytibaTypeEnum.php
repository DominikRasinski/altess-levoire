<?php

namespace App\Model;

enum NaytibaTypeEnum: string {
    case MINION = 'Naytiba Minion';
    case WARRIOR = 'Naytiba Warrior';
    case ELITE = 'Elite Naytiba';
    case ALPHA = 'Alpha Naytiba';
    case ELDER = 'Elder Naytiba';
    case OTHER = 'Unclassified'
}