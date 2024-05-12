<?php
// Include db_conn.php for database connection
include("db_conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['activeMemberID'])) {
    $activeMemberID = $_POST['activeMemberID'];
    $loggedInUserID = $_SESSION['$user_name'];

    // Fetch nested active members based on the selected active member's ID
    $query_show_nestedactive = mysqli_query($conn, "SELECT * FROM user WHERE refcode = '$activeMemberID' AND user_id != '$loggedInUserID'");

    if ($query_show_nestedactive) {
        // Prepare the options for the dropdown
        $options = "";
        while ($showp = mysqli_fetch_array($query_show_nestedactive)) {
            // Build the options excluding the logged-in user
            $options .= "<option value='{$showp['user_id']}'>{$showp['user_id']}: {$showp['name']}</option>";
        }
        echo $options;
    } else {
        echo "Error fetching nested active members: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request!";
}
?>