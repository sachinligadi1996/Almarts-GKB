<?php
// Include db_conn.php for database connection
include("db_conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['refcode'])) {
    $primeMemberRefCode = $_POST['refcode'];
    $loggedInUserID = $_SESSION['$user_name'];

    // Fetch active members based on the selected prime member's refcode
    $query_show_active = mysqli_query($conn, "SELECT * FROM user WHERE refcode = '$primeMemberRefCode' AND user_id != '$loggedInUserID'");

    if ($query_show_active) {
        // Prepare the options for the dropdown
        $options = "";
        while ($showp = mysqli_fetch_array($query_show_active)) {
            // Build the options excluding the logged-in user
            $options .= "<option value='{$showp['user_id']}'>{$showp['name']}</option>";
        }
        echo $options;
    } else {
        echo "Error fetching active members: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request!";
}
?>
