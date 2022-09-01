<?php 
    //This create a txt file when this program is run
    $file = "example.txt";

    if($handle = fopen($file,'r')){
        //this code below updates the text belows
       echo $content = fread($handle, filesize($file)); //each bite is equal a character
        fclose($handle);
    }else{
        echo "This files could not be written";
    }
    
?>