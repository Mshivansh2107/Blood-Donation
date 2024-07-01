<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Employee Management</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Employee List</h5>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Employee Name 1
                        <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Employee Name 2
                        <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                    </li>
                    <!-- Add more employees dynamically -->
                </ul>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional, if you need JS functionality) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>
