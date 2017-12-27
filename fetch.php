<?php

require ("dbcon.php");

if(isset($_POST['search'])){

    $response = "<ul class='list-group'><li class='list-group-item'>No countries found</li></ul>";

    $q = mysqli_real_escape_string($conn,$_POST["q"]);

    $query = "SELECT country FROM countries WHERE country LIKE '$q%'"; 

    $res = mysqli_query($conn, $query);

    if(mysqli_num_rows($res)>0){

        $response = "<ul class='list-group'>";

        while($row = mysqli_fetch_assoc($res)){
            $response .= "<li class='list-group-item'>".$row['country']."</li>";
        }
        
        $response .= "</ul>";

    }

    exit($response);


}






?>