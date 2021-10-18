<?php

namespace Patterns\Creational\AbstractFactory\Factory;

use Patterns\Creational\AbstractFactory\Template\Title\TitleTemplate;

interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate();

    public function getRender();
}