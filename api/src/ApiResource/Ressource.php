<?php

namespace App\ApiResource;

use ApiPlatform\Metadata\Get;
use App\State\UserStateProvider;
use ApiPlatform\Metadata\ApiResource;
use App\State\RessourceStateProvider;
use ApiPlatform\Metadata\GetCollection;


#[ApiResource(
    operations: [
        new Get(provider: RessourceStateProvider::class),
        new GetCollection(provider: RessourceStateProvider::class),
    ],
)]

class Ressource
{
    public int $id;

    public string $name;

    public ?string $description;

    // public ?string $user;

}