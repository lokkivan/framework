<?php


namespace Patterns\Creational\AbstractFactoryConcept\Factory;


use Patterns\Creational\AbstractFactoryConcept\ProductA\ConcreteProductA2;
use Patterns\Creational\AbstractFactoryConcept\ProductB\ConcreteProductB2;

class ConcreteFactory2 implements AbstractFactory
{
    public function createProductA()
    {
        return new ConcreteProductA2();
    }

    public function createProductB()
    {
        return new ConcreteProductB2();
    }
}