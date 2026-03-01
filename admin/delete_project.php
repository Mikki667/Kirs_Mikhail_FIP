<?php
require_once "auth.php";
require_once "../includes/connect.php";


// This file permanently deletes a project.
// I kept it simple because I didn’t want to change the database structure.

if (!isset($_GET["id"])) {
  header("Location: project_list.php");
  exit;
}

$projectId = $_GET["id"];

try {
  $sql = "DELETE FROM tbl_projects WHERE project_id = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([":id" => $projectId]);

} catch (PDOException $e) {
  die("Could not delete project.");
}

header("Location: project_list.php");
exit;