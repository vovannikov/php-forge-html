<?php

declare(strict_types=1);

namespace PHPForge\Html\Tests\Attribute\Input;

use InvalidArgumentException;
use PHPForge\Html\Attribute\Input\HasFormmethod;
use PHPUnit\Framework\TestCase;

final class HasFormmethodTest extends TestCase
{
    public function testException(): void
    {
        $instance = new class () {
            use HasFormmethod;

            protected array $attributes = [];
        };

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'The formmethod attribute must be one of the following values: "GET", "POST".'
        );

        $instance->formmethod('');
    }

    public function testImmutability(): void
    {
        $instance = new class () {
            use HasFormmethod;

            protected array $attributes = [];
        };

        $this->assertNotSame($instance, $instance->formmethod('get'));
    }
}
