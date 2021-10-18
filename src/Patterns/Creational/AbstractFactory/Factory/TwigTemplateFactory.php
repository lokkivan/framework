<?php

namespace Patterns\Creational\AbstractFactory\Factory;

use Patterns\Creational\AbstractFactory\Template\Title\TwigTitleTemplate;

class TwigTemplateFactory implements TemplateFactory
{

    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate()
    {
        // TODO: Implement createPageTemplate() method.
    }

    public function getRender()
    {
        // TODO: Implement getRender() method.
    }
}