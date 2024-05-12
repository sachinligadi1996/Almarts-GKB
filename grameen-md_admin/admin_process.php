<?php
// Include the database connection
include('db.php');

// Retrieve form data
$admin_id = isset($_POST['head_admin_id']) ? trim($_POST['head_admin_id']) : '';

// Perform a database query to retrieve branches under the specified admin ID
$sql = "
    SELECT *
    FROM gkb_admin_details
    WHERE head_admin_id = ?
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $admin_id);
$stmt->execute();
$result = $stmt->get_result();

// Display the results in list format with Bootstrap styling
if ($result->num_rows > 0) {
    echo '<div class="container">';
    echo '<div class="card mt-4">';
    echo '<div class="card-body">';
    echo '<h4 class="card-title">Branches under Admin:</h4>';
    echo '<ul class="list-group list-group-flush">';
    while ($row = $result->fetch_assoc()) {
        echo '<li class="list-group-item"><strong>Branch ID:</strong> ' . $row['branch_id'] . '</li>';
        echo '<li class="list-group-item"><strong>Branch Manager:</strong> ' . $row['branch_manager'] . '</li>';
        echo '<li class="list-group-item"><strong>Mobile:</strong> ' . $row['branch_mob'] . '</li>';
        // Add other fields as needed
    }
    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
} else {
    echo '<div class="alert alert-warning mt-4" role="alert">No branches found for the provided Admin ID.</div>';
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
