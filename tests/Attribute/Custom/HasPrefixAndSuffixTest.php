<?php

declare(strict_types=1);

namespace PHPForge\Html\Tests\Attribute\Custom;

use PHPForge\Html\Attribute\Custom\HasPrefixAndSuffix;
use PHPForge\Html\Span;
use PHPUnit\Framework\TestCase;

final class HasPrefixAndSuffixTest extends TestCase
{
    public function testImmutablity(): void
    {
        $instance = new class() {
            use HasPrefixAndSuffix;
        };

        $this->assertNotSame($instance, $instance->prefix(''));
        $this->assertNotSame($instance, $instance->suffix(''));
    }

    public function testPrefix(): void
    {
        $instance = new class() {
            use HasPrefixAndSuffix;

            public function getPrefix(): string
            {
                return $this->prefix;
            }
        };

        $instance = $instance->prefix(
            Span::widget(),
            'foo && bar',
        );

        $this->assertSame('<span></span>foo &amp;&amp; bar', $instance->getPrefix());
    }

    public function testSuffix(): void
    {
        $instance = new class() {
            use HasPrefixAndSuffix;

            public function getSuffix(): string
            {
                return $this->suffix;
            }
        };

        $instance = $instance->suffix(
            'foo && bar',
            Span::widget(),
        );

        $this->assertSame('foo &amp;&amp; bar<span></span>', $instance->getSuffix());
    }
}