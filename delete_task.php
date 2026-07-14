<?php

include "includes/db.php";


$id = $_GET['id'];


$sql = "DELETE FROM tasks WHERE id=$id";


if(mysqli_query($conn,$sql))
{

header("Location: dashboard.php");

exit();

}

else
{

echo "Delete Failed";

}


?>