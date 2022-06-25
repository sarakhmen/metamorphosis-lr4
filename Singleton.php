<?php

namespace app\singleton;

class Singleton
{
    private static ?Singleton $instance = null;

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct(){}

    private function __clone(){}

    /**
     * @throws Exception
     */
    public function __wakeup(){
        throw new Exception("Cannot unserialize singleton");
    }

    public function someLogic(){
        echo "processing something";
    }
}

?>