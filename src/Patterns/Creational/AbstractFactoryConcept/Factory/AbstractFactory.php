<?php
namespace Patterns\Creational\AbstractFactoryConcept\Factory;


interface AbstractFactory
{
    public function createProductA();

    public function createProductB();
}