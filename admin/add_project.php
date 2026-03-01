<?php
require_once "auth.php";
require_once "../includes/connect.php";

// This file inserts a new project into tbl_projects.

function cleanValue($value) {
  $value = trim($value);
  $value = strip_tags($value);
  return $value;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("Location: project_list.php");
  exit;
}

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
  $sql = "INSERT INTO tbl_projects 
          (project_title, project_description, industry, deliverables, project_date, main_image)
          VALUES 
          (:title, :descr, :industry, :deliverables, :pdate, :img)";

  $stmt = $pdo->prepare($sql);
  $stmt->execute([
    ":title" => $title,
    ":descr" => $desc,
    ":industry" => $industry,
    ":deliverables" => $deliverables,
    ":pdate" => $date,
    ":img" => $image
  ]);

} catch (PDOException $e) {
  die("Could not add project.");
}

header("Location: project_list.php");
exit;