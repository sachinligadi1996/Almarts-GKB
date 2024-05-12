<?php
// get_active_members.php

// Include the database connection file
include("db_conn.php");

// Get the selected prime member ID from the AJAX request
$primeMemberId = $_POST['primeMemberId'];
// $primeMemberId = $_POST['userId'];

$query = "SELECT user_id, name FROM user WHERE refcode = '$primeMemberId'";
$result = mysqli_query($conn, $query);

if ($result) {
    // Fetch data and create the HTML content for active members
    $activeMembers = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach ($activeMembers as $activeMember) {
        echo "<p>{$activeMember['user_id']}-{$activeMember['name']}</p>";
        // Add other HTML elements as needed
    }
} else {
    echo "Error fetching active members: " . mysqli_error($conn);
}
?>
