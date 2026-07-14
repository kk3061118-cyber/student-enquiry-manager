<?php

include "includes/db.php";


$id = $_POST['id'];

$title = mysqli_real_escape_string($conn,$_POST['title']);

$description = mysqli_real_escape_string($conn,$_POST['description']);

$status = $_POST['status'];



$sql = "UPDATE tasks SET

title='$title',

description='$description',

status='$status'

WHERE id=$id";



if(mysqli_query($conn,$sql))
{

header("Location: dashboard.php");

exit();

}

else
{

echo "Update Failed";

}


?>