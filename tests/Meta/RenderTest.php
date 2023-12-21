<?php

declare(strict_types=1);

namespace PHPForge\Html\Tests\Meta;

use PHPForge\Html\Meta;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class RenderTest extends TestCase
{
    public function testElement(): void
    {
        $this->assertSame('<meta>', Meta::widget()->render());
    }

    public function testImmutability(): void
    {
        $instance = Meta::widget();

        $this->assertNotSame($instance, $instance->content('', ''));
    }

    public function testName(): void
    {
        $this->assertSame(
            '<meta name="csrf" content="test">',
            Meta::widget()->content('csrf', 'test')->render(),
        );
    }
}
