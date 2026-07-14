<?php

include "includes/db.php";


if($_SERVER["REQUEST_METHOD"]=="POST")
{

$title = mysqli_real_escape_string($conn,$_POST['title']);

$description = mysqli_real_escape_string($conn,$_POST['description']);

$status = $_POST['status'];



$sql = "INSERT INTO tasks(title,description,status)
VALUES('$title','$description','$status')";


if(mysqli_query($conn,$sql))
{
    header("Location: dashboard.php");
    exit();
}
else
{
    echo "Error : ".mysqli_error($conn);
}


}

?>