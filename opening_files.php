<?php 
    //This create a txt file when this program is run
    $file = "example.txt";

    $handle = fopen($file,'w');
    fclose($handle);

?>