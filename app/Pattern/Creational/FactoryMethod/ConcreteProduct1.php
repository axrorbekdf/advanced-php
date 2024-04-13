<?php

namespace App\Pattern\Creational\FactoryMethod;

class ConcreteProduct1 implements IProduct{

    public function operation(): string
    {
        return "{ConcreteProduct1 ning natijasi}";
    }
}

?>