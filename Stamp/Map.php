<?php

class Stamp_Map {

    //Write your question and image Id you can be creative as you want to be

    private static $imagemap = array(
        "dog.jpg" => "Which image has the picture of dog?",
        "horse.jpg" => "Which image has the  picture of horse?",
        "cat.jpg" => "Which image has the picture of cat?",
        "bat.jpg" => "Which image has the picture of bat?", 
        "fish.jpg" => "Which image has the picture of fish?",
        "tiger.jpg" => "Which image has the picture of tiger?",
        "black_car.jpg" => "Which image has the picture of a black car?",
        "scorpion.jpg"=> "Which image has the picture of a scorpion?",
        "elephant.jpg"=> "Which image has the largest animal on land?",
        "snake.jpg" => "Which image has the picture of snake?"
    );

    public static function getImageMap() {

        return self::$imagemap;
    }

    public static function getTotalNumberOfImages() {

        return count(self::$imagemap);
    }

}