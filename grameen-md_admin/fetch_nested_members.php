<?php
include("db_conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['activeMember'])) {
    $selectedActiveMember = $_POST['activeMember'];
    
    // Assuming you have a table structure like user_id, name, refcode
    $query = "SELECT user_id, name FROM user WHERE refcode = '$selectedActiveMember'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $nestedMembers = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($nestedMembers);
    } else {
        echo json_encode(['error' => 'Failed to fetch nested members']);
    }
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
