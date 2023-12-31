<?php

declare(strict_types=1);

namespace PHPForge\Html\Input;

use PHPForge\Widget\ElementInterface;

/**
 * Provide methods for handling HTML input-related attributes and properties.
 */
interface InputInterface extends ElementInterface
{
    /**
     * Set the aria-describedby attribute, which identifies the element(s) that describes the current element.
     *
     * The aria-describedby attribute is used in WAI-ARIA to provide a relationship between an element and its
     * descriptive elements. This helps screen readers and other assistive technologies provide additional context
     * about the element.
     *
     * @param bool|string $value IDs of the descriptive element(s) separated by spaces.
     *
     * @return static A new instance or clone of the current object with the aria-describedby attribute set.
     *
     * @link https://www.w3.org/TR/wai-aria-1.1/#aria-describedby
     */
    public function ariaDescribedBy(string|bool $value = true): static;

    /**
     * Set the `HTML` attributes.
     *
     * @param array $values Attribute values indexed by attribute names.
     *
     * @return static A new instance of the current class with the specified attributes.
     */
    public function attributes(array $values): static;

    /**
     * Set the `CSS` `HTML` class attribute.
     *
     * @param string $value The `CSS` attribute of the widget.
     * @param bool $override If `true` the value will be overridden.
     *
     * @return static A new instance of the current class with the specified class value.
     *
     * @link https://html.spec.whatwg.org/#classes
     */
    public function class(string $value, bool $override = false): static;

    /**
     * Get the ID of the widget.
     *
     * @return string|null The ID of the widget.
     */
    public function getId(): string|null;

    /**
     * Set the ID of the widget.
     *
     * @param string|null $value The ID of the widget.
     *
     * @return static A new instance of the current class with the specified ID value.
     *
     * @link https://html.spec.whatwg.org/multipage/dom.html#the-id-attribute
     */
    public function id(string|null $value): static;

    /**
     * Set the name part of the name/value pair associated with this element for the purposes of form submission.
     *
     * @param string|null $value The name of the widget.
     *
     * @return static A new instance of the current class with the specified name.
     *
     * @link https://html.spec.whatwg.org/multipage/form-control-infrastructure.html#attr-fe-name
     */
    public function name(string|null $value): static;
}
