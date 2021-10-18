<?php


namespace Patterns\Creational\AbstractFactoryConcept\ProductA;


class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}