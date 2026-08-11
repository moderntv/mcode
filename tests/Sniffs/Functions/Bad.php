<?php

declare(strict_types = 1);

namespace Tests\Sniffs\Functions;

final class Bad
{

    /**
     * @param list<int> $numbers
     * @return list<int>
     */
    public function double(array $numbers): array
    {
        // SlevomatCodingStandard.Functions.StaticClosure
        return array_map(function (int $number): int {
            return $number * 2;
        }, $numbers);
    }
    // Squiz.WhiteSpace.FunctionSpacing
    public function trim(string $value): string
    {
        // Generic.PHP.ForbiddenFunctions
        return chop($value);
    }

    // SlevomatCodingStandard.Functions.UselessParameterDefaultValue
    public function pad(string $value = '', int $length): string
    {
        // Squiz.PHP.LowercasePHPFunctions
        return STR_PAD($value, $length);
    }

}
