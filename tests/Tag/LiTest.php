<?php

declare(strict_types=1);

namespace Forge\Html\Tests\Tag;

use Forge\Html\Tag\Tag;
use Forge\TestUtils\Assert;
use PHPUnit\Framework\TestCase;

final class LiTest extends TestCase
{
    public function createProvider(): array
    {
        return [
            [[], '', '<li>' . PHP_EOL . '</li>'],
            [['class' => 'class'], '', '<li class="class">' . PHP_EOL . '</li>'],
            [[], 'Content', '<li>' . PHP_EOL . 'Content' . PHP_EOL . '</li>'],
            [['disabled' => true], '', '<li disabled>' . PHP_EOL . '</li>'],
        ];
    }

    /**
     * @dataProvider createProvider
     *
     * @param array $attributes Tag attributes.
     * @param string $content Tag content.
     * @param string $expected Expected result.
     */
    public function testCreate(array $attributes, string $content, string $expected): void
    {
        $assert = new Assert();

        $assert->equalsWithoutLE($expected, Tag::li($attributes, $content));
    }
}