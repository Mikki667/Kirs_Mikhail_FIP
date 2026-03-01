<?php
require_once "auth.php";
require_once "../includes/connect.php";


// This file updates an existing project.

function cleanValue($value) {
  $value = trim($value);
  $value = strip_tags($value);
  return $value;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("Location: project_list.php");
  exit;
}

if (!isset($_POST["project_id"])) {
  header("Location: project_list.php");
  exit;
}

$projectId = cleanValue($_POST["project_id"]);

$title = "";
$desc = "";
$industry = "";
$deliverables = "";
$date = "";
$image = "";

if (isset($_POST["project_title"])) {
  $title = cleanValue($_POST["project_title"]);
}

if (isset($_POST["project_description"])) {
  $desc = cleanValue($_POST["project_description"]);
}

if (isset($_POST["industry"])) {
  $industry = cleanValue($_POST["industry"]);
}

if (isset($_POST["deliverables"])) {
  $deliverables = cleanValue($_POST["deliverables"]);
}

if (isset($_POST["project_date"])) {
  $date = cleanValue($_POST["project_date"]);
}

if (isset($_POST["main_image"])) {
  $image = cleanValue($_POST["main_image"]);
}

if ($title === "" || $desc === "" || $industry === "" || $deliverables === "" || $date === "" || $image === "") {
  die("Please fill in all fields.");
}

try {
  $sql = "UPDATE tbl_projects
          SET project_title = :title,
              project_description = :descr,
              industry = :industry,
              deliverables = :deliverables,
              project_date = :pdate,
              main_image = :img
          WHERE project_id = :id";

  $stmt = $pdo->prepare($sql);
  $stmt->execute([
    ":title" => $title,
    ":descr" => $desc,
    ":industry" => $industry,
    ":deliverables" => $deliverables,
    ":pdate" => $date,
    ":img" => $image,
    ":id" => $projectId
  ]);

} catch (PDOException $e) {
  die("Could not update project.");
}

header("Location: project_list.php");
exit;