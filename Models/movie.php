<?php

class Movie
{

    public $title;

    function __construct($_title)
    {

        $this->title = $_title;
    }

    public function printMovie()
    {
        return "{$this->title}";
    }
}
