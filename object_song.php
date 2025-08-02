<!--
* Create a class called Song
* Add 2 properties: $title, $artist
* Add a method play()
* Inside it, show:
👉 "Now playing: [title] by [artist]"

* Create an object
* Set title to "Shape of You", artist to "Ed Sheeran"
* Call the method.
-->
<?php 

class Song{
    public $title;
    public $artist;

    public function play(){
        echo "Now playing: " . $this->title . " by " . $this->artist;
    }
}

$mySong = new Song();

$mySong->title = "Shape of You";
$mySong->artist = "Ed Sheeran";

$mySong->play();
?>