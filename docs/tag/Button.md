# Button

The `<button>` `HTML` element is an interactive element activated by a user with a mouse, keyboard, finger, voice 
command, or other assistive technology. Once activated, it then performs an action, such as submitting a form or
opening a dialog.

## Basic Usage

Instantiate the `Button` class using `Button::widget()`.

```php
$button = Button::widget();
```

## Setting Attributes

Use the provided methods to set specific `attribute` for the `button` element.

```php
// Example: Setting the title attribute
$button->title('Click me');
```

Or, use the `attributes` method to set multiple `attributes` at once.

```php
$button->attributes(['title' => 'Click me', 'class' => 'btn btn-primary']);
```

## Adding Content

If you want to include content within the `button` tag, use the `content` method.

```php
$button->content('Click me');
```

## Rendering

Generate the `HTML` output using the `render` method.

```php
$html = $button->render();
```

Or, use the magic `__toString` method.

```php
$html = (string) $button;
```

## Common Use Cases

Below are examples of common use cases:

```php
// Example: Adding multiple attributes
$button->class('external')->content('Click me')->title('Click me');

// Example: Using data attributes
$button->dataAttributes(['bs-toggle' => 'modal', 'bs-target' => '#exampleModal', 'analytics' => 'trackClick']);
```

Explore additional methods for setting various `attributes` such as `ariaControls`, `tabIndex`, `role`, etc.

Refer to the [Attribute Tests](https://github.com/php-forge/html/blob/main/tests/Button/AttributeTest.php) for comprehensive
examples.

## Container

Use the `container()` method to add a `container` around the `button` tag.

```php
// Example: Adding a container
$button->content('Click me')->container()->render();
```

## Prefix and Suffix

Use `prefix` and `suffix` methods to add text before and after the `button` tag, respectively.

```php
// Example: Adding a prefix
$button = $button->content('Home')->prefix('Go to: ')->render();

// Example: Adding a suffix
$button = $button->content('Home')->suffix(' | Welcome')->render();
```

Examples of `prefix` and `suffix` usage can be found in the [Custom Method Test](https://github.com/php-forge/html/blob/main/tests/Button/CustomMethodTest.php)
for comprehensive examples.

## Submit and reset

Use the `submit` and `reset` methods to set the `type` attribute to `submit` and `reset`, respectively.

```php
// Example: Setting the type attribute to submit
$button = $button->content('Submit')->submit()->render();
```

```php
// Example: Setting the type attribute to reset
$button = $button->content('Reset')->reset()->render();
```

## Template

The `template` method allows you to customize the `HTML` output of the `button` element.

The following template tags are available:

| Tag        | Description             |
| ---------- | ----------------------- |
| `{prefix}` | The prefix text.        |
| `{tag}`    | The `button` element.   |
| `{suffix}` | The suffix text.        |

```php
// Example: Using a custom template
$a->template('<span>{tag}</span>');
```

Examples of `template` usage can be found in the [Custom Method Test](https://github.com/php-forge/html/blob/main/tests/Button/CustomMethodTest.php)
for comprehensive examples.

## Attributes

The following methods are available for setting attributes:

| Method             | Description                                                                                     |
| ------------------ | ------------------------------------------------------------------------------------------------|
| `ariaControls()`   | Set the `aria-controls` attribute.                                                              |
| `ariaDescribedby()`| Set the `aria-describedby` attribute.                                                           |
| `ariaDisabled()`   | Set the `aria-disabled` attribute.                                                              |
| `ariaExpanded()`   | Set the `aria-expanded` attribute.                                                              |
| `ariaLabel()`      | Set the `aria-label` attribute.                                                                 |
| `attributes()`     | Set multiple `attributes` at once.                                                              |
| `autofocus()`      | Set the `autofocus` attribute.                                                                  |
| `class()`          | Set the `class` attribute.                                                                      |
| `content()`        | Set the `content` within the `button` element.                                                  |
| `dataAttributes()` | Set multiple `data-attributes` at once.                                                         |
| `id()`             | Set the `id` attribute.                                                                         |
| `lang()`           | Set the `lang` attribute.                                                                       |
| `name()`           | Set the `name` attribute.                                                                       |
| `role()`           | Set the `role` attribute.                                                                       |
| `style()`          | Set the `style` attribute.                                                                      |
| `tabindex()`       | Set the `tabindex` attribute.                                                                   |
| `title()`          | Set the `title` attribute.                                                                      |
| `type()`           | Set the `type` attribute.                                                                       |
|                    | Allowed values: `button`, `submit`, `reset`.                                                    |

## Custom methods

The following methods are available for customizing the `HTML` output:

| Method                       | Description                                                                           |
| ---------------------------- | ------------------------------------------------------------------------------------- |
| `container()`                | Add a `container` around the `button` element.                                        |
| `containerAttributes()`      | Set `attributes` for the `container`.                                                 |
| `containerClass()`           | Set the `class` attribute for the `container`.                                        |
| `containerTag()`             | Set the `tag` for the `container`.                                                    |
| `prefix()`                   | Add text before the `button` element.                                                 |
| `prefixContainer()`          | Add a `container` before the `button` element.                                        |
| `prefixContainerAttributes()`| Set `attributes` for the `prefix-container`.                                          |
| `prefixContainerClass()`     | Set the `class` attribute for the `prefix-container`.                                 |
| `prefixContainerTag()`       | Set the `tag` for the `prefix-container`.                                             |
| `render()`                   | Generates the `HTML` output.                                                          |
| `reset()`                    | Set the `type` attribute to `reset`.                                                  |
| `submit()`                   | Set the `type` attribute to `submit`.                                                 |
| `suffix()`                   | Add text after the `button` element.                                                  |
| `suffixContainer()`          | Add a `container` after the `button` element.                                         |
| `suffixContainerAttributes()`| Set `attributes` for the `suffix-container`.                                          |
| `suffixContainerClass()`     | Set the `class` attribute for the `suffix-container`.                                 |
| `suffixContainerTag()`       | Set the `tag` for the `suffix-container`.                                             |
| `tagName()`                  | Set the `tag` for the `button` element.                                               |
|                              | Allowed values: `a`, `button`.                                                        |
| `template()`                 | Set the `template` for the `button` element.                                          |
| `type()`                     | Set the `type` attribute.                                                             |
|                              | Allowed values: `button`, `submit`, `reset`.                                          |
| `widget()`                   | Instantiates the `Button::class`.                                                     |