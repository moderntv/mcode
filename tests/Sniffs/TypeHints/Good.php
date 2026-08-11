<?php

declare(strict_types = 1);

namespace Tests\Sniffs\TypeHints;

final class Good
{

    public function join(?string $prefix, int $count): string
    {
        return sprintf('%s-%d', $prefix ?? '', $count);
    }

}
