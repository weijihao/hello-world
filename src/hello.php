<?php
namespace Weijihao\Demo;

class hello 
{
    private $name;

    public function __construct( $name = 'World')
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function hello()
    {
        return 'Hello' . $this->name . '!';
    }
}
