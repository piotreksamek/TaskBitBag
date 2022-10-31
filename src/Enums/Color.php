<?php

declare(strict_types=1);

namespace App\Enums;

final class Color implements ColorInterface
{
    public const RED = 'Red';
    public const GREEN = 'Green';
    public const BLUE = 'Blue';

    public static function getColors(): array
    {
        return [
            self::BLUE,
            self::RED,
            self::GREEN,
        ];
    }
}
