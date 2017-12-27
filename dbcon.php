<?php

$conn = mysqli_connect('localhost','root','','ajax_search');

if(!$conn){
    die('Connection Failed'.mysqli_connect_error());
}

?>