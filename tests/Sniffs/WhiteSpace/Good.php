<?php

declare(strict_types = 1);

namespace Tests\Sniffs\WhiteSpace;

final class Good
{

    public function compare(int $a, int $b): bool
    {
        $sum = $a + $b;

        return (bool) $sum && $a === $b;
    }

}
