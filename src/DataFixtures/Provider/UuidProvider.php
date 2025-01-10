<?php

namespace App\DataFixtures\Provider;

use Symfony\Component\Uid\UuidV7;

class UuidProvider
{
    public static function uuidV7(): UuidV7
    {
        return UuidV7::v7();
    }
}