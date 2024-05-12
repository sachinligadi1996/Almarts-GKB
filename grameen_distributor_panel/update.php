<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Ekka - Admin Dashboard HTML Template." />
    <title>Gangotri Ganga</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet" />

    <link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css"
        rel="stylesheet" />

    <!-- Ekka CSS -->
    <link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />
</head>

<body class="sign-inup" id="body">
    <div class="container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="ec-brand">
                            <a href="index.html" title="Ekka">
                                <!-- <img class="ec-brand-icon" src="assets/img/logo/logo-login.png" alt="" /> -->
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5 w-100">
                        <h4 class="text-dark mb-5">Update Password</h4>
                        <form action="#" method="post">
                            <div class="row">


                                <div class="form-group col-md-12">
                                    <label for="password">NewPassword</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Enter your password" name="newPassword" required />
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="password">ConformPassword</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Enter your password" name="confirmPassword" required />
                                </div>


                                <div class="col-md-12">
                                    <div class="d-flex my-2 justify-content-between">
                                        <div class="d-inline-block mr-3">

                                        </div>

                                    </div>

                                    <input type="submit" class="btn btn-primary btn-block mb-4" name="submit"
                                        value="Submit" />


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>

    <!-- Ekka Custom -->
    <script src="assets/js/ekka.js"></script>
</body>

<?php
session_start(); // Start the session if not started already
include 'db.php'; // Include your database connection file

// Check if form is submitted
if (isset($_POST['submit'])) {
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validate passwords
    if ($newPassword !== $confirmPassword) {
        echo "<script>alert('Passwords do not match');</script>";
    } else {
        $userId = $_SESSION['id']; // Replace this with your actual user identifier

        // Fetch email from the database
        $getEmailQuery = "SELECT email FROM distributor_admin WHERE id = ?";
        if ($stmt = $conn->prepare($getEmailQuery)) {
            $stmt->bind_param('s', $userId);
            $stmt->execute();
            $result = $stmt->get_result();
            $userData = $result->fetch_assoc();
            $email = $userData['email'];

            // Update password
            $updatePasswordQuery = "UPDATE distributor_admin SET password = ? WHERE id = ?";
            if ($stmt = $conn->prepare($updatePasswordQuery)) {
                // Hash the password before updating (consider using password_hash() function)
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $stmt->bind_param('ss', $hashedPassword, $userId);
                if ($stmt->execute()) {
                    echo "<script>alert('Password updated successfully');
                    window.location.href='adminlogin.php'; // Redirect to login page or display a link
                    </script>";
                } else {
                    echo "<script>alert('Failed to update password');</script>";
                }
                $stmt->close();
            } else {
                echo "<script>alert('Error in preparing update statement');</script>";
            }
        } else {
            echo "<script>alert('Error in fetching email');</script>";
        }
    }
    $conn->close(); // Close the database connection
}
?>

</html>