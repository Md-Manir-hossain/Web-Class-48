<?php

$connection = new mysqli ('localhost', 'root', '', 'my_first_project');

if ($connection == true) {
    echo "Connected Successfully!";
}

else {
    echo "Connected Failed!";
}

?>