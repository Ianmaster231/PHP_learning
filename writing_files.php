<?php 
    //This create a txt file when this program is run
    $file = "example.txt";

    if($handle = fopen($file,'w')){
        //this code below updates the text belows
        fwrite($handle, 'I love The Bee Movie');
        fclose($handle);
    }else{
        echo "This files could not be written";
    }
    
?>