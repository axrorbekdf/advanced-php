<?php

namespace App\Pattern\Creational\FactoryMethod;

class ConcreteProduct2 implements IProduct{

    public function operation(): string
    {
        return "{ConcreteProduct2 ning natijasi}";
    }
}

?>