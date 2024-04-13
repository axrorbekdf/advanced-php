<?php
declare(strict_types =1);

namespace App\Services\Templates;

use App\Services\Generator\DocumentGenerator;

class ReportGenerator extends DocumentGenerator{

    protected function getTitle(): string {
        return "Hisobot #".$this->documentNumber;
    }

    protected function progressTemplagte(string $template): string {
        return str_replace("#income#", (string) random_int(10,20), $template);
    }
}
?>
