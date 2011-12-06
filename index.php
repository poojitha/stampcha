<?php

include_once 'Stamp/Stampcha.php';
include_once 'Stamp/Map.php';

$stampcha = new Stamp_Stampcha();
$stampcha->init(4); // Number of images to show under the question

?>

<?php

    if(!$stampcha->isHuman()) { // returns false if the answer is wrong
        echo "Shoo,Shoo robot!";
    }else{
        echo "You are a beautiful human being";
    }
    
?>

<form method="POST">
    
    <?php 
    
    echo $stampcha->show(); // print the question and answers 
    
    
    
    ?> 
    
    <input type="submit" />
    
</form>