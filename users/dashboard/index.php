<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /users/auth/login");
    exit();
} else{
    require_once ('all-nft/index.php');
    exit();
}
