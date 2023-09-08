<?php

function pushDataIntoVariable($somePath){
    ob_start();
    include $somePath;
    return ob_get_clean();
}

$myVar = pushDataIntoVariable('dir1/test.php');

echo $myVar;

?>