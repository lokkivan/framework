<?php

namespace Patterns\Creational\AbstractFactoryConcept\Factory;

use Patterns\Creational\AbstractFactoryConcept\ProductA\ConcreteProductA1;
use Patterns\Creational\AbstractFactoryConcept\ProductB\ConcreteProductB1;

class ConcreteFactory1 implements AbstractFactory
{
    public function createProductA()
    {
        return new ConcreteProductA1();
    }

    public function createProductB()
    {
        return new ConcreteProductB1();
    }
}