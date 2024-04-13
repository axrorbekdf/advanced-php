<?php

namespace App\Pattern\Creational\FactoryMethod;

abstract class ACreator{

    abstract public function factoryMethod(): IProduct;

    public function someOperation():string {
        
        $product = $this->factoryMethod();

        $result = "Creator: Xuddi shu yaratuvchining kodi hozirgina ishlagan ".$product->operation();

        return $result;
    }
}

?>