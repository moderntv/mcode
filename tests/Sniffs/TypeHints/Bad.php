<?php

declare(strict_types = 1);

namespace Tests\Sniffs\TypeHints;

final class Bad
{

    // SlevomatCodingStandard.TypeHints.ParameterTypeHint
    // SlevomatCodingStandard.TypeHints.ReturnTypeHint
    public function join($prefix, $count)
    {
        return sprintf('%s-%d', $prefix, $count);
    }

    /**
     * SlevomatCodingStandard.TypeHints.LongTypeHints
     * SlevomatCodingStandard.TypeHints.NullTypeHintOnLastPosition
     *
     * @param integer $count
     * @return null|integer
     */
    public function count($count)
    {
        return $count;
    }

    // SlevomatCodingStandard.TypeHints.NullableTypeForNullDefaultValue
    public function label(string $label = null): string
    {
        return (string) $label;
    }

}
