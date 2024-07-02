<?php
// functions.php

/**
 * Redirect user to login page if not logged in.
 */
function redirect_if_not_logged_in() {
    if (!isset($_SESSION['nim'])) {
        header('Location: login.php');
        exit;
    }
}

/**
 * Retrieve all countries from the database.
 *
 * @global mysqli $conn Database connection object.
 * @return array Array of countries.
 */
function get_countries() {
    global $conn;
    $sql = "SELECT * FROM countries";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        // Handle query error
        // Example: log the error, display a message, etc.
        error_log("Query error: " . mysqli_error($conn));
        return []; // Return empty array if query fails
    }
}

/**
 * Retrieve standings data from the database.
 *
 * @global mysqli $conn Database connection object.
 * @return array Array of standings data.
 */
function get_standings() {
    global $conn;
    $sql = "SELECT s.*, g.name as group_name, c.name as country_name FROM standings s JOIN groups g ON s.group_id = g.id JOIN countries c ON s.country_id = c.id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        // Handle query error
        // Example: log the error, display a message, etc.
        error_log("Query error: " . mysqli_error($conn));
        return []; // Return empty array if query fails
    }
}

/**
 * Retrieve a specific country by its ID.
 *
 * @global mysqli $conn Database connection object.
 * @param int $id Country ID.
 * @return array|null Array of country data or null if not found.
 */
function get_country_by_id($id) {
    global $conn;
    $sql = "SELECT * FROM countries WHERE id = ?";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, 'i', $id);
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            return mysqli_fetch_assoc($result);
        } else {
            // Handle execute error
            // Example: log the error, display a message, etc.
            error_log("Execute error: " . mysqli_stmt_error($stmt));
        }
    } else {
        // Handle prepare error
        // Example: log the error, display a message, etc.
        error_log("Prepare error: " . mysqli_error($conn));
    }
    return null;
}

/**
 * Update a country in the database.
 *
 * @global mysqli $conn Database connection object.
 * @param int $id Country ID.
 * @param string $name Country name.
 * @return bool True on success, false on failure.
 */
function update_country($id, $name) {
    global $conn;
    $sql = "UPDATE countries SET name = ? WHERE id = ?";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, 'si', $name, $id);
        if (mysqli_stmt_execute($stmt)) {
            return true;
        } else {
            // Handle execute error
            // Example: log the error, display a message, etc.
            error_log("Execute error: " . mysqli_stmt_error($stmt));
        }
    } else {
        // Handle prepare error
        // Example: log the error, display a message, etc.
        error_log("Prepare error: " . mysqli_error($conn));
    }
    return false;
}

/**
 * Delete a country from the database.
 *
 * @global mysqli $conn Database connection object.
 * @param int $id Country ID.
 * @return bool True on success, false on failure.
 */
function delete_country($id) {
    global $conn;
    $sql = "DELETE FROM countries WHERE id = ?";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, 'i', $id);
        if (mysqli_stmt_execute($stmt)) {
            return true;
        } else {
            // Handle execute error
            // Example: log the error, display a message, etc.
            error_log("Execute error: " . mysqli_stmt_error($stmt));
        }
    } else {
        // Handle prepare error
        // Example: log the error, display a message, etc.
        error_log("Prepare error: " . mysqli_error($conn));
    }
    return false;
}
?>
