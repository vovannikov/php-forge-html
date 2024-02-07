<?php

declare(strict_types=1);

namespace PHPForge\Html\Tests\Meta;

use PHPForge\Html\Meta;
use PHPForge\Support\Assert;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class AttributeTest extends TestCase
{
    public function testAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <meta class="value">
            HTML,
            Meta::widget()->attributes(['class' => 'value'])->render()
        );
    }

    public function testCharset(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <meta charset="value">
            HTML,
            Meta::widget()->charset('value')->render()
        );
    }

    public function testClass(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <meta class="value">
            HTML,
            Meta::widget()->attributes(['class' => 'value'])->render()
        );
    }

    public function testContent(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <meta name="name" content="value">
            HTML,
            Meta::widget()->content('name', 'value')->render()
        );
    }

    public function testHttpEquiv(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <meta http-equiv="name" content="value">
            HTML,
            Meta::widget()->httpEquiv('name', 'value')->render()
        );
    }

    public function testId(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <meta id="value">
            HTML,
            Meta::widget()->id('value')->render()
        );
    }

    public function testLang(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <meta lang="value">
            HTML,
            Meta::widget()->lang('value')->render()
        );
    }

    public function testStyle(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <meta style="value">
            HTML,
            Meta::widget()->style('value')->render()
        );
    }
}
