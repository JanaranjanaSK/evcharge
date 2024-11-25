<?php
session_start();
echo json_encode(['loggedIn' => isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true]);
?>
