<?php

/*
.---------------------------------------------------------------------------.
|  Software: STAMPCHA - The friendly captcha                                |
|   Version: 1.0                                                            |
|   Contact: indrakeerthi@gmail.com                                         |
|      Info: STAMPCHA-The friendly captcha                                  |
|   Support: https://github.com/indrakeerthi/stampcha/                      |
| ------------------------------------------------------------------------- |
|     Admin: Poojitha Jayasinghe  (project admininistrator)                 |
|   Authors: Poojitha Jayasinghe                                            |
|                                                                           |
|   Founder: Poojitha Jayasinghe (original founder)                         |
| Copyright (c) 20011-2012, Poojitha Jayasinghe. All Rights Reserved.       |
|                                                                           |
| ------------------------------------------------------------------------- |
|   License: Distributed under the MIT License                              |
|            http://www.opensource.org/licenses/mit-license.php             |
| This program is distributed in the hope that it will be useful - WITHOUT  |
| ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or     |
| FITNESS FOR A PARTICULAR PURPOSE.                                         |
| ------------------------------------------------------------------------- |

*/

/**
 * STAMPCHA - The friendly captcha    
 * NOTE: Requires PHP version 5 or later
 * @package Stamp_Stampcha
 * @author Poojitha Jayasinghe
 * @copyright 2010 - 2011 Poojitha Jayasinghe
 * @version 1.0
 * @license MIT
 */

class Stamp_Map {

    //Write your question and image Id you can be creative as you want to be

    private static $imagemap = array(
        "dog.jpg" => "Which image has the picture of dog?",
        "horse.png" => "Which image has the  picture of horse?",
        "bird.png" => "Which image has the  picture of bird?",
        "moose.png" => "Which image has the  picture of moose?",
        "cat.jpg" => "Which image has the picture of cat?",
        "bat.jpg" => "Which image has the picture of a thing in the dark?", 
        "fish.jpg" => "Which image has the picture of fish?",
        "tiger.jpg" => "Which image has the picture of tiger?",
        "black_car.jpg" => "Which image has the picture of a black car?",
        "scorpion.jpg"=> "Which image has the picture of a scorpion?",
        "elephant.jpg"=> "Which image has the largest animal on land?",
        "dolphin.png"=> "A mammal in water?",
        "girl.png"=> "Where is the femal?",
        "shark.png"=> "Shark! Shark!?",
        "rhino.png"=> "Can you spot a Rhinoceros ?",
        "monkey.png"=> "I swing from tree to tree ?",
        "bird_diving.png" => "Which image has the  picture of bird diving?"
        //"snake.png" => "A poisonous lizard?"
    );

    public static function getImageMap() {

        return self::$imagemap;
    }

    public static function getTotalNumberOfImages() {

        return count(self::$imagemap);
    }

}