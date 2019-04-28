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
        return false;
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
        return 'benchmark/rest';
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
        return 2;
    }

    public static function getCoreDependencyPatchVersion(): int
    {
        return 0;
    }

    public static function getBenchmarkType(): int
    {
        return 3;
    }

    public static function getSourceCodeUrls(): array
    {
        return [
            'route' => 'https://github.com/phpbenchmarks/symlex-common/blob/4.3.2/src/Controller/RestController.php#L27',
            'controller' => 'https://github.com/phpbenchmarks/symlex-common/blob/4.3.2/src/Controller/RestController.php',
            'randomizeLanguageDispatchEvent' => 'https://github.com/phpbenchmarks/symlex-common/blob/4.3.2/src/Controller/RestController.php#L29',
            'randomizeLanguageEventListener' => 'https://github.com/phpbenchmarks/symlex-common/blob/4.3.2/src/EventListener/DefineLocaleEventListener.php',
            'translations' => 'https://github.com/phpbenchmarks/symlex-common/blob/4.3.2/src/L10n/phpbenchmarks.en_GB.yml',
            'translate' => 'https://github.com/phpbenchmarks/symlex-common/blob/4.3.2/src/Normalizer/UserNormalizer.php#L52',
            'serialize' => 'https://github.com/phpbenchmarks/symlex-common/blob/4.3.2/src/Normalizer/UserNormalizer.php'
        ];
    }
}
