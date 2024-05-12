<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Invoice Form</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Invoice Form</h2>

    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="invoiceNumber">Invoice Number</label>
                <input type="text" class="form-control" id="invoiceNumber" placeholder="Enter Invoice Number">
            </div>
            <div class="form-group col-md-6">
                <label for="invoiceDate">Invoice Date</label>
                <input type="date" class="form-control" id="invoiceDate">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="customerName">Customer Name</label>
                <input type="text" class="form-control" id="customerName" placeholder="Enter Customer Name">
            </div>
            <div class="form-group col-md-6">
                <label for="dueDate">Due Date</label>
                <input type="date" class="form-control" id="dueDate">
            </div>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="3" placeholder="Enter Description"></textarea>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" placeholder="Enter Quantity">
            </div>
            <div class="form-group col-md-6">
                <label for="unitPrice">Unit Price</label>
                <input type="number" class="form-control" id="unitPrice" placeholder="Enter Unit Price">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit Invoice</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

