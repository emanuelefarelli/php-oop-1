<?php

class Movie{

    public $title;
    public $timing;
    public $poster;
    public $genre;

    function__construct($_title,$_timing,$_poster,$_genre){
        $this->title = $_title;
        $this->timing = $_timing;
        $this->poster = $_poster;
        $this->genre = $_genre;
    }

}

?>