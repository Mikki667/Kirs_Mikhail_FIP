<?php

require_once "connect.php";

function cleanValue($value) {
  $value = trim($value);
  $value = strip_tags($value);
  return $value;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("Location: ../contact.php");
  exit;
}

$name = "";
$email = "";
$message = "";

if (isset($_POST["name"])) {
  $name = cleanValue($_POST["name"]);
}

if (isset($_POST["email"])) {
  $email = cleanValue($_POST["email"]);
}

if (isset($_POST["message"])) {
  $message = cleanValue($_POST["message"]);
}

if ($name === "" || $email === "" || $message === "") {
  header("Location: ../contact.php?status=empty");
  exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("Location: ../contact.php?status=bademail");
  exit;
}

try {

  $sql = "INSERT INTO contact_messages (name, email, message) 
  VALUES (:name, :email, :message)";

  $stmt = $pdo->prepare($sql);

$stmt->execute([
  ":name" => $name,
  ":email" => $email,
  ":message" => $message
]);

} catch (PDOException $e) {

  die("Database insert failed.");
}

$to = "topkun6666@gmail.com";
$subject = "Portfolio Contact Form";
$body = "Name: {$name}\nEmail: {$email}\n\nMessage:\n{$message}";
$headers = "From: {$email}";

mail($to, $subject, $body, $headers);

header("Location: ../contact.php?status=success");
exit;