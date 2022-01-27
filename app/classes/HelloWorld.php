<?php


namespace App\classes;


class HelloWorld
    {
        public $name = "BITM";

        public function index() {
            echo "<h1>Shykot is saying Hello world</h1>";
            echo $this->name;
        }
    }