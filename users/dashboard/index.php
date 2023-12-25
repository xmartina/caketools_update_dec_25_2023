<?php
const siteUrl = 'https://caketoolnftmarketplace.com/';
const basePath = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Start the session
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location:" .siteUrl."users/auth/login");
    exit();
} elseif (isset($_SESSION['user_id'])){
    require_once ('all-nft/index.php');
    exit();
}

// Display dashboard content

?>
