<?php

include "database.php";

if(isset($_POST["name"])){
    $name = $_POST["name"];
    $description = $_POST["description"];
    $query = "INSERT INTO task (name,description) VALUE('$name','$description')";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("error query consu");
    }
    echo "consulta agregada satisfactoriamente";
}


?>