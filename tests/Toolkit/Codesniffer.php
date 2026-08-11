<?php

declare(strict_types = 1);

namespace Tests\Toolkit;

use JsonException;
use RuntimeException;

/**
 * Runs the shipped codesniffer ruleset over a fixture and normalizes the report,
 * so it can be compared against a snapshot.
 */
final class Codesniffer
{

    public const RULESET = __DIR__ . '/../../ruleset.xml';

    /**
     * @return array{errors: int, warnings: int, messages: list<array{line: int, column: int, type: string, source: string}>}
     */
    public static function analyse(string $file, string $ruleset = self::RULESET): array
    {
        $command = sprintf(
            '%s --standard=%s --report=json --no-colors -q --runtime-set ignore_errors_on_exit 1 --runtime-set ignore_warnings_on_exit 1 %s',
            escapeshellarg(self::root() . '/vendor/bin/phpcs'),
            escapeshellarg($ruleset),
            escapeshellarg($file),
        );

        $output = [];
        $code = 0;
        exec($command . ' 2>&1', $output, $code);

        if ($code !== 0) {
            throw new RuntimeException(sprintf("Codesniffer failed (exit %d):\n%s", $code, implode("\n", $output)));
        }

        return self::normalize(self::decode(implode("\n", $output)));
    }

    /**
     * @return list<string>
     */
    public static function sniffs(string $ruleset = self::RULESET): array
    {
        $command = sprintf(
            '%s -e --standard=%s --no-colors',
            escapeshellarg(self::root() . '/vendor/bin/phpcs'),
            escapeshellarg($ruleset),
        );

        $output = [];
        $code = 0;
        exec($command . ' 2>&1', $output, $code);

        if ($code !== 0) {
            throw new RuntimeException(sprintf("Codesniffer failed (exit %d):\n%s", $code, implode("\n", $output)));
        }

        $sniffs = [];

        foreach ($output as $line) {
            $line = trim($line);

            // Sniff names are indented, everything else is a header or a blank line
            if ($line === '' || !str_contains($line, '.') || str_contains($line, ' ')) {
                continue;
            }

            $sniffs[] = $line;
        }

        sort($sniffs);

        return $sniffs;
    }

    /**
     * @param array<mixed, mixed> $report
     * @return array{errors: int, warnings: int, messages: list<array{line: int, column: int, type: string, source: string}>}
     */
    private static function normalize(array $report): array
    {
        $files = $report['files'] ?? null;
        $messages = [];

        foreach (is_array($files) ? $files : [] as $file) {
            $reported = is_array($file) ? $file['messages'] ?? null : null;

            if (!is_array($reported)) {
                continue;
            }

            foreach ($reported as $message) {
                if (!is_array($message)) {
                    continue;
                }

                $messages[] = [
                    'line' => (int) self::value($message, 'line'),
                    'column' => (int) self::value($message, 'column'),
                    'type' => self::value($message, 'type'),
                    'source' => self::value($message, 'source'),
                ];
            }
        }

        usort($messages, static fn (array $a, array $b): int => [$a['line'], $a['column'], $a['source']] <=> [$b['line'], $b['column'], $b['source']]);

        return [
            'errors' => count(array_filter($messages, static fn (array $message): bool => $message['type'] === 'ERROR')),
            'warnings' => count(array_filter($messages, static fn (array $message): bool => $message['type'] === 'WARNING')),
            'messages' => $messages,
        ];
    }

    /**
     * @param array<mixed, mixed> $message
     */
    private static function value(array $message, string $key): string
    {
        $value = $message[$key] ?? null;

        return is_scalar($value) ? (string) $value : '';
    }

    /**
     * @return array<mixed, mixed>
     */
    private static function decode(string $output): array
    {
        try {
            $report = json_decode(trim($output), true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            throw new RuntimeException(sprintf("Unable to decode codesniffer report (%s):\n%s", $e->getMessage(), $output), 0, $e);
        }

        if (!is_array($report)) {
            throw new RuntimeException(sprintf("Unexpected codesniffer report:\n%s", $output));
        }

        return $report;
    }

    private static function root(): string
    {
        return dirname(__DIR__, 2);
    }

}
