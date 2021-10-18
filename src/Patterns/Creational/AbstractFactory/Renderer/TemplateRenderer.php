<?php
namespace Patterns\Creational\AbstractFactory\Renderer;

interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}