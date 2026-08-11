<?php

declare(strict_types = 1);

namespace Tests\Sniffs\Commenting;

/**
 * @author Someone
 * @version 1.0
 */
final class Bad
{

    /**
     * @var list<string>
     */
    private array $names = [];

    //

    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param list<string> $names
     * @return self
     */
    public function withNames(array $names): self
    {
        $clone = clone $this;
        $clone->names = $names;

        return $clone;
    }

}
