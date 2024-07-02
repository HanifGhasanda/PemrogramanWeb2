<?php
// functions.php

function get_countries() {
    global $conn;
    $sql = "SELECT * FROM countries";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function get_standings() {
    global $conn;
    $sql = "SELECT s.*, g.name as group_name, c.name as country_name
            FROM standings s
            JOIN groups g ON s.group_id = g.id
            JOIN countries c ON s.country_id = c.id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function redirect_if_not_logged_in() {
    if (!isset($_SESSION['nim'])) {
        header('Location: login.php');
        exit;
    }
}
?>
