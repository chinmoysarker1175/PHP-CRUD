<?php
include 'connection.php';

$id = $name = $email = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!isset($_GET["id"])) {
        header("Location: index.php");
        exit;
    }

    $id = $_GET["id"];
    $result = $conn->query("SELECT * FROM crud1 WHERE id=$id");

    if (!$result || $result->num_rows == 0) {
        header("Location: index.php");
        exit;
    }

    $row = $result->fetch_assoc();
    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
} else {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $conn->query("UPDATE crud1 SET name='$name', email='$email', phone='$phone' WHERE id=$id");
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update Member</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

    .form-label {
      font-weight: 500;
    }

    .btn-success, .btn-secondary {
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
        <div class="card-header bg-warning text-white text-center">
          <h4>Update Member</h4>
        </div>
        <div class="card-body">
          <form method="post">
            <input type="hidden" name="id" value="<?= $id ?>" />
            <div class="form-group mb-3">
              <label class="form-label">Name</label>
              <input type="text" name="name" value="<?= $name ?>" class="form-control" required />
            </div>
            <div class="form-group mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" value="<?= $email ?>" class="form-control" required />
            </div>
            <div class="form-group mb-4">
              <label class="form-label">Phone</label>
              <input type="text" name="phone" value="<?= $phone ?>" class="form-control" required />
            </div>
            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-success">Update</button>
              <a href="index.php" class="btn btn-secondary">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
