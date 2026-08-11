<?php

declare(strict_types = 1);

namespace Tests\Sniffs\WhiteSpace;

final class Bad
{

    public function compare(int $a, int $b): bool
    {
        // Squiz.WhiteSpace.OperatorSpacing
        $sum = $a+$b;

        // Generic.Formatting.SpaceAfterCast + Squiz.WhiteSpace.CastSpacing
        $flag = (bool)$sum;

        // Squiz.WhiteSpace.SemicolonSpacing
        $other = $b ;

        // Generic.WhiteSpace.IncrementDecrementSpacing
        $other ++;

        // Squiz.WhiteSpace.LogicalOperatorSpacing
        return $flag  && $other > 0;
    }

}
