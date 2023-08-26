<?php

declare(strict_types=1);

namespace PHPForge\Html\Attribute;

use PHPForge\Html\Helper\CssClass;

/**
 * Is used by widgets that implement the class method.
 */
trait HasClass
{
    /**
     * Set the `CSS` `HTML` class attribute.
     *
     * @param string $value The `CSS` attribute of the widget.
     *
     * @return static A new instance of the current class with the specified class value.
     *
     * @link https://html.spec.whatwg.org/#classes
     */
    public function class(string $value): static
    {
        $new = clone $this;
        CssClass::add($new->attributes, $value);

        return $new;
    }
}
