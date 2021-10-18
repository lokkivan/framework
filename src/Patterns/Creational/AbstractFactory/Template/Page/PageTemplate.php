<?php
namespace Patterns\Creational\AbstractFactory\Template\Page;

interface  PageTemplate
{
    public function getTemplateString(): string;
}