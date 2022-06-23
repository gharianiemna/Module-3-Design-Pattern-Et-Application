<?php

class SingleTon
{
    public static $instance;

    public function __construct()
    {
    }

    public function getInstance() {
        if($instance === null) {
            $instance = new SingleTon();
        }
        return $instance;
    }
}