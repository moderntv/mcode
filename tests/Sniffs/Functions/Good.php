<?php

declare(strict_types = 1);

namespace Tests\Sniffs\Functions;

final class Good
{

    /**
     * @param list<int> $numbers
     * @return list<int>
     */
    public function double(array $numbers): array
    {
        return array_map(static fn (int $number): int => $number * 2, $numbers);
    }

    public function trim(string $value): string
    {
        return rtrim($value);
    }

}
