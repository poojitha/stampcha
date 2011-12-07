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

include_once 'Stamp/Stampcha.php';


$stampcha = new Stamp_Stampcha();
$stampcha->init(4); // Number of images to show under the question

?>

<?php

    if(!$stampcha->isHuman()) { // returns false if the answer is wrong
        echo "Shoo,Shoo robot!";
    }else{
        echo "You are a beautiful human being";
    }
    
//    if($stampcha->isNumberOfAttemptsGreaterThan(4)){
//        echo 'You tried more than four';
//    }
    
?>

<style type="text/css">
    
  .stampcha_table  td{
    
    text-align: center;
  }
  
  .stampcha_message{
      font-size: 12px;
  }

</style>

<body style="background-color: yellow">
<form method="POST">
    
    <?php 
    
    echo $stampcha->show(); // print the question text box for answers 
    
    
    
    ?> 
    
    <input type="submit" />
    
</form>
    
</body>