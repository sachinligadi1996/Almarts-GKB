<?php
// fetch_members.php

include("db_conn.php");

if (isset($_POST['primeMember'])) {
    $selectedPrimeMember = $_POST['primeMember'];

    // Fetch members based on the selected prime member
    $query = "SELECT user_id, name FROM user WHERE refcode = '$selectedPrimeMember'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $members = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($members);
    } else {
        echo json_encode(['error' => 'Failed to fetch members']);
    }
} else {
    echo json_encode(['error' => 'Prime member not provided']);
}
?>
