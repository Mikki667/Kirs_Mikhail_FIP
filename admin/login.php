<?php
// This file checks the login form and starts an admin session.

session_start();

function cleanValue($value) {
  $value = trim($value);
  $value = strip_tags($value);
  return $value;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("Location: login_form.php");
  exit;
}

$username = "";
$password = "";

if (isset($_POST["username"])) {
  $username = cleanValue($_POST["username"]);
}

if (isset($_POST["password"])) {
  $password = cleanValue($_POST["password"]);
}

// Admin credentials stored here 
$adminUser = "mishania";
$adminPass = "admin1111";
// After my portfolio is graded, I will change the password to something more secure.

if ($username === $adminUser && $password === $adminPass) {
  $_SESSION["is_admin"] = true;
  header("Location: project_list.php");
  exit;
}

header("Location: login_form.php?status=badlogin");
exit;