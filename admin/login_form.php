<?php

// This page shows a login form for the admin.

session_start();

if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] === true) {
  header("Location: project_list.php");
  exit;
}

$statusMessage = "";

if (isset($_GET["status"])) {
  if ($_GET["status"] === "badlogin") {
    $statusMessage = "Wrong username or password.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
  <h1>Admin Login</h1>

  <?php if ($statusMessage !== ""): ?>
    <p><?php echo $statusMessage; ?></p>
  <?php endif; ?>

  <form method="post" action="login.php">
    <label for="username">Username:</label>
    <input id="username" name="username" type="text" required>

    <br><br>

    <label for="password">Password:</label>
    <input id="password" name="password" type="password" required>

    <br><br>

    <button type="submit">Log In</button>
  </form>

  <p><a href="index.php">Back to site</a></p>
</body>
</html>