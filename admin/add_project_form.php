<?php
require_once "auth.php";
require_once "../includes/connect.php";

// This is the form page to create a new project.
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Project</title>
</head>
<body>
  <h1>Add Project</h1>

  <form method="post" action="add_project.php">
    <label for="title">Title:</label><br>
    <input id="title" name="project_title" type="text" required><br><br>

    <label for="desc">Description:</label><br>
    <textarea id="desc" name="project_description" rows="6" required></textarea><br><br>

    <label for="industry">Industry:</label><br>
    <input id="industry" name="industry" type="text" required><br><br>

    <label for="deliverables">Deliverables:</label><br>
    <input id="deliverables" name="deliverables" type="text" required><br><br>

    <label for="date">Project Date:</label><br>
    <input id="date" name="project_date" type="date" required><br><br>

    <label for="image">Main Image (path or filename):</label><br>
    <input id="image" name="main_image" type="text" required><br><br>

    <button type="submit">Create Project</button>
  </form>

  <p><a href="project_list.php">Back to list</a></p>
</body>
</html>