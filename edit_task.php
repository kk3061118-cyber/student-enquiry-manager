<?php

include "includes/db.php";


$id = $_GET['id'];


$result = mysqli_query($conn,"SELECT * FROM tasks WHERE id=$id");


$task = mysqli_fetch_assoc($result);


?>


<!DOCTYPE html>
<html>

<head>

<title>Edit Task</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<div class="container">


<h1>Edit Task</h1>


<div class="card">


<form action="update_task.php" method="POST">


<input type="hidden" name="id" value="<?php echo $task['id']; ?>">



<label>Task Title</label>

<input 
type="text" 
name="title"
value="<?php echo $task['title']; ?>"
required>



<label>Description</label>

<textarea name="description"><?php echo $task['description']; ?></textarea>



<label>Status</label>


<select name="status">


<option value="Pending"
<?php if($task['status']=="Pending") echo "selected"; ?>>
Pending
</option>


<option value="Completed"
<?php if($task['status']=="Completed") echo "selected"; ?>>
Completed
</option>


</select>



<button type="submit">
Update Task
</button>



</form>


</div>


</div>


</body>

</html>