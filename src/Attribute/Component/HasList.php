<?php

declare(strict_types=1);

namespace PHPForge\Html\Attribute\Component;

use InvalidArgumentException;
use PHPForge\Html\Helper\CssClass;

use function in_array;
use function sprintf;

/**
 * Is used by widgets that implement list methods.
 */
trait HasList
{
    protected array $listAttributes = [];
    protected bool $listContainer = false;
    protected array $listContainerAttributes = [];
    protected string $listType = 'ul';

    /**
     * Set the `HTML` attributes for the `<ul>` or `<ol>` tag.
     *
     * @param array $values Attribute values indexed by attribute names.
     *
     * @return static A new instance of the current class with the specified `<ul>` or `<ol>` attributes.
     */
    public function listAttributes(array $values): static
    {
        $new = clone $this;
        $new->listAttributes = $values;

        return $new;
    }

    /**
     * Set the `CSS` class for the `<ul>` or `<ol>` tag.
     *
     * @param string $value The CSS class name.
     *
     * @return static A new instance of the current class with the specified `<ul>` or `<ol>` class.
     */
    public function listClass(string $value): static
    {
        $new = clone $this;
        CssClass::add($new->listAttributes, $value);

        return $new;
    }

    /**
     * Enable or disable the container tag for tag `<ul>` or `<ol>`.
     *
     * @param bool $value `true` to enable the container, `false` to disable.
     *
     * @return static A new instance of the current class with the specified container for tag `<ul>` or `<ol>`.
     */
    public function listContainer(bool $value): static
    {
        $new = clone $this;
        $new->listContainer = $value;

        return $new;
    }

    /**
     * Set the `HTML` attributes for the container for tag `<ul>` or `<ol>`.
     *
     * @param array $values Attribute values indexed by attribute names.
     *
     * @return static A new instance of the current class with the specified container attributes for tag `<ul>` or `<ol>`.
     */
    public function listContainerAttributes(array $values): static
    {
        $new = clone $this;
        $new->listContainerAttributes = $values;

        return $new;
    }

    /**
     * Set the `CSS` class for the container for tag `<ul>` or `<ol>`.
     *
     * @param string $value The CSS class name.
     *
     * @return static A new instance of the current class with the specified container class for tag `<ul>` or `<ol>`.
     */
    public function listContainerClass(string $value): static
    {
        $new = clone $this;
        CssClass::add($new->listContainerAttributes, $value);

        return $new;
    }

    /**
     * Set list type for tag `<ul>` or `<ol>`.
     *
     * @param string $value The list type.
     *
     * @return static A new instance of the current class with the specified list type for tag `<ul>` or `<ol>`.
     */
    public function listType(string $value): static
    {
        if (in_array($value, ['ul', 'ol'], true) === false) {
            throw new InvalidArgumentException(sprintf('Invalid list type "%s".', $value));
        }

        $new = clone $this;
        $new->listType = $value;

        return $new;
    }
}
