<?php

declare(strict_types = 1);

namespace Tests\Cases;

use PHPUnit\Framework\TestCase;
use Tests\Toolkit\Codesniffer;

/**
 * Guards the ruleset as a whole: every referenced sniff has to exist (codesniffer
 * bails out otherwise) and the registered set of sniffs must not change silently
 * when dependencies are upgraded.
 *
 * Regenerate the snapshot with `make snapshots`.
 */
final class RulesetTest extends TestCase
{

    private const SNAPSHOT = __DIR__ . '/../sniffs.snapshot.json';

    public function testEveryReferencedSniffExists(): void
    {
        // Codesniffer exits with an error on an unknown sniff reference
        $sniffs = Codesniffer::sniffs();

        self::assertNotSame([], $sniffs);
    }

    public function testRegisteredSniffsMatchSnapshot(): void
    {
        $expected = json_decode((string) file_get_contents(self::SNAPSHOT), true);

        self::assertSame($expected, Codesniffer::sniffs());
    }

}
