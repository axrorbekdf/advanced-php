<?php
namespace App\Services\Generator;


abstract class DocumentGenerator{
    
    public function __construct(protected $documentNumber)
    {
        
    }

    public function generateDocumentFromTemplate(string $template): string{

        $title = $this->getTitle();
        $body = $this->progressTemplagte($template);
        $result = $this->buildDocument($title, $body);

        return $result;
    }

    abstract protected function getTitle(): string;
    abstract protected function progressTemplagte(string $template): string;

    public function buildDocument(string $title, array|string $body): string {

        return $title."<br>".$body."<hr>";

    }
}
?>
