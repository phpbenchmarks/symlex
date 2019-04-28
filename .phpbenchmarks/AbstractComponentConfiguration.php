<?php

declare(strict_types=1);

namespace AbstractComponentConfiguration;

abstract class AbstractComponentConfiguration
{
    public static function getComponentType(): int
    {
        return 2;
    }

    public static function getComponentName(): string
    {
        return 'Symlex';
    }

    public static function getComponentSlug(): string
    {
        return 'symlex';
    }

    public static function isPhp56Enabled(): bool
    {
        return false;
    }

    public static function isPhp70Enabled(): bool
    {
        return false;
    }

    public static function isPhp71Enabled(): bool
    {
        return true;
    }

    public static function isPhp72Enabled(): bool
    {
        return true;
    }

    public static function isPhp73Enabled(): bool
    {
        return true;
    }

    public static function getBenchmarkUrl(): string
    {
        return 'benchmark/helloworld';
    }

    public static function getCoreDependencyName(): string
    {
        return 'symlex/symlex-core';
    }

    public static function getCoreDependencyMajorVersion(): int
    {
        return 4;
    }

    public static function getCoreDependencyMinorVersion(): int
    {
        return 1;
    }

    public static function getCoreDependencyPatchVersion(): int
    {
        return 1;
    }

    public static function getBenchmarkType(): int
    {
        return 1;
    }

    public static function getSourceCodeUrls(): array
    {
        return [
            'route' => 'https://github.com/phpbenchmarks/symlex-common/blob/4.1.0/src/Controller/BenchmarkController.php#L12',
            'controller' => 'https://github.com/phpbenchmarks/symlex-common/blob/4.1.0/src/Controller/BenchmarkController.php'
        ];
    }
}
