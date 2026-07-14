<?php

include "includes/db.php";


$result = mysqli_query($conn,"SELECT * FROM tasks ORDER BY id DESC");


?>


<!DOCTYPE html>
<html>

<head>

<title>Dashboard</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<div class="container">


<h1>Task Dashboard</h1>


<a class="btn" href="index.php">
+ Add New Task
</a>


<table>


<tr>

<th>ID</th>
<th>Title</th>
<th>Description</th>
<th>Status</th>
<th>Date</th>
<th>Action</th>

</tr>



<?php

while($row=mysqli_fetch_assoc($result))

{


?>


<tr>


<td>
<?php echo $row['id']; ?>
</td>


<td>
<?php echo $row['title']; ?>
</td>


<td>
<?php echo $row['description']; ?>
</td>


<td>

<?php echo $row['status']; ?>

</td>


<td>

<?php echo $row['created_at']; ?>

</td>



<td>


<a href="edit_task.php?id=<?php echo $row['id']; ?>">
Edit
</a>


<a href="delete_task.php?id=<?php echo $row['id']; ?>">
Delete
</a>


</td>


</tr>



<?php

}

?>


</table>


</div>


</body>

</html>