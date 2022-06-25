<?php

namespace app\hospital;

abstract class Doctor
{
    private string $position;
    public function __construct($position)
    {
        $this->position = $position;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public abstract function treat();
}

?>