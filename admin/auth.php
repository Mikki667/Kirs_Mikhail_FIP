<?php
// I use this file to protect admin pages.
// If the user is not logged in, they get sent to the login form.

session_start();

if (!isset($_SESSION["is_admin"]) || $_SESSION["is_admin"] !== true) {
  header("Location: login_form.php");
  exit;
}