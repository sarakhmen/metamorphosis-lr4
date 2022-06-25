<?php

namespace app\hospital;

require_once "Doctor.php";

class Surgeon extends Doctor
{
    public function __construct($position)
    {
        parent::__construct($position);
    }

    public function treat()
    {
        echo "{$this->getPosition()} is cutting people";
    }
}

?>