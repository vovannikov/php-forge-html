<?php

declare(strict_types=1);

namespace PHPForge\Html\Tests\Ol;

use PHPForge\Html\Ol;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class ImmutableTest extends TestCase
{
    public function testImmutable(): void
    {
        $ul = Ol::widget();

        $this->assertNotSame($ul, $ul->content(''));
    }
}
