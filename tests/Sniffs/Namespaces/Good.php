<?php

declare(strict_types = 1);

namespace Tests\Sniffs\Namespaces;

use DateTimeImmutable;
use RuntimeException;

final class Good
{

    public function now(): DateTimeImmutable
    {
        if (!class_exists(DateTimeImmutable::class)) {
            throw new RuntimeException('Impossible.');
        }

        return new DateTimeImmutable();
    }

}
