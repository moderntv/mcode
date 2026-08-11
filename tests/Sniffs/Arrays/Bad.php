<?php

declare(strict_types = 1);

namespace Tests\Sniffs\Arrays;

final class Bad
{

    /**
     * @return array<string, int>
     */
    public function items(): array
    {
        // Generic.Arrays.DisallowLongArraySyntax
        $items = array('a' => 1);

        // Squiz.Arrays.ArrayBracketSpacing
        $items[ 'b' ] = 2;

        // SlevomatCodingStandard.Arrays.DisallowImplicitArrayCreation
        $created['c'] = 3;

        return $items + $created;
    }

}
