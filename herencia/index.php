<?php

use Admin as GlobalAdmin;
use User as GlobalUser;

// final tambien se puede escribir en una clase pero esta no se hereda 
// y sirve para que una funcion  no se pueda cambiar 
class User
{

    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

   final public function getName()
    {
        return $this->name;
    }
}

class Admin extends User
{


}

$admin = new Admin('Joan');
echo $admin->getName();

