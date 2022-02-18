<?php

      $arrayFilm = array(
      "title" => "Spider-Man",
      "resume" => "A Big Film",
      "year" => 2021,
      "timers" => array(
            "16:00",
            "19:00",
            "21:00"
      )
);

//var_dump($arrayFilm);


$jsonstr = json_encode($arrayFilm);
echo $jsonstr;

?>