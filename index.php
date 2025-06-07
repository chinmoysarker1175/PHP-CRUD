<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #eef2f7;
    }

    .navbar {
      background-color: #343a40;
    }

    .navbar .navbar-brand {
      color: #fff;
      font-weight: bold;
    }

    .navbar .form-control {
      width: 250px;
    }

    .navbar .btn {
      margin-left: 10px;
    }

    .content-box {
      background: #fff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .table th, .table td {
      vertical-align: middle;
    }

    .table-hover tbody tr:hover {
      background-color: #f5f5f5;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    .btn-success, .btn-danger {
      margin-right: 5px;
    }

    .add-btn-wrapper {
      text-align: end;
      margin-bottom: 15px;
    }
  </style>

  <title> PHP CRUD_1175 </title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid justify-content-between">
      <a class="navbar-brand">PHP CRUD Lab Report 1175</a>
      <form class="d-flex">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div class="container my-5">
    <div class="content-box">
      <div class="add-btn-wrapper">
        <a class="btn btn-primary" href="create.php">➕ Add New</a>
      </div>

      <table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Joining Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'connection.php';
            $result = $conn->query("SELECT * FROM crud1");
            if (!$result) die('Query failed!');
            while ($row = $result->fetch_assoc()) {
              echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['join_date']}</td>
                <td>
                  <a class='btn btn-success btn-sm' href='edit.php?id={$row['id']}'>Edit</a>
                  <a class='btn btn-danger btn-sm' href='delete.php?id={$row['id']}'>Delete</a>
                </td>
              </tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
