<?php

declare(strict_types=1);

namespace PHPForge\Html\Attribute\Custom;

use PHPForge\Html\Helper\Encode;
use PHPForge\Widget\ElementInterface;

/**
 * Is used by widgets that implement container prefix and suffix methods.
 */
trait HasContainerPrefixAndSuffix
{
    protected string $containerPrefix = '';
    protected string $containerSuffix = '';

    /**
     * Set the `HTML` container prefix content.
     *
     * @param string|ElementInterface ...$values The `HTML` container prefix content.
     *
     * @return static A new instance of the current class with the specified container prefix content.
     */
    public function containerPrefix(string|ElementInterface ...$values): static
    {
        $new = clone $this;
        $new->containerPrefix = Encode::create()->santizeXSS(...$values);

        return $new;
    }

    /**
     * Set the `HTML` container suffix content.
     *
     * @param string|ElementInterface ...$values The `HTML` container suffix content.
     *
     * @return static A new instance of the current class with the specified container suffix content.
     */
    public function containerSuffix(string|ElementInterface ...$values): static
    {
        $new = clone $this;
        $new->containerSuffix = Encode::create()->santizeXSS(...$values);

        return $new;
    }
}
