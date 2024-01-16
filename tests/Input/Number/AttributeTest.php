<?php

declare(strict_types=1);

namespace PHPForge\Html\Tests\Input\Number;

use PHPForge\Html\Input\Number;
use PHPForge\Support\Assert;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class AttributeTest extends TestCase
{
    public function testAriaDescribedBy(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" aria-describedby="value">
            HTML,
            Number::widget()->ariaDescribedBy('value')->id('number-6582f2d099e8b')->render()
        );
    }

    public function testAriaLabel(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" aria-label="value">
            HTML,
            Number::widget()->ariaLabel('value')->id('number-6582f2d099e8b')->render()
        );
    }

    public function testAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input class="value" id="number-6582f2d099e8b" type="number">
            HTML,
            Number::widget()->attributes(['class' => 'value'])->id('number-6582f2d099e8b')->render()
        );
    }

    public function testAutofocus(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" autofocus>
            HTML,
            Number::widget()->autofocus()->id('number-6582f2d099e8b')->render()
        );
    }

    public function testClass(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input class="value" id="number-6582f2d099e8b" type="number">
            HTML,
            Number::widget()->class('value')->id('number-6582f2d099e8b')->render()
        );
    }

    public function testDataAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" data-value="value">
            HTML,
            Number::widget()->dataAttributes(['value' => 'value'])->id('number-6582f2d099e8b')->render()
        );
    }

    public function testDisabled(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" disabled>
            HTML,
            Number::widget()->disabled()->id('number-6582f2d099e8b')->render()
        );
    }

    public function testForm(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" form="value">
            HTML,
            Number::widget()->form('value')->id('number-6582f2d099e8b')->render()
        );
    }

    public function testGenerateAriaDescribeBy(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" aria-describedby="number-6582f2d099e8b-help">
            HTML,
            Number::widget()->ariaDescribedBy()->id('number-6582f2d099e8b')->render()
        );
    }

    public function testGenerateAriaDescribeByWithFalse(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number">
            HTML,
            Number::widget()->ariaDescribedBy(false)->id('number-6582f2d099e8b')->render()
        );
    }

    public function testGenerateId(): void
    {
        $this->assertStringContainsString('id="number-', Number::widget()->render());
    }

    public function testGetValue(): void
    {
        $this->assertSame('value', Number::widget()->value('value')->getValue());
    }

    public function testHidden(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" hidden>
            HTML,
            Number::widget()->hidden()->id('number-6582f2d099e8b')->render()
        );
    }

    public function testId(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="value" type="number">
            HTML,
            Number::widget()->id('value')->render()
        );
    }

    public function testLang(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" lang="en">
            HTML,
            Number::widget()->id('number-6582f2d099e8b')->lang('en')->render()
        );
    }

    public function testMax(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" max="value">
            HTML,
            Number::widget()->id('number-6582f2d099e8b')->max('value')->render()
        );
    }

    public function testMin(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" min="value">
            HTML,
            Number::widget()->id('number-6582f2d099e8b')->min('value')->render()
        );
    }

    public function testName(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" name="value" type="number">
            HTML,
            Number::widget()->id('number-6582f2d099e8b')->name('value')->render()
        );
    }

    public function testPlaceholder(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" placeholder="value">
            HTML,
            Number::widget()->id('number-6582f2d099e8b')->placeholder('value')->render()
        );
    }

    public function testReadonly(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" readonly>
            HTML,
            Number::widget()->id('number-6582f2d099e8b')->readonly()->render()
        );
    }

    public function testRender(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number">
            HTML,
            Number::widget()->id('number-6582f2d099e8b')->render()
        );
    }

    public function testRequired(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" required>
            HTML,
            Number::widget()->id('number-6582f2d099e8b')->required()->render()
        );
    }

    public function testStep(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" step="1">
            HTML,
            Number::widget()->id('number-6582f2d099e8b')->step(1)->render()
        );
    }

    public function testStyle(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" style="value">
            HTML,
            Number::widget()->id('number-6582f2d099e8b')->style('value')->render()
        );
    }

    public function testTabIndex(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" tabindex="1">
            HTML,
            Number::widget()->id('number-6582f2d099e8b')->tabIndex(1)->render()
        );
    }

    public function testTitle(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" title="value">
            HTML,
            Number::widget()->id('number-6582f2d099e8b')->title('value')->render()
        );
    }

    public function testValue(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number" value="1">
            HTML,
            Number::widget()->id('number-6582f2d099e8b')->value('1')->render()
        );
    }

    public function testValueWithEmpty(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number">
            HTML,
            Number::widget()->id('number-6582f2d099e8b')->value(null)->render()
        );
    }

    public function testWithoutId(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input type="number">
            HTML,
            Number::widget()->id(null)->render()
        );
    }

    public function testWithoutName(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="number-6582f2d099e8b" type="number">
            HTML,
            Number::widget()->id('number-6582f2d099e8b')->name(null)->render()
        );
    }
}