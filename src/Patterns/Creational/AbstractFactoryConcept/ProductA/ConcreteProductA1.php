<?php


namespace Patterns\Creational\AbstractFactoryConcept\ProductA;


class ConcreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A1.";
    }
}