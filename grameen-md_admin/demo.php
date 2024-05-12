<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Bootstrap Form</title>
</head>
<body>

<div class="container mt-5">
    <form>

        <div class="row">
            <!-- CIN Number -->
            <div class="col-md-4 mb-3">
                <label for="cinNumber">CIN Number:</label>
                <input type="text" class="form-control" id="cinNumber" placeholder="Enter CIN Number">
            </div>

            <!-- GST Number -->
            <div class="col-md-4 mb-3">
                <label for="gstNumber">GST Number:</label>
                <input type="text" class="form-control" id="gstNumber" placeholder="Enter GST Number">
            </div>

            <!-- PAN Number -->
            <div class="col-md-4 mb-3">
                <label for="panNumber">PAN Number:</label>
                <input type="text" class="form-control" id="panNumber" placeholder="Enter PAN Number">
            </div>

            <!-- TAN Number -->
            <div class="col-md-4 mb-3">
                <label for="tanNumber">TAN Number:</label>
                <input type="text" class="form-control" id="tanNumber" placeholder="Enter TAN Number">
            </div>

            <!-- Select Category -->
            <div class="col-md-4 mb-3">
                <label for="selectCategory">Select Category:</label>
                <select class="form-control" id="selectCategory">
                    <option value="">Select Category</option>
                    <!-- Add category options here -->
                </select>
            </div>

            <!-- Product Name -->
            <div class="col-md-4 mb-3">
                <label for="productName">Product Name:</label>
                <input type="text" class="form-control" id="productName" placeholder="Enter Product Name">
            </div>

            <!-- Description -->
            <div class="col-md-4 mb-3">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" rows="3" placeholder="Enter Description"></textarea>
            </div>

            <!-- State Code -->
            <div class="col-md-4 mb-3">
                <label for="stateCode">State Code:</label>
                <input type="text" class="form-control" id="stateCode" placeholder="Enter State Code">
            </div>

            <!-- Batch Code -->
            <div class="col-md-4 mb-3">
                <label for="batchCode">Batch Code:</label>
                <input type="text" class="form-control" id="batchCode" placeholder="Enter Batch Code">
            </div>

            <!-- MRP -->
            <div class="col-md-4 mb-3">
                <label for="mrp">MRP:</label>
                <input type="text" class="form-control" id="mrp" placeholder="Enter MRP">
            </div>

            <!-- Purchase Price -->
            <div class="col-md-4 mb-3">
                <label for="purchasePrice">Purchase Price:</label>
                <input type="text" class="form-control" id="purchasePrice" placeholder="Enter Purchase Price">
            </div>

            <!-- Profit -->
            <div class="col-md-4 mb-3">
                <label for="profit">Profit:</label>
                <input type="text" class="form-control" id="profit" placeholder="Enter Profit">
            </div>

            <!-- Commission -->
            <div class="col-md-4 mb-3">
                <label for="commission">Commission:</label>
                <input type="text" class="form-control" id="commission" placeholder="Enter Commission">
            </div>

            <!-- PVC -->
            <div class="col-md-4 mb-3">
                <label for="pvc">PVC:</label>
                <input type="text" class="form-control" id="pvc" placeholder="Enter PVC">
            </div>

            <!-- Discount -->
            <div class="col-md-4 mb-3">
                <label for="discount">Discount:</label>
                <input type="text" class="form-control" id="discount" placeholder="Enter Discount">
            </div>

            <!-- New Price -->
            <div class="col-md-4 mb-3">
                <label for="newPrice">New Price:</label>
                <input type="text" class="form-control" id="newPrice" placeholder="Enter New Price">
            </div>

            <!-- Quantity -->
            <div class="col-md-4 mb-3">
                <label for="quantity">Quantity:</label>
                <input type="text" class="form-control" id="quantity" placeholder="Enter Quantity">
            </div>

            <!-- Units -->
            <div class="col-md-4 mb-3">
                <label for="units">Units:</label>
                <input type="text" class="form-control" id="units" placeholder="Enter Units">
            </div>

            <!-- Image 1 -->
            <div class="col-md-4 mb-3">
                <label for="img1">Image 1:</label>
                <input type="file" class="form-control-file" id="img1">
            </div>

            <!-- Image 2 -->
            <div class="col-md-4 mb-3">
                <label for="img2">Image 2:</label>
                <input type="file" class="form-control-file" id="img2">
            </div>

            <!-- Image 3 -->
            <div class="col-md-4 mb-3">
                <label for="img3">Image 3:</label>
                <input type="file" class="form-control-file" id="img3">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
