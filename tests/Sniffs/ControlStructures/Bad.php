<?php

declare(strict_types = 1);

namespace Tests\Sniffs\ControlStructures;

final class Bad
{

    public function describe(int $count): string
    {
        // SlevomatCodingStandard.ControlStructures.DisallowYodaComparison
        if (0 === $count) {
            return 'none';
        }
        // PSR2.ControlStructures.ElseIfDeclaration
        else if ($count === 1) {
            return 'one';
        }

        // SlevomatCodingStandard.ControlStructures.UselessTernaryOperator
        $many = $count > 10 ? true : false;

        // Squiz.Operators.ValidLogicalOperators
        if ($many AND $count > 0) {
            return 'many';
        }

        // SlevomatCodingStandard.PHP.UselessParentheses
        return (string) (($count));
    }

}
