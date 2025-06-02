<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student Actions</title>
  <style>
    body {
      background: linear-gradient(to right, #e0eafc, #cfdef3);
      /* min-height: 100vh;
      display: flex;
      justify-content: center; */
      align-items: center;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .btn-container {
      display: flex;
      flex-direction: column;
      gap: 20px;
      background: #ffffff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .btn {
      display: inline-block;
      text-align: center;
      text-decoration: none;
      font-size: 18px;
      padding: 14px;
      font-weight: 600;
      border-radius: 10px;
      transition: background-color 0.3s ease;
    }

    .btn-primary {
      background-color: #0d6efd;
      color: white;
    }

    .btn-primary:hover {
      background-color: #0b5ed7;
    }

    .btn-info {
      background-color: #0dcaf0;
      color: white;
    }

    .btn-info:hover {
      background-color: #31d2f2;
    }

    .btn-danger {
      background-color: #dc3545;
      color: white;
    }

    .btn-danger:hover {
      background-color: #bb2d3b;
    }

    .btn-warning {
      background-color: #ffc107;
      color: white;
    }

    .btn-warning:hover {
      background-color: #e0a800;
    }

    .text-white {
      color: white !important;
    }
  </style>
</head>
<body>
  <div class="btn-container">
    <a href="add_form.php" class="btn btn-primary">➕ Add Record</a>
    <a href="data_view.php" class="btn btn-info">👁️ View Data</a>
    <a href="delete_form.php" class="btn btn-danger">❌ Delete Data</a>
    <a href="search_form.php" class="btn btn-warning">✏️ Search Data</a>
  </div>
</body>
</html>
