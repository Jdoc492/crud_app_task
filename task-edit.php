<?php

include 'database.php';

echo $id = $_POST["id"];
echo $name = $_POST["name"];
echo $description = $_POST["description"];

$query = "UPDATE task SET name = '$name', description = '$description' WHERE id = '$id'";
$result = mysqli_query($conn,$query);

if(!$result){
    die("error");
}

echo "actualizado zatisfactoriamente";






?>