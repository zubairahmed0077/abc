<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Search Student</title>
  <style>
    body {
      background: linear-gradient(to right, #f6d365, #fda085);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      font-family: Arial, sans-serif;
      gap:120px;
    }

    .card {
      width: 100%;
      max-width: 400px;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      padding: 32px;
      box-sizing: border-box;
    }

    h3 {
      text-align: center;
      margin-bottom: 24px;
      font-size: 24px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      color: #333;
    }

    input[type="text"] {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-sizing: border-box;
      margin-bottom: 20px;
      transition: border-color 0.3s;
    }

    input[type="text"]:focus {
      outline: none;
      border-color: #0d6efd;
    }

    button {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      background-color: #0d6efd;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #0b5ed7;
    }
  </style>
</head>
<body>
  <div class="card">
    <h3>Search Student</h3>
    <form action="search_view.php" method="POST">
      <div>
        <label for="student_id">Enter Student ID</label>
        <input type="text" id="student_id" name="student_id" placeholder="e.g. ST1234" required />
      </div>
      <button type="submit">Search</button>
    </form>
  </div>

   <?php
  include 'buttons.php';
  ?>

</body>
</html>
