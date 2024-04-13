<?php

namespace App\Pattern\Creational\FactoryMethod;

class ConcreteCreator1 extends ACreator{

    public function factoryMethod(): IProduct{
        return new ConcreteProduct1();
    }
}

?>