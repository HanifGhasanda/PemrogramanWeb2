<?php
// delete_country.php
require_once 'includes/config.php';
require_once 'includes/functions.php';

redirect_if_not_logged_in();

$id = $_GET['id'];

if (delete_country($id)) {
    header('Location: dashboard.php');
    exit;
} else {
    echo "Error deleting country.";
}
?>
