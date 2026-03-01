<?php
// This logs the admin out by clearing the session.

session_start();
session_unset();
session_destroy();

header("Location: login_form.php");
exit;