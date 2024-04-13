<?php
// declare(strict_types =1);

namespace App\Services\Templates;

use App\Services\Generator\DocumentGenerator;

class ContractGenerator extends DocumentGenerator{

    protected function getTitle(): string {
        return "Shartnoma #".$this->documentNumber;
    }

    protected function progressTemplagte(string $template): string {
        return str_replace("#date#", date('d.m.Y'), $template);
    }
}
?>
