<?php

declare(strict_types = 1);

namespace Tests\Sniffs\Classes;

final class Good
{

    public const NAME = 'good';

    private const LIMIT = 10;

    private int $count = 0;

    private string $label;

    public function __construct(string $label)
    {
        $this->label = $label;
    }

    public function increase(): self
    {
        $this->count = min($this->count + 1, self::LIMIT);

        return new self($this->label);
    }

}
