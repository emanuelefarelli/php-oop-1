<?php

class Movie{

    public $title;
    public $timing;
    public $poster;
    public $genre;

    function __construct($_title,$_timing,$_poster,$_genre){
        $this->title = $_title;
        $this->timing = $_timing;
        $this->poster = $_poster;
        $this->genre = $_genre;

    }

    public function getTitle(){
        return $this->title;
    }
    public function getAll(){
        return ($this->title.' - '.
                $this->timing.' - '.
                $this->poster.' - '.
                $this->genre);

    }

}

$Interstellar = new Movie('Interstellar','2.50 h','link.img','fantascienza');
?>


<h1>
    <?php
    echo $Interstellar->getTitle();
    ?>
</h1>

<p>
    <?php
    echo $Interstellar->getAll();
    ?>
</p>