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
        "moose.png" => "Which image has the  picture of a moose?", 
        "rabbit.jpg" => "Which image has the  picture of a rabbit?", 
        "cat.png" => "Which image has the picture of a cat?",
        "bat.jpg" => "I fly in the dark?",
        "black_car.jpg" => "Which image has the picture of a black car?",
        "elephant.jpg"=> "Which image has the largest animal on land?",
        "dolphin.png"=> "A mammal in water?",
        "girl.png"=> "Where is the femal?",
        "shark.png"=> "Shark! Shark!?",
        "rhino.png"=> "Can you spot a Rhinoceros ?",
        "monkey.png"=> "I the monkey swing from tree to tree ?",
        "bird_diving.png" => "Which image has the  picture of bird diving?",
        "bycycle.png"=> "Which image has the  picture of bycycle?",
        "chicken.png"=> "Which image has the  picture of a chicken?",
        "rat.png"=> "Which image has the  picture of a mouse?",
        "helicopter.png" => "Which image has helicopter flying in the sky?"
    );

    public static function getImageMap() {

        return self::$imagemap;
    }

    public static function getTotalNumberOfImages() {

        return count(self::$imagemap);
    }

}