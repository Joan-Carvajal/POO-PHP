<?php

use Admin as GlobalAdmin;

interface Person
{
    public function getName();
}

class Admin implements Person
{
 
    public function __construct(public $name){}
    

    public function getName()
    {
        return $this->name;
    }
}

$admin=new Admin('Joan3');
echo $admin->getName();

