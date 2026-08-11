<?php

declare(strict_types = 1);

namespace Tests\Sniffs\ControlStructures;

final class Good
{

    public function describe(int $count): string
    {
        if ($count === 0) {
            return 'none';
        } elseif ($count === 1) {
            return 'one';
        }

        return $count > 10 ? 'many' : 'some';
    }

}
