<?php 
namespace Purwanto\PhpComposerLibrary;

class Customer{
    function __construct(private string $name)
    {
        
    }
    function sayHello(string $name): string
    {
     return "Hello $name, My name is $this->name";
    }
}
?>