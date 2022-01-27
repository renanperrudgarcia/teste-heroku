<?php

use App\Shared\Adapters\Contracts\HttpClient;
use App\Shared\Adapters\Contracts\DatabaseDriver;
use App\Shared\Adapters\Contracts\CacheSystem;
use App\Shared\Adapters\Contracts\ValidatorTool;
use App\Shared\Adapters\Contracts\Presentation\TemplatePresenter;
use App\Shared\Adapters\Contracts\QueryBuilder\DeleteStatement;
use App\Shared\Adapters\Contracts\QueryBuilder\InsertStatement;
use App\Shared\Adapters\Contracts\QueryBuilder\SelectStatement;
use App\Shared\Adapters\Contracts\QueryBuilder\UpdateStatement;
use App\Shared\Adapters\QueryBuilder\Postgres\Delete;
use App\Shared\Adapters\QueryBuilder\Postgres\Insert;
use App\Shared\Adapters\QueryBuilder\Postgres\Select;
use App\Shared\Adapters\QueryBuilder\Postgres\Update;

use App\Cliente\UseCases\Contracts\ClienteRepository as ClienteRepositoryInterface;
use App\Cliente\Adapters\Repositories\ClienteRepository;

use App\Shared\Infra\GuzzleHttpClient;
use App\Shared\Infra\RespectValidation;

$injections = [
  // Adapters
  HttpClient::class => DI\autowire(GuzzleHttpClient::class),
  DatabaseDriver::class => DI\get('database'),
  CacheSystem::class => DI\get('cache'),
  PokemonAPI::class => DI\get('pokemonApi'),
  ValidatorTool::class => DI\autowire(RespectValidation::class),
  TemplatePresenter::class => DI\get('templatePresentation'),
  SelectStatement::class => DI\autowire(Select::class),
  InsertStatement::class => DI\autowire(Insert::class),
  UpdateStatement::class => DI\autowire(Update::class),
  DeleteStatement::class => DI\autowire(Delete::class),

  // Repositories
  ClienteRepositoryInterface::class => DI\autowire(ClienteRepository::class),
];