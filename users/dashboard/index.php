<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /users/auth/login");
} else{
    require_once ('index.php');
}
exit();
