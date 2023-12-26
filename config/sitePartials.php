<?php
const siteUrl = 'https://caketoolnftmarketplace.com/';
const siteName = 'Caketools NFT Marketplace';

if (isset($_POST['logout'])){

    session_start();

// Unset all session variables
    $_SESSION = array();

// Destroy the session
    session_destroy();

// Redirect to the login page or any other desired page after logout
    header("Location:" . siteUrl . "users/auth/login");
    exit();

}