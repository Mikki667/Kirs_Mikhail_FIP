<?php
require_once "auth.php";
require_once "../includes/connect.php";

// This page lists all projects from the database.
// From here I can add, edit, or delete.

try {
  $sql = "SELECT project_id, project_title, project_date, industry 
          FROM tbl_projects
          ORDER BY project_id DESC";

  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $projects = $stmt->fetchAll();

} catch (PDOException $e) {
  die("Could not load projects.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project List</title>
</head>
<body>
  <h1>Projects (Admin)</h1>

  <p>
    <a href="add_project_form.php">+ Add New Project</a> |
    <a href="logout.php">Log Out</a>
  </p>

  <?php if (count($projects) === 0): ?>
    <p>No projects found.</p>
  <?php else: ?>
    <table border="1" cellpadding="8">
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Date</th>
        <th>Industry</th>
        <th>Actions</th>
      </tr>

      <?php foreach ($projects as $project): ?>
        <tr>
          <td><?php echo $project["project_id"]; ?></td>
          <td><?php echo $project["project_title"]; ?></td>
          <td><?php echo $project["project_date"]; ?></td>
          <td><?php echo $project["industry"]; ?></td>
          <td>
            <a href="edit_project_form.php?id=<?php echo $project["project_id"]; ?>">Edit</a>
            |
            <a href="delete_project.php?id=<?php echo $project["project_id"]; ?>"
               onclick="return confirm('Delete this project permanently?');">
               Delete
            </a>
          </td>
        </tr>
      <?php endforeach; ?>

    </table>
  <?php endif; ?>

  <p><a href="index.php">Back to site</a></p>
</body>
</html>