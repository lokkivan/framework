<?php

namespace Patterns\Creational\AbstractFactoryConcept\ProductB;

use Patterns\Creational\AbstractFactoryConcept\ProductA\AbstractProductA;

interface AbstractProductB
{
    public function usefulFunctionB(): string;

    /**
     * ...а также взаимодействовать с Продуктами A той же вариации.
     *
     * Абстрактная Фабрика гарантирует, что все продукты, которые она создает,
     * имеют одинаковую вариацию и, следовательно, совместимы.
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string;
}