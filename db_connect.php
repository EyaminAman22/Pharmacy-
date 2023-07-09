<?php
    
    $conn = mysqli_connect('localhost','root','','pharmamartdb');

    if(!$conn){
        echo 'connection error: '.mysqli_connect_error();
    }

?>