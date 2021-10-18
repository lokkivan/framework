<?php


namespace Patterns\Creational\AbstractFactory\Renderer;


class TwigRenderer implements TemplateRenderer
{

    public function render(string $templateString, array $arguments = []): string
    {
        echo   'TwigRenderer';
    }
}