<?php 
namespace Chaman\FirstPackage;

class Hello 
{
    protected $name;

    public function __construct($name='chaman')
    {
        $this->name=$name;
    }
    function hello()
    {
        return "This is hello function ".$this->name;
    }
}
?>