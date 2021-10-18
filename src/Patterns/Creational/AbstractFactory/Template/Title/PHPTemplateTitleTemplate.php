<?php

namespace Patterns\Creational\AbstractFactory\Template\Title;


class PHPTemplateTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
    }
}