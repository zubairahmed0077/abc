<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 90%;
            border: 2px solid black;
            background-color:grey;
            

        }
        th{
             background-color:lightgreen;            
        }
        td{
            text-align:center;
            border: 2px solid black;
            color:white;
        }
        h1{
            text-align:center;
        }
    </style>
</head>
<body>

<?php

include 'connection.php';

$std_id = $_POST["student_id"];

$sql = "SELECT * from admission where STUDENT_ID = '$std_id'";

$result = mysqli_query($con,$sql);

if( mysqli_num_rows($result) > 0 )
{
    echo "<h1>DETAIL OF STUDENTS</h1>";
    echo "<table align ='center'><tr><th>STUDENT ID</th><th>FIRST NAME</th><th>LAST NAME</th><th>DATE OF ADMISSION</th><th>GENDER</th><th>ADMISSION FEE</th>";

    while($row = mysqli_fetch_assoc($result))
    {

        echo "<tr><td>".$row["STUDENT_ID"]."</td>".
             "<td>".$row["FIRST_NAME"]."</td>".
              "<td>".$row["LAST_NAME"]."</td>".
               "<td>".$row["DATE_OF_ADMISSION"]."</td>".
                "<td>".$row["GENDER"]."</td>".
                 "<td>".$row["ADMISSION_FEES"]."</td>        
             
        
        
        </tr>";

    }

    echo "</table>";



}

else {

    echo "<h2> NOT FOUND DATA </h2>";
}


include 'buttons.php';



?>

    
</body>
</html>