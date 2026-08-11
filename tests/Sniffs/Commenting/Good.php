<?php

declare(strict_types = 1);

namespace Tests\Sniffs\Commenting;

final class Good
{

    /** @var list<string> */
    private array $names = [];

    /**
     * @param list<string> $names
     */
    public function withNames(array $names): self
    {
        $clone = clone $this;
        $clone->names = $names;

        return $clone;
    }

}
