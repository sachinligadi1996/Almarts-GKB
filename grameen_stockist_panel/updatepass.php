<!doctype html>
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

<body>
    <?php
    include 'db.php';

    if(isset($_GET['email']) && isset($_GET['reset_tokan'])){
        date_default_timezone_set('Asia/kolkata');
            $date=date("Y-m-d");

            $sql="SELECT * FROM stockist_admin WHERE email = '$_GET[email]' AND resettokan='$_GET[reset_tokan]' AND resettokanexpire='$date'";

            $result = mysqli_query($conn, $sql);

            if($result){
                if(mysqli_num_rows($result)==1){

                    echo
                    "
                 
                    <div class='container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px'>
                    <div class='row justify-content-center'>
                    <div class='col-lg-6 col-md-10'>
                        <div class='card'>
                            <div class='card-header bg-primary'>
                                <div class='ec-brand'>
                                    <a href='index.html' title='Ekka'>
                                        <!-- <img class='ec-brand-icon' src='assets/img/logo/logo-login.png' alt='' /> -->
                                    </a>
                                </div>
                            </div>
                    <div class='card-body p-5'>
                        <h4 class='text-dark mb-5'>Update Password</h4>
                        <form  method='post'>
                            <div class='row'>

                                <div class='form-group col-md-12'>
                                    <label for='password'>NewPassword</label>
                                    <input type='password' class='form-control' id='password'
                                        placeholder='Enter your password' name='password' required />
                                </div>
                                <div class='form-group col-md-12'>
                                    <label for='password'>ConformPassword</label>
                                    <input type='password' class='form-control' id='password'
                                        placeholder='Enter your password' name='confirmPassword' required />
                                </div>

                                    <input type='submit' class='btn btn-primary btn-block mb-4' name='submit'
                                        value='Update' />

                                        <input type='hidden' name='email' value='$_GET[email]'>


                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                    </div>
                </div>
                </div>

                    ";
                }
                else{
                    echo 
                "<script>
                alert('invalid link');
                window.location.href='adminlogin.php';
                </script>";
                }

            }
            else{
                echo 
                "<script>
                alert('try again');
                window.location.href='adminlogin.php';
                </script>";
            }

    }

    ?>
    <?php
    if(isset($_POST['submit'])) {
        // Get the entered password and email from the form
        $pass = $_POST['password'];
        $email = $_POST['email'];
    
        // Update query to change the password
        $update = "UPDATE stockist_admin SET password = '$pass', resettokan = NULL, resettokanexpire = NULL WHERE email ='$email'";
        
        if(mysqli_query($conn, $update)) {
            echo "<script>alert('Password updated successfully'); window.location.href='adminlogin.php';</script>";
        } else {
            echo "<script>alert('Server down'); window.location.href='adminlogin.php';</script>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!-- Javascript -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>

    <!-- Ekka Custom -->
    <script src="assets/js/ekka.js"></script>
</body>

</html>