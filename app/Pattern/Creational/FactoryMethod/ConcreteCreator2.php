<?php

namespace App\Pattern\Creational\FactoryMethod;

class ConcreteCreator2 extends ACreator{

    public function factoryMethod(): IProduct{
        return new ConcreteProduct2();
    }
}

?>