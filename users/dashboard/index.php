<?php
const siteUrl = 'https://caketoolnftmarketplace.com/';
const basePath = '/home/multistream6/domains/caketoolnftmarketplace.com/public_html/';
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Start the session
session_start();

// Check if 'user_id' is set in the URL parameters
if (isset($_GET['user_id'])) {
    // Get the value of 'user_id'
    $user_id = $_GET['user_id'];

    // Validate if it's a valid number
    if (is_numeric($user_id)) {
        // Assign it to a session variable
        $_SESSION['user_id'] = $user_id;

        // Continue with your code or redirect to the desired location
//        header("Location: /user/dashboard");
        require_once ('all-nft/index.php');
        exit();
    } else {
        // Handle the case where 'user_id' is not a valid number
        header("Location: /auth?login");
        exit();
    }
} else {
    // Handle the case where 'user_id' is not set in the URL
    header("Location: /auth?login");
    exit();
}
// Display dashboard content

?>
