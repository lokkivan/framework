<?php


namespace Patterns\Creational\AbstractFactory\Template\Title;


class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}