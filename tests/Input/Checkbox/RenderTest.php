<?php

declare(strict_types=1);

namespace PHPForge\Html\Tests\Input\Checkbox;

use PHPForge\Html\Input\Checkbox;
use PHPForge\Support\Assert;
use PHPUnit\Framework\TestCase;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class RenderTest extends TestCase
{
    public function testAriaDescribedBy(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox" aria-describedby="MyWidget">
            HTML,
            Checkbox::widget()->ariaDescribedBy('MyWidget')->id('text-6582f2d099e8b')->render()
        );
    }

    public function testAriaLabel(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox" aria-label="MyWidget">
            HTML,
            Checkbox::widget()->ariaLabel('MyWidget')->id('text-6582f2d099e8b')->render()
        );
    }

    public function testAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input class="class" id="text-6582f2d099e8b" type="checkbox">
            HTML,
            Checkbox::widget()->attributes(['class' => 'class'])->id('text-6582f2d099e8b')->render()
        );
    }

    public function testAutofocus(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox" autofocus>
            HTML,
            Checkbox::widget()->autofocus()->id('text-6582f2d099e8b')->render()
        );
    }

    public function testChecked(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox" value="1" checked>
            HTML,
            Checkbox::widget()->checked(true)->id('text-6582f2d099e8b')->value(1)->render()
        );
    }

    public function testCheckedWithFalse(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox" value="1">
            HTML,
            Checkbox::widget()->checked(false)->id('text-6582f2d099e8b')->value(1)->render()
        );
    }

    public function testCheckedValue(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox" value="1" checked>
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->checkedValue(1)->value(1)->render()
        );
    }

    public function testClass(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input class="class" id="text-6582f2d099e8b" type="checkbox">
            HTML,
            Checkbox::widget()->class('class')->id('text-6582f2d099e8b')->render()
        );
    }

    public function testContainer(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <input id="text-6582f2d099e8b" type="checkbox">
            </div>
            HTML,
            Checkbox::widget()->container(true)->id('text-6582f2d099e8b')->render()
        );
    }

    public function testContainerAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="class">
            <input id="text-6582f2d099e8b" type="checkbox">
            </div>
            HTML,
            Checkbox::widget()
                ->container(true)
                ->containerAttributes(['class' => 'class'])
                ->id('text-6582f2d099e8b')
                ->render()
        );
    }

    public function testContainerClass(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="class">
            <input id="text-6582f2d099e8b" type="checkbox">
            </div>
            HTML,
            Checkbox::widget()->container(true)->containerClass('class')->id('text-6582f2d099e8b')->render()
        );
    }

    public function testContainerTag(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <span><input id="text-6582f2d099e8b" type="checkbox"></span>
            HTML,
            Checkbox::widget()->container(true)->containerTag('span')->id('text-6582f2d099e8b')->render()
        );
    }

    public function testDataAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox" data-test="data-value">
            HTML,
            Checkbox::widget()->dataAttributes(['test' => 'data-value'])->id('text-6582f2d099e8b')->render()
        );
    }

    public function testDisabled(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox" disabled>
            HTML,
            Checkbox::widget()->disabled()->id('text-6582f2d099e8b')->render()
        );
    }

    public function testForm(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox" form="form">
            HTML,
            Checkbox::widget()->form('form')->id('text-6582f2d099e8b')->render()
        );
    }

    public function testHidden(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox" hidden>
            HTML,
            Checkbox::widget()->hidden()->id('text-6582f2d099e8b')->render()
        );
    }

    public function testId(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="id" type="checkbox">
            HTML,
            Checkbox::widget()->id('id')->render()
        );
    }

    public function testLang(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox" lang="en">
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->lang('en')->render()
        );
    }

    public function testLabel(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <label for="text-6582f2d099e8b">
            <input id="text-6582f2d099e8b" type="checkbox">
            Red
            </label>
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->labelContent('Red')->render()
        );
    }

    public function testLabelAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <label class="class" for="text-6582f2d099e8b">
            <input id="text-6582f2d099e8b" type="checkbox">
            Red
            </label>
            HTML,
            Checkbox::widget()
                ->id('text-6582f2d099e8b')
                ->labelAttributes(['class' => 'class'])
                ->labelContent('Red')
                ->render()
        );
    }

    public function testLabelClass(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <label class="class" for="text-6582f2d099e8b">
            <input id="text-6582f2d099e8b" type="checkbox">
            Red
            </label>
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->labelContent('Red')->labelClass('class')->render()
        );
    }

    public function testName(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" name="name" type="checkbox">
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->name('name')->render()
        );
    }

    public function testNotLabel(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox">
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->labelContent('Red')->notLabel()->render()
        );
    }

    public function testPrefix(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <label for="text-6582f2d099e8b">
            prefix
            <input id="text-6582f2d099e8b" type="checkbox">
            Red
            </label>
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->labelContent('Red')->prefix('prefix')->render()
        );
    }

    public function testPrefixContainer(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <label for="text-6582f2d099e8b">
            <div>
            prefix
            </div>
            <input id="text-6582f2d099e8b" type="checkbox">
            Red
            </label>
            </div>
            HTML,
            Checkbox::widget()
                ->container(true)
                ->id('text-6582f2d099e8b')
                ->labelContent('Red')
                ->prefix('prefix')
                ->prefixContainer(true)
                ->render()
        );
    }

    public function testPrefixContainerAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <label for="text-6582f2d099e8b">
            <div class="class">
            prefix
            </div>
            <input id="text-6582f2d099e8b" type="checkbox">
            Red
            </label>
            </div>
            HTML,
            Checkbox::widget()
                ->container(true)
                ->id('text-6582f2d099e8b')
                ->labelContent('Red')
                ->prefix('prefix')
                ->prefixContainer(true)
                ->prefixContainerAttributes(['class' => 'class'])
                ->render()
        );
    }

    public function testPrefixContainerClass(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <label for="text-6582f2d099e8b">
            <div class="class">
            prefix
            </div>
            <input id="text-6582f2d099e8b" type="checkbox">
            Red
            </label>
            </div>
            HTML,
            Checkbox::widget()
                ->container(true)
                ->id('text-6582f2d099e8b')
                ->labelContent('Red')
                ->prefix('prefix')
                ->prefixContainer(true)
                ->prefixContainerClass('class')
                ->render()
        );
    }

    public function testPrefixContainerTag(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <label for="text-6582f2d099e8b">
            <span>prefix</span>
            <input id="text-6582f2d099e8b" type="checkbox">
            Red
            </label>
            </div>
            HTML,
            Checkbox::widget()
                ->container(true)
                ->id('text-6582f2d099e8b')
                ->labelContent('Red')
                ->prefix('prefix')
                ->prefixContainer(true)
                ->prefixContainerTag('span')
                ->render()
        );
    }

    public function testReadonly(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox" readonly>
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->readonly()->render()
        );
    }

    public function testRequired(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox" required>
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->required()->render()
        );
    }

    public function testRender(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox">
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->render()
        );
    }

    public function testStyle(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox" style="style">
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->style('style')->render()
        );
    }

    public function testSuffix(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <label for="text-6582f2d099e8b">
            <input id="text-6582f2d099e8b" type="checkbox">
            suffix
            Red
            </label>
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->labelContent('Red')->suffix('suffix')->render()
        );
    }

    public function testSuffixContainer(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <label for="text-6582f2d099e8b">
            <input id="text-6582f2d099e8b" type="checkbox">
            <div>
            suffix
            </div>
            Red
            </label>
            </div>
            HTML,
            Checkbox::widget()
                ->container(true)
                ->id('text-6582f2d099e8b')
                ->labelContent('Red')
                ->suffix('suffix')
                ->suffixContainer(true)
                ->render()
        );
    }

    public function testSuffixContainerAttributes(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <label for="text-6582f2d099e8b">
            <input id="text-6582f2d099e8b" type="checkbox">
            <div class="class">
            suffix
            </div>
            Red
            </label>
            </div>
            HTML,
            Checkbox::widget()
                ->container(true)
                ->id('text-6582f2d099e8b')
                ->labelContent('Red')
                ->suffix('suffix')
                ->suffixContainer(true)
                ->suffixContainerAttributes(['class' => 'class'])
                ->render()
        );
    }

    public function testSuffixContainerClass(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <label for="text-6582f2d099e8b">
            <input id="text-6582f2d099e8b" type="checkbox">
            <div class="class">
            suffix
            </div>
            Red
            </label>
            </div>
            HTML,
            Checkbox::widget()
                ->container(true)
                ->id('text-6582f2d099e8b')
                ->labelContent('Red')
                ->suffix('suffix')
                ->suffixContainer(true)
                ->suffixContainerClass('class')
                ->render()
        );
    }

    public function testSuffixContainerTag(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <label for="text-6582f2d099e8b">
            <input id="text-6582f2d099e8b" type="checkbox">
            <span>suffix</span>
            Red
            </label>
            </div>
            HTML,
            Checkbox::widget()
                ->container(true)
                ->id('text-6582f2d099e8b')
                ->labelContent('Red')
                ->suffix('suffix')
                ->suffixContainer(true)
                ->suffixContainerTag('span')
                ->render()
        );
    }

    public function testTabIndex(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox" tabindex="1">
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->tabIndex(1)->render()
        );
    }

    public function testTemplate(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox">
            suffix
            HTML,
            Checkbox::widget()
                ->id('text-6582f2d099e8b')
                ->prefix('prefix')
                ->suffix('suffix')
                ->template('{tag}{suffix}')
                ->render()
        );
    }

    public function testTitle(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input id="text-6582f2d099e8b" type="checkbox" title="title">
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->title('title')->render()
        );
    }

    public function testUnchecked(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <input type="hidden" value="0">
            <input id="text-6582f2d099e8b" type="checkbox" value="1">
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->uncheckValue('0')->value(1)->render()
        );
    }

    public function testValue(): void
    {
        // Value bool `false`.
        Assert::equalsWithoutLE(
            <<<HTML
            <label for="text-6582f2d099e8b">
            <input id="text-6582f2d099e8b" type="checkbox" value="0">
            Active
            </label>
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->labelContent('Active')->value(false)->render()
        );

        // Value bool `true`.
        Assert::equalsWithoutLE(
            <<<HTML
            <label for="text-6582f2d099e8b">
            <input id="text-6582f2d099e8b" type="checkbox" value="1">
            Active
            </label>
            HTML,
            Checkbox::widget()
                ->checkedValue(true)
                ->id('text-6582f2d099e8b')
                ->labelContent('Active')
                ->value(true)
                ->render()
        );

        // Value int `0`.
        Assert::equalsWithoutLE(
            <<<HTML
            <label for="text-6582f2d099e8b">
            <input id="text-6582f2d099e8b" type="checkbox" value="0">
            Active
            </label>
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->labelContent('Active')->value(0)->render()
        );

        // Value int `1`.
        Assert::equalsWithoutLE(
            <<<HTML
            <label for="text-6582f2d099e8b">
            <input id="text-6582f2d099e8b" type="checkbox" value="1" checked>
            Active
            </label>
            HTML,
            Checkbox::widget()->checkedValue(1)->id('text-6582f2d099e8b')->labelContent('Active')->value(1)->render()
        );

        // Value string `inactive`.
        Assert::equalsWithoutLE(
            <<<HTML
            <label for="text-6582f2d099e8b">
            <input id="text-6582f2d099e8b" type="checkbox" value="inactive">
            Active
            </label>
            HTML,
            Checkbox::widget()->id('text-6582f2d099e8b')->labelContent('Active')->value('inactive')->render()
        );

        // Value string `active`.
        Assert::equalsWithoutLE(
            <<<HTML
            <label for="text-6582f2d099e8b">
            <input id="text-6582f2d099e8b" type="checkbox" value="inactive" checked>
            Active
            </label>
            HTML,
            Checkbox::widget()
                ->checkedValue('inactive')
                ->id('text-6582f2d099e8b')
                ->labelContent('Active')
                ->value('inactive')
                ->render()
        );
    }

    public function testValueWithEmpty(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <label for="text-6582f2d099e8b">
            <input id="text-6582f2d099e8b" type="checkbox">
            Active
            </label>
            HTML,
            Checkbox::widget()
                ->checkedValue(null)
                ->id('text-6582f2d099e8b')
                ->labelContent('Active')
                ->value(null)
                ->render()
        );
    }
}