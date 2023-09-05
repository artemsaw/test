<?php

    // $file_1 = (int)file_get_contents('1.txt');
    // $file_2 = (int)file_get_contents('2.txt');
    // $file_3 = $file_2 + $file_1;

    // file_put_contents('3.txt', $file_3);

    echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . '\dir1\1.txt');
    echo "<br>";


?>