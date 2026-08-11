<?php

declare(strict_types = 1);

namespace Tests\Sniffs\Classes;

final class Bad
{

    // Generic.NamingConventions.UpperCaseConstantName
    // SlevomatCodingStandard.Classes.ClassConstantVisibility
    const name = 'bad';

    // SlevomatCodingStandard.Classes.DisallowMultiConstantDefinition
    public const A = 1, B = 2;

    // SlevomatCodingStandard.Classes.DisallowMultiPropertyDefinition
    private int $first = 0, $second = 0;
    // SlevomatCodingStandard.Classes.PropertySpacing
    private string $label = 'bad';

    public function increase(): self
    {
        $this->first = $this->second + 1;

        // SlevomatCodingStandard.Classes.ModernClassNameReference
        $class = get_class($this);

        // SlevomatCodingStandard.Classes.UselessLateStaticBinding
        return new self($class . $this->label . static::name . self::A . self::B);
    }

}
