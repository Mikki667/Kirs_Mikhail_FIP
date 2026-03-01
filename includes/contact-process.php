<?php

// I include the database connection so I can use $pdo here.
require_once "connect.php";

// I created this function to clean user input before using it.
function cleanValue($value) {
  $value = trim($value);
  $value = strip_tags($value);
  return $value;
}


// I check that the form was submitted using POST.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("Location: ../index.php#contact");
  exit;
}

$name = "";
$email = "";
$message = "";

// I check if each field exists and then clean it.
if (isset($_POST["name"])) {
  $name = cleanValue($_POST["name"]);
}

if (isset($_POST["email"])) {
  $email = cleanValue($_POST["email"]);
}

if (isset($_POST["message"])) {
  $message = cleanValue($_POST["message"]);
}

// If any field is empty, I redirect back with an error.
if ($name === "" || $email === "" || $message === "") {
  header("Location: ../index.php?status=empty#contact");
  exit;
}

// I validate the email format using filter_var.
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("Location: ../index.php?status=bademail#contact");
  exit;
}

try {

  // I use a prepared statement with named placeholders to prevent SQL injection.
  $sql = "INSERT INTO contact_messages (name, email, message) 
  VALUES (:name, :email, :message)";

  $stmt = $pdo->prepare($sql);

// I pass the cleaned values into the query safely.
$stmt->execute([
  ":name" => $name,
  ":email" => $email,
  ":message" => $message
]);

} catch (PDOException $e) {

  // If something goes wrong with the insert, I stop the script.
  die("Database insert failed.");
}


// After saving to the database, I send myself an email notification.
$to = "topkun6666@gmail.com";
$subject = "Portfolio Contact Form";
$body = "Name: {$name}\nEmail: {$email}\n\nMessage:\n{$message}";
$headers = "From: {$email}";

mail($to, $subject, $body, $headers);

header("Location: ../index.php?status=success#contact");
exit;