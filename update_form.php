  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Student Admission Form</title>
  <style>
    /* Body background and center form */
    body {
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      min-height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      gap: 120px;
    }

    /* Form container */
    .form-container {
      background: lightblue;
      border-radius: 20px;
      padding: 40px 30px;
      width: 100%;
      max-width: 600px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      color: #333;
    }

    /* Title */
    .form-title {
      text-align: center;
      margin-bottom: 30px;
      font-weight: 700;
      font-size: 28px;
      color: #0d6efd;
    }

    /* Labels */
    label {
      display: block;
      margin-bottom: 6px;
      color: #444;
      font-weight: 600;
    }

    /* Inputs */
    input[type="text"],
    input[type="date"],
    input[type="number"] {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #ced4da;
      border-radius: 5px;
      font-size: 16px;
      color: #495057;
      background: #f8f9fa;
      box-sizing: border-box;
      font-weight: 500;
      margin-bottom: 20px;
      transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="date"]:focus,
    input[type="number"]:focus {
      outline: none;
      border-color: #0d6efd;
      background: #fff;
    }

    /* Gender radio buttons container */
    .gender-group {
      margin-bottom: 25px;
    }

    /* Inline radio buttons */
    .radio-inline {
      display: inline-flex;
      align-items: center;
      margin-right: 20px;
      cursor: pointer;
      font-weight: 600;
      color: #444;
      user-select: none;
    }

    .radio-inline input[type="radio"] {
      margin-right: 6px;
      cursor: pointer;
    }

    /* Submit button */
    button[type="submit"] {
      width: 100%;
      padding: 14px 0;
      background-color: #0d6efd;
      color: white;
      font-weight: 700;
      font-size: 18px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #0b5ed7;
    }

    /* Responsive: Two columns for first & last name */
    .row {
      display: flex;
      gap: 20px;
      margin-bottom: 20px;
    }

    .col-half {
      flex: 1;
    }

    @media (max-width: 480px) {
      .row {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

    <?php
      include 'connection.php';

      $std_id = $_GET["id"];

      $sql = "SELECT * FROM admission where STUDENT_ID = '$std_id'";
      $result = mysqli_query($con,$sql);

      $row = mysqli_fetch_assoc($result);






    
    ?>
  <div class="form-container">
    <h3 class="form-title">🎓 Student Edit Form</h3>
    <form method="post" action="data_transfer.php">
      <label for="studentId">Student ID</label>
      <input type="text"value="<?php echo $row["STUDENT_ID"]; ?>"  id="studentId" placeholder="Enter Student ID"  name="sid" />

      <div class="row">
        <div class="col-half">
          <label for="firstName">First Name</label>
          <input type="text" value="<?php echo $row["FIRST_NAME"]; ?>"  id="firstName" placeholder="Enter First Name" name="fname" />
        </div>
        <div class="col-half">
          <label for="lastName">Last Name</label>
          <input type="text"value="<?php echo $row["LAST_NAME"]; ?>"  id="lastName" placeholder="Enter Last Name" name="lname" />
        </div>
      </div>

      <label for="admissionDate">Date of Admission</label>
      <input type="date" value="<?php echo $row["DATE_OF_ADMISSION"]; ?>"  id="admissionDate" name="a_date" />

      <div class="gender-group">
        <label>Gender</label>


        <label class="radio-inline"><input type="radio" name="gender" value="male"
        <?php echo $row['gender'] == "male" ? "checked" : "";?> 
        /> Male</label>
        <label class="radio-inline"><input type="radio" name="gender" value="female" /> Female</label>
        <label class="radio-inline"><input type="radio" name="gender" value="other" /> Other</label>
      </div>

      <label for="fees">Admission Fees</label>
      <input type="number" value="<?php echo $row["ADMISSION_FEES"]; ?>" id="fees" placeholder="Enter Admission Fees" name="fees" />

      <button type="submit">UPDATE BUTTOn</button>
    </form>
  </div>
    <?php
      include 'buttons.php';
      
    ?>
   

</body>
</html>
