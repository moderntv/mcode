<?php

declare(strict_types = 1);

namespace Tests\Cases;

use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Tests\Toolkit\Codesniffer;

/**
 * Each fixture under tests/Sniffs is checked with the shipped ruleset:
 *
 * - Good.php must be reported clean
 * - Bad.php must report exactly what its snapshot says
 *
 * Regenerate snapshots with `make snapshots`.
 */
final class SniffTest extends TestCase
{

    /**
     * @return Generator<string, array{string, string}>
     */
    public static function provideFixtures(): Generator
    {
        foreach (self::fixtures() as $key => $fixture) {
            $snapshot = substr($fixture, 0, -4) . '.snapshot.json';

            if (!is_file($snapshot)) {
                continue;
            }

            yield $key => [$fixture, $snapshot];
        }
    }

    /**
     * @return Generator<string, array{string}>
     */
    public static function provideGoodFixtures(): Generator
    {
        foreach (self::fixtures() as $key => $fixture) {
            if (basename($fixture) !== 'Good.php') {
                continue;
            }

            yield $key => [$fixture];
        }
    }

    #[DataProvider('provideFixtures')]
    public function testFixtureMatchesSnapshot(string $fixture, string $snapshot): void
    {
        $expected = json_decode((string) file_get_contents($snapshot), true);

        self::assertSame($expected, Codesniffer::analyse($fixture));
    }

    #[DataProvider('provideGoodFixtures')]
    public function testGoodFixtureIsClean(string $fixture): void
    {
        $report = Codesniffer::analyse($fixture);

        self::assertSame([], $report['messages'], sprintf('%s is expected to be clean.', $fixture));
    }

    /**
     * @return array<string, string>
     */
    private static function fixtures(): array
    {
        $files = glob(__DIR__ . '/../Sniffs/*/*.php') ?: [];
        sort($files);

        $fixtures = [];

        foreach ($files as $file) {
            $fixtures[basename(dirname($file)) . '/' . basename($file)] = $file;
        }

        return $fixtures;
    }

}
