<?php

/*
.---------------------------------------------------------------------------.
|  Software: STAMPCHA - The friendly captcha                   |
|   Version: 1.0                                                            |
|   Contact: indrakeerthi@gmail.com                                         |
|      Info: STAMPCHA-The friendly captcha                                  |
|   Support: https://github.com/indrakeerthi/stampcha/                                       |
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

class Stamp_Stampcha {

    public $imageMapPath = 'Stamp/map/';
    public $imagesToShow;
    public $mapImages;
    public $selectedImages;
    public $selectedQuestion;
    public $answer;
    public $human = false;
    
    function __construct() {

        $this->mapImages = Stamp_Map::getImageMap();
    }
    /**
     *
     * @param int $imagesToShow 
     */
    public function init($imagesToShow) {

        if ($imagesToShow == 0) {
            $imagesToShow = 4;
        }

        $this->imagesToShow = abs($imagesToShow);
        $this->selectImagesToShow();
        $this->selectImageAndTheQuestion();
        $this->setSession();
    }

    /**
     * return the question and answers 
     *
     * @param type $imageSize
     * @return string 
     */
    public function show($imageSize=array('width' => 100, 'height' => 75)) {
        
        $row = "
        <lable for='stampcha_answer' >$this->selectedQuestion</label> 
        <input type='text' class='stampcha_answer' name='stampcha_answer' id='stampcha_answer'/>        
        <table class = 'stampcha_table'><tr>";

        foreach ($this->selectedImages as $image) {
            $row = $row . "<td><img width='$imageSize[width]' height='$imageSize[height]'  src='" . $this->data_uri($this->imageMapPath . $image, 'image/png') . "' /></td>";
        }

        $row = $row . '</tr></table>';

        return $row;
    }
    
    /**
     * select images from the map class
     * @return type array
     */
    
    private function selectImagesToShow() {

        if ($this->imagesToShow < count($this->mapImages)) {
            $this->selectedImages = array_rand($this->mapImages, $this->imagesToShow);
        } else {
            throw new Exception('Images to show should be less than image count');
        }

        return $this->selectedImages;
    }

    /**
     * Randomly select a question and answer
     */
    private function selectImageAndTheQuestion() {

        $selectedImageKey = array_rand($this->selectedImages, 1);

        $this->selectedQuestion = $this->mapImages[$this->selectedImages[$selectedImageKey]];
        $this->answer = $selectedImageKey+1;
    }

    /**
     * Load file and return binary data
     */

    private function data_uri($file, $mime) {

        $contents = file_get_contents($file);
        $base64 = base64_encode($contents);
        return ('data:' . $mime . ';base64,' . $base64);
    }
    
    /**
     * Set secret question in the session
     */
    private function setSession() {
        
        session_start();
        
        if($_POST) {
            
            if (crypt($_POST['stampcha_answer'], $_SESSION['answer']) == $_SESSION['answer']) {
                
                $_SESSION['answer'] =  crypt($this->answer); 
                $this->human = true;
                        
            }else{
                
                $_SESSION['answer'] =  crypt($this->answer); 
                $this->human = false;
            }

        }else{
            
            $_SESSION['answer'] =  crypt($this->answer); 
            
        }
        
        
    }
    
    /**
     * returns false if the answer is wrong
     *
     * @return type boolean
     */
    public function isHuman(){
        
        return $this->human;
        
    }

}