<?php

declare(strict_types = 1);

namespace Tests\Sniffs\Arrays;

final class Good
{

    /**
     * @return array<string, int>
     */
    public function items(): array
    {
        return ['a' => 1, 'b' => 2];
    }

}
