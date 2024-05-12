<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Ekka - Admin Dashboard HTML Template." />
    <title>Ekka - Distributor Dashboard HTML Template.</title>
    
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet" />

    <link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- Ekka CSS -->
    <link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
   <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body class="sign-inup" id="body">
    <div class="container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 w-100">
                <div class="card w-100">
                    <div class="card-header bg-primary">
                        <div class="ec-brand">
                            <a href="index.html" title="Ekka">
                                <!-- <img class="ec-brand-icon" src="assets/img/logo/logo-login.png" alt="" /> -->
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        <h4 class="text-dark mb-5">Forget Password</h4>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required />
                                </div>

                                

                                

                                        
                                    </div>

                                    <input type="submit" class="btn btn-primary btn-block mb-4" name="submit" value="Send Link" />

                                    <!-- <p class="sign-upp">Don't have an account yet ?
                                        <a class="text-blue" href="sign-up.php">Sign Up</a>
                                    </p> -->
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
</html>
<?php

include 'db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function send($email,$reset_tokan){
    require('PHPMailer.php');
    require('SMTP.php');
    require('Exception.php');

    $mail = new PHPMailer(true);

    try {
        //Server settings
                           
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'snikam8451@gmail.com';                     //SMTP username
        $mail->Password   = 'cddb nwng npqz dvnu';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
    
        //Recipients
        $mail->setFrom('sachinkb308@gmail.com', 'sachin');
        $mail->addAddress($email);     //Add a recipient
        
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'password reset link';
        $mail->Body    = "we got  a request from you to reset your password !<br>click the link below:<br>
        <a href='http://localhost/Grameen%20K%20bazar/grameen-admin/updatepass.php?email=$email&reset_tokan=$reset_tokan'>Reset Password</a>";
       
    
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }


}




if (isset($_POST['submit'])) {
    // Get the user's email from the form
    
    // Check if the email exists in the database
    $sql = "SELECT * FROM admin WHERE email = '$_POST[email]'";
    $result = mysqli_query($conn, $sql);


    if ($result) {
         
        if(mysqli_num_rows($result)==1){

            $reset_tokan=bin2hex(random_bytes(16));
            date_default_timezone_set('Asia/kolkata');
            $date=date("Y-m-d");
            $sql= "UPDATE  admin SET resettokan='$reset_tokan',resettokanexpire='$date' WHERE email = '$_POST[email]'";
            if(mysqli_query($conn, $sql) && send($_POST['email'],$reset_tokan))
            {

                echo
                "<script>
                alert('resetlink send');
                window.location.href='adminlogin.php';
                </script>";
            }
            else{
                echo 
                "<script>
                alert('try again');
                window.location.href='adminlogin.php';
                </script>";
            }

        }
        else{
            echo 
            "<script>
            alert('invalid email');
            window.location.href='adminlogin.php';
            </script>";
        }
    } else {
        echo "<script>
        alert('cannot run query');
        window.location.href='adminlogin.php';
        </script>";
    }
}

// Close the database connection
$conn->close();
?>