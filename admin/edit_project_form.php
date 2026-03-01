<?php
require_once "auth.php";
require_once "../includes/connect.php";


// This page loads one project and shows a form to edit it.

if (!isset($_GET["id"])) {
  header("Location: project_list.php");
  exit;
}

$projectId = $_GET["id"];

try {
  $sql = "SELECT * FROM tbl_projects WHERE project_id = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([":id" => $projectId]);
  $project = $stmt->fetch();

} catch (PDOException $e) {
  die("Could not load project.");
}

if (!$project) {
  die("Project not found.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Project</title>
</head>
<body>
  <h1>Edit Project</h1>

  <form method="post" action="edit_project.php">
    <input type="hidden" name="project_id" value="<?php echo $project["project_id"]; ?>">

    <label for="title">Title:</label><br>
    <input id="title" name="project_title" type="text" required
           value="<?php echo $project["project_title"]; ?>"><br><br>

    <label for="desc">Description:</label><br>
    <textarea id="desc" name="project_description" rows="6" required><?php echo $project["project_description"]; ?></textarea><br><br>

    <label for="industry">Industry:</label><br>
    <input id="industry" name="industry" type="text" required
           value="<?php echo $project["industry"]; ?>"><br><br>

    <label for="deliverables">Deliverables:</label><br>
    <input id="deliverables" name="deliverables" type="text" required
           value="<?php echo $project["deliverables"]; ?>"><br><br>

    <label for="date">Project Date:</label><br>
    <input id="date" name="project_date" type="date" required
           value="<?php echo $project["project_date"]; ?>"><br><br>

    <label for="image">Main Image (path or filename):</label><br>
    <input id="image" name="main_image" type="text" required
           value="<?php echo $project["main_image"]; ?>"><br><br>

    <button type="submit">Save Changes</button>
  </form>

  <p><a href="project_list.php">Back to list</a></p>
</body>
</html>