<?php
// kk3061118@gmail.com
?>

<!DOCTYPE html>
<html>

<head>

<title>Task Manager</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<div class="container">


<h1>Task Manager</h1>
<h1>
    <div class="container">
    <img src="images/banner.jpeg"
         alt="Student Task Manager Banner"
         style="width:100%; border-radius:10px; margin:20px 0;">
</div>
</h1>
<div class="card">


<h2>Add New Task</h2>


<form action="add_task.php" method="POST">


<label>Task Title</label>

<input 
type="text" 
name="title"
placeholder="Enter task title"
required>


<label>Description</label>

<textarea 
name="description"
placeholder="Enter description"
required></textarea>


<label>Status</label>

<select name="status">

<option value="Pending">
Pending
</option>

<option value="Completed">
Completed
</option>

</select>


<button type="submit">
Add Task
</button>


</form>


<a class="btn" href="dashboard.php">
View Dashboard
</a>


</div>
<img src="images/logo.jpeg" alt="Student Task Manager Logo" width="100">

<h1>Student Task Manager</h1>
<p>Manage your daily study tasks easily</p>

</div>


</body>

</html>