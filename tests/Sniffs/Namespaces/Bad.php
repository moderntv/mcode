<?php

declare(strict_types = 1);

namespace Tests\Sniffs\Namespaces;

// SlevomatCodingStandard.Namespaces.AlphabeticallySortedUses
use RuntimeException;
// SlevomatCodingStandard.Namespaces.UseDoesNotStartWithBackslash
use \DateTimeImmutable;
// SlevomatCodingStandard.Namespaces.UnusedUses
use LogicException;
// SlevomatCodingStandard.Namespaces.UselessAlias
use Throwable as Throwable;

final class Bad
{

    public function now(): DateTimeImmutable
    {
        // SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly
        if (!\class_exists(DateTimeImmutable::class)) {
            throw new \RuntimeException('Impossible.');
        }

        $ignore = RuntimeException::class;
        $also = Throwable::class;

        return new DateTimeImmutable($ignore . $also);
    }

}
