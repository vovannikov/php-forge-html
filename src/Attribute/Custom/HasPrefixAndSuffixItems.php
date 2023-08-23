<?php

declare(strict_types=1);

namespace PHPForge\Html\Attribute\Custom;

use PHPForge\Html\Helper\Encode;
use PHPForge\Widget\WidgetInterface;

/**
 * Provides methods to set prefix and suffix items.
 */
trait HasPrefixAndSuffixItems
{
    protected string $prefixItems = '';
    protected string $suffixItems = '';

    /**
     * Return new instance specifying the `HTML` prefix items content.
     *
     * @param string|WidgetInterface ...$values The `HTML` prefix item content.
     */
    public function prefixItems(string|WidgetInterface ...$values): static
    {
        $new = clone $this;
        $new->prefixItems = Encode::create()->santizeXSS(...$values);

        return $new;
    }

    /**
     * Return new instance specifying the `HTML` suffix items content.
     */
    public function suffixItems(string|WidgetInterface ...$values): static
    {
        $new = clone $this;
        $new->suffixItems = Encode::create()->santizeXSS(...$values);

        return $new;
    }
}
