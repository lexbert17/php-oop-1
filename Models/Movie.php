<?php
class Movie
{
    public $title;
    public $genre;
    public $author;
    public $votes;

    public function mediaVoti(){
        return array_sum($this -> votes) / count($this -> votes);
    }

    function __construct($_title , $_genre , $_author , $_votes)
    {
        $this->title  = $_title;
        $this->genre = $_genre;
        $this->author = $_author;
        $this->votes = $_votes;
    } 
}