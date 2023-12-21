<?php

declare(strict_types=1);

namespace PHPForge\Html\Tests\Attribute\Tag;

use InvalidArgumentException;
use PHPForge\Html\Attribute\Tag\HasEnctype;
use PHPUnit\Framework\TestCase;

final class HasEnctypeTest extends TestCase
{
    public function testException(): void
    {
        $instance = new class () {
            use HasEnctype;

            public array $attributes = [];
        };

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'The value must be one of: multipart/form-data, application/x-www-form-urlencoded, text/plain.'
        );

        $instance->enctype('');
    }

    public function testImmutability(): void
    {
        $instance = new class () {
            use HasEnctype;

            public array $attributes = [];
        };

        $this->assertNotSame($instance, $instance->enctype('text/plain'));
    }

    public function testRender(): void
    {
        $instance = new class () {
            use HasEnctype;

            public array $attributes = [];
        };

        $this->assertEmpty($instance->attributes);
        $this->assertSame(
            ['enctype' => 'application/x-www-form-urlencoded'],
            $instance->enctype('application/x-www-form-urlencoded')->attributes,
        );
        $this->assertSame(
            ['enctype' => 'multipart/form-data'],
            $instance->enctype('multipart/form-data')->attributes,
        );
        $this->assertSame(
            ['enctype' => 'text/plain'],
            $instance->enctype('text/plain')->attributes,
        );
    }
}
