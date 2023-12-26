<?php
session_start();
if (isset($_SESSION['user_id'])) {
    require_once ('all-nft/index.php');
    exit();
} else{
    header("Location: /users/auth/login");
    exit();
}
echo $_SESSION['user_id'];