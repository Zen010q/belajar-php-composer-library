<?php 
namespace SrcImport;

class Customer{
    public function __construct(private string $name)
    {
        
    }

    public function sayHello(string $name = "guest"): string{
        return "Hello $name, My name is $this->name" . PHP_EOL;
    }

    public function sayGoodbye(string $message):string{
        return $message . " " . $this->name;
    }
}
?>