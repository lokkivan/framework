<?php


namespace Patterns\Creational\AbstractFactory\Template\Page;

use Patterns\Creational\AbstractFactory\Template\Title\TitleTemplate;

abstract class BasePageTemplate implements PageTemplate
{
    protected $titleTemplate;

    public function __construct(TitleTemplate $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}