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
                        <h2>PHP image crud</h2>
                    </div>
                    <div class="card-boy">
                        <form action="code.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Catgory name:-</label>
                                <input type="text" class="form-control" name="cat_name">
                            </div>
                            <div class="form-group">
                                <label for="">Catgory Description:-</label>
                                <input type="text" class="form-control" name="cat_desc">
                            </div>
                            <div class="form-group">
                                <label for="">Catgory image:-</label>
                                <input type="file" class="form-control" name="thumb_1">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>

</html>