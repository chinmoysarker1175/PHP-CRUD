<?php
  include 'connection.php';
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $conn->query("INSERT INTO crud1 (name, email, phone, join_date) VALUES ('$name', '$email', '$phone', NOW())");
    header('Location: index.php');
    exit();
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create Member</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #eef2f7;
    }

    .navbar {
      background-color: #343a40;
    }

    .navbar-brand {
      color: #fff;
      font-weight: bold;
    }

    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }

    .btn-success {
      min-width: 100px;
    }

    .btn-secondary {
      min-width: 100px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-dark px-3">
    <a class="navbar-brand" href="index.php">PHP CRUD LAB REPORT 1175</a>
  </nav>

  <div class="container my-5">
    <div class="col-md-6 mx-auto">
      <div class="card">
        <div class="card-header bg-primary text-white text-center">
          <h4>Create New Member</h4>
        </div>
        <div class="card-body">
          <form method="post">
            <div class="form-group mb-3">
              <label class="fw-bold">Name</label>
              <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group mb-3">
              <label class="fw-bold">Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group mb-4">
              <label class="fw-bold">Phone</label>
              <input type="text" name="phone" class="form-control" required>
            </div>
            <div class="d-flex justify-content-between">
              <button type="submit" name="submit" class="btn btn-success">Submit</button>
              <a href="index.php" class="btn btn-secondary">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
