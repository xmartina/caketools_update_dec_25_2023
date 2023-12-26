<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location:" .siteUrl."users/auth/login");
    exit();
} elseif (isset($_SESSION['user_id'])){
    require_once ('all-nft/index.php');
    exit();
}
