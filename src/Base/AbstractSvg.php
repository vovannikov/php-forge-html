<?php

declare(strict_types=1);

namespace PHPForge\Html\Base;

use DOMDocument;
use DOMElement;
use DOMXPath;
use InvalidArgumentException;
use PHPForge\Html\Attribute;
use PHPForge\Html\HtmlBuilder;
use PHPForge\Widget\AbstractWidget;
use PHPForge\Widget\WidgetInterface;
use RuntimeException;

use function array_key_exists;

/**
 * This is an abstract class that extends AbstractWidget and serves as a base for generating the `<svg>` tag.
 * The `<svg>` tag represents a scalable vector graphic in an HTML document.
 * Concrete classes should extend this class to implement specific `<svg>` tag variations and their generation logic.
 */
abstract class AbstractSvg extends AbstractWidget
{
    use Attribute\Custom\HasAttributes;
    use Attribute\HasClass;
    use Attribute\HasId;
    use Attribute\HasLang;
    use Attribute\HasTitle;
    use Attribute\Input\HasHeight;
    use Attribute\Input\HasWidth;

    protected array $attributes = [];
    private string $content = '';
    private string $filePath = '';

    /**
     * Returns a new instance specifying the content value of the widget.
     *
     * @param string $value The content value.
     */
    public function content(string|WidgetInterface $value): static
    {
        $new = clone $this;

        if ($value instanceof WidgetInterface) {
            $value = (string) $value;
        }

        $new->content = $value;

        return $new;
    }

    /**
     * Returns a new instance with the file path of the SVG.
     *
     * @param string $value The file path.
     */
    public function filePath(string $value): self
    {
        $new = clone $this;
        $new->filePath = $value;

        return $new;
    }

    /**
     * Returns a new instance with the fill attribute of the SVG.
     *
     * @param string $value The fill value.
     */
    public function fill(string $value): self
    {
        $new = clone $this;
        $new->attributes['fill'] = $value;

        return $new;
    }

    /**
     * Returns a new instance with the stroke attribute of the SVG.
     *
     * @param string $value The stroke value.
     */
    public function stroke(string $value): self
    {
        $new = clone $this;
        $new->attributes['stroke'] = $value;

        return $new;
    }

    /**
     * Returns a new instance with the viewBox attribute of the SVG.
     *
     * @param string $value The viewBox value.
     */
    public function viewBox(string $value): self
    {
        $new = clone $this;
        $new->attributes['viewBox'] = $value;

        return $new;
    }

    /**
     * Returns a new instance with the xmlns attribute of the SVG.
     *
     * @param string $value The xmlns value.
     */
    public function xmlns(string $value): self
    {
        $new = clone $this;
        $new->attributes['xmlns'] = $value;

        return $new;
    }

    /**
     * Validates the file path and content before running the widget.
     *
     * @throws InvalidArgumentException If both file path and content are empty.
     *
     * @return bool Whether the widget should be executed.
     */
    protected function beforeRun(): bool
    {
        if ($this->filePath === '' && $this->content === '') {
            throw new InvalidArgumentException('File path and content cannot be empty at the same time for SVG widget.');
        }

        return parent::beforeRun();
    }

    /**
     * Renders the SVG widget.
     *
     * @return string The rendered SVG.
     */
    protected function run(): string
    {
        return match ($this->content) {
            '' => $this->renderSvg(),
            default => HtmlBuilder::create('svg', PHP_EOL . $this->content . PHP_EOL, $this->attributes),
        };
    }

    /**
     * Loads the SVG file and returns the SVG element.
     *
     * @param DOMDocument $svg The DOMDocument instance.
     *
     * @throws RuntimeException If failed to load the SVG file.
     *
     * @return DOMElement The SVG element.
     */
    private function loadSvgFile(DOMDocument $svg): DOMElement
    {
        @$svg->load($this->filePath, LIBXML_NOBLANKS);

        $this->removeDomNodes($svg, '//comment()');

        /** @var DOMElement|null $svgElement */
        $svgElement = $svg->getElementsByTagName('svg')->item(0);

        if (!$svgElement) {
            throw new RuntimeException('Failed to load SVG file: ' . $this->filePath);
        }

        if (array_key_exists('height', $this->attributes) && array_key_exists('width', $this->attributes)) {
            $svgElement->removeAttribute('viewBox');
        }

        return $svgElement;
    }

    /**
     * Renders the SVG element with attributes.
     *
     * @return string The rendered SVG.
     */
    private function renderSvg(): string
    {
        /** @psalm-var array<string, mixed> $attributes */
        $attributes = $this->attributes;

        $svg = new DOMDocument();

        $renderedSvg = $this->loadSvgFile($svg);

        /** @psalm-var mixed $value */
        foreach ($attributes as $name => $value) {
            $renderedSvg->setAttribute($name, (string) $value);
        }

        return $svg->saveXML($renderedSvg);
    }

    /**
     * Removes DOM nodes that match the given XPath expression.
     *
     * @param DOMDocument $dom The DOMDocument instance.
     * @param string $expression The XPath expression.
     */
    private function removeDomNodes(DOMDocument $dom, string $expression): void
    {
        $xpath = new DOMXPath($dom);

        while ($node = $xpath->query($expression)->item(0)) {
            $node->parentNode?->removeChild($node);
        }
    }
}