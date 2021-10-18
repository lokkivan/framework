<?php
namespace Patterns\Creational\AbstractFactoryConcept;

use Patterns\Creational\AbstractFactoryConcept\Factory\AbstractFactory;
use Patterns\Creational\AbstractFactoryConcept\Factory\ConcreteFactory1;
use Patterns\Creational\AbstractFactoryConcept\Factory\ConcreteFactory2;
use Symfony\Component\HttpFoundation\Response;

class AbstractFactoryController
{
    public function index()
    {
        ob_start();

        echo "Client: Testing client code with the first factory type:\n";
        $this->clientCode(new ConcreteFactory1());

        echo "\n";

        echo "Client: Testing the same client code with the second factory type:\n";
        $this->clientCode(new ConcreteFactory2());

        return new Response(ob_get_contents());
    }

    private function clientCode(AbstractFactory $factory)
    {
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();

        echo $productB->usefulFunctionB() . "\n";
        echo $productB->anotherUsefulFunctionB($productA) . "\n";
    }
}