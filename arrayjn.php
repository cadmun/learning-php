<?php

$jsonStr = '{"title":"titanic", "resume": "a big film", "year": 2015, "times": ["16:00", "18:00", "19:00", "20:00"]}';

$arrFilm = json_decode($jsonStr);

var_dump($arrFilm);

echo "<p><b>Title: </b>". $arrFilm -> title ."</p>";
echo "<p><b>Resume: </b>". $arrFilm -> {"resume"} ."</p>";
echo "<p><b>Year: </b>" . $arrFilm -> year ."</p>";
echo "<p><b>Times: </b></p>";

for($i = 0; $i < count($arrFilm -> times); $i++) {
    echo "<p>--------------<b>". $arrFilm -> times[$i] ."</b></p>";
}

?>