<?php

declare(strict_types=1);

namespace PHPForge\Html\Attribute\Custom;

use PHPForge\Html\Helper\CssClass;
use PHPForge\Html\Helper\Encode;
use PHPForge\Widget\ElementInterface;

/**
 * Is used by widgets that implement brand methods.
 */
trait HasBrand
{
    private bool $brandContainer = false;
    private array $brandContainerAttributes = [];
    private string $brandContainerClass = '';
    private string $brandContainerTag = 'div';
    private string $brandImage = '';
    private string $brandLink = '';
    private array $brandLinkAttributes = [];
    private string $brandText = '';
    private string $brandTemplate = "\n{image}\n{text}\n";
    private string $brandToggle = '';


    /**
     * Enable or disable the brand container tag `<div>`.
     *
     * @param bool $value If enabled or disabled the item container tag `<div>`.
     * Default is `false`.
     *
     * @return static A new instance of the current class with the specified brand container.
     */
    public function brandContainer(bool $value): static
    {
        $new = clone $this;
        $new->brandContainer = $value;

        return $new;
    }

    /**
     * Set the `HTML` attributes for the brand container.
     *
     * @param array $values Attribute values indexed by attribute names.
     *
     * @return static A new instance of the current class with the specified brand container attributes.
     */
    public function brandContainerAttributes(array $values): static
    {
        $new = clone $this;
        $new->brandContainerAttributes = $values;

        return $new;
    }

    /**
     * Set the `CSS` class for the brand container.
     *
     * @param string $value The `CSS` class for the brand container.
     *
     * @return static A new instance of the current class with the specified brand container class.
     */
    public function brandContainerClass(string $value): static
    {
        $new = clone $this;
        CssClass::add($new->brandContainerAttributes, $value);

        return $new;
    }

    /**
     * Set the brand container tag name.
     *
     * @param string $value The brand container tag.
     *
     * @return static A new instance of the current class with the specified brand container tag.
     */
    public function brandContainerTag(string $value): static
    {
        $new = clone $this;
        $new->brandContainerTag = $value;

        return $new;
    }

    /**
     * Set the brand image.
     *
     * @param string|ElementInterface $value The brand image.
     *
     * @return static A new instance of the current class with the specified brand image.
     */
    public function brandImage(string|ElementInterface $value): static
    {
        $new = clone $this;
        $new->brandImage = Encode::create()->santizeXSS($value);

        return $new;
    }

    /**
     * Set the brand link.
     *
     * @param string $value The brand link.
     *
     * @return static A new instance of the current class with the specified brand link.
     */
    public function brandLink(string $value): static
    {
        $new = clone $this;
        $new->brandLink = $value;

        return $new;
    }

    /**
     * Set the the `HTML` attributes for the brand link.
     *
     * @return static A new instance of the current class with the specified brand link attributes.
     */
    public function brandLinkAttributes(array $value): static
    {
        $new = clone $this;
        $new->brandLinkAttributes = $value;

        return $new;
    }

    /**
     * Set the `CSS` class for the brand link.
     *
     * @param string $value The `CSS` class for the brand link.
     *
     * @return static A new instance of the current class with the specified brand link class.
     */
    public function brandLinkClass(string $value): static
    {
        $new = clone $this;
        CssClass::add($new->brandLinkAttributes, $value);

        return $new;
    }

    /**
     * Set the brand template.
     * The following tokens are recognized: `{image}` and `{text}`.
     *
     * @param string $value The brand template.
     *
     * @return static A new instance of the current class with the specified brand template.
     */
    public function brandTemplate(string $value): static
    {
        $new = clone $this;
        $new->brandTemplate = $value;

        return $new;
    }

    /**
     * Set the brand text.
     *
     * @param string|ElementInterface $value The brand text.
     *
     * @return static A new instance of the current class with the specified brand text.
     */
    public function brandText(string|ElementInterface $value): static
    {
        $new = clone $this;
        $new->brandText = Encode::create()->santizeXSS($value);

        return $new;
    }

    /**
     * Set the brand toggle.
     *
     * @param string|ElementInterface $value The brand toggle.
     *
     * @return static A new instance of the current class with the specified brand toggle.
     */
    public function brandToggle(string|ElementInterface $value): static
    {
        $new = clone $this;
        $new->brandToggle = Encode::create()->santizeXSS($value);

        return $new;
    }
}