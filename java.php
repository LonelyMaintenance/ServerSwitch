<?php
    if(isset($_GET['command'])){
        $command = $_GET['command'];

        echo $command;

    }else{
        echo "your data is not set";
    }

?>