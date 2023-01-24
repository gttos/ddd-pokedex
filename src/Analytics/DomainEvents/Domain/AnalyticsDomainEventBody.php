<?php

declare(strict_types=1);

namespace Pokedex\Analytics\DomainEvents\Domain;

final class AnalyticsDomainEventBody
{
    public function __construct(private readonly array $value)
    {
    }

    public function value(): array
    {
        return $this->value;
    }
}
