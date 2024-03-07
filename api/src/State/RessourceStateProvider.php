<?php

namespace App\State;

use App\Repository\RessourceRepository;
use ApiPlatform\Metadata\Operation;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\State\ProviderInterface;
use App\ApiResource\Ressource as RessourceResource;

final class RessourceStateProvider implements ProviderInterface
{
	public function __construct(private RessourceRepository $ressourceRepository)
	{
		$this->ressourceRepository = $ressourceRepository;
	}

	public function provide(Operation $operation, array $uriVariables = [], array $context = []): object|array|null
	{
		if ($operation instanceof GetCollection) {

			$ressources = $this->ressourceRepository->findAll();
			// dd($ressources);
			$ressourceRessources = [];

			foreach ($ressources as $ressource) {
				$ressourceRessources[] = $ressource->toResource();
			}

			return $ressourceRessources;
		}
	}
}
