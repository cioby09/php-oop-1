<?php

class Movie
{

    public $title;
    public $genre;
    public $duration;


    function __construct($_title, $_genre, $_duration)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->duration = $_duration;
    }

    public function printMovie()
    {
        $genreString = implode(", ", $this->genre);
        return "{$this->title} - {$genreString} - {$this->duration}";
    }
}
