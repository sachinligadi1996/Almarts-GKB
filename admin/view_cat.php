<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>images crud</h2>
                    </div>
                    <div class="card-body">
                        <?php
                        include "dbconnect.php";

                        $sql = "SELECT * FROM `add_category`";
                        $data = mysqli_query($conn, $sql);

                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>sr.no</th>
                                    <th>cat name</th>
                                    <th>cat description</th>
                                    <th>cat Thumb</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($data) > 0) {
                                    foreach ($data as $row) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['cat_name'];?></td>
                                            <td><?php echo $row['cat_desc'];?></td>
                                            <td>
                                                <img src="<?php echo "upload/".$row['thumb_1'];?>" width="250px" height="150px">
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td>No data Found</td>
                                    </tr>
                                    <?php
                                }
                                ?>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>