<?php

// I separated the database connection into its own file
// so I can reuse it in different PHP files like the contact form and CMS later.

$host = "localhost";
$dbname = "portfolio";
$username = "root";
$password = "";
$charset = "utf8mb4";

// I built the DSN string using variables so it’s easier to change later if needed.
$dsn = "mysql:host={$host};dbname={$dbname};charset={$charset}";

// These options help control how PDO behaves.
$options = [
  // This makes PDO throw errors as exceptions instead of failing silently.
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  // This makes database results return as associative arrays.
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
  // Here I create the PDO connection using the DSN and options.
  $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
  // If the connection fails, I stop the script with a simple message.
  die("Database connection failed.");
}