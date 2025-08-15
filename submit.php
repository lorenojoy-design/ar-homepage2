<?php
require 'db.php';

$fullname = $_POST['fullname'];
$contact = $_POST['contact'];
$school = $_POST['school'];
$visit_date = $_POST['visit_date'];
$visit_time = $_POST['visit_time'];
$purpose = $_POST['purpose'];

$dateCode = date("Ymd");
$randomCode = mt_rand(1000, 9999);
$unique_id = "VISIT-$dateCode-$randomCode";

// Save to DB
$sql = "INSERT INTO visitors (fullname, contact, school, visit_date, visit_time, purpose, unique_id)
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $fullname, $contact, $school, $visit_date, $visit_time, $purpose, $unique_id);
$stmt->execute();

$plugxr = "assets/plugxr.png"; 
$link = "https://p.plugxr.com/FodWPVk"; 

echo "<!DOCTYPE html>
<html>
<head>
  <meta charset='UTF-8'>
  <title>Success</title>
  <style>
    body { background: #0a3d2f; color: white; font-family: sans-serif; text-align: center; padding-top: 80px; }
    .card { background: #fff; color: #0a3d2f; padding: 30px; width: 400px; margin: auto; border-radius: 12px; }
    img { margin-top: 20px; width: 200px; }
    .btn {
      display: inline-block;
      padding: 12px 25px;
      background-color: #0a3d2f;
      color: white;
      font-size: 16px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s ease;
    }
    .btn:hover {
      background-color: #09735a;
    }
       /* Button Design */
    a.button {
      display: inline-block;
      margin-top: 40px;
      padding: 12px 25px;
      background-color: #ffffff;
      color: #0a3d2f;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
      transition: 0.3s;
    }

    a.button:hover {
      background-color: #f0f0f0;
      transform: translateY(-3px);
    }
  </style>
</head>


<body>
  <div class='card'>
    <h2>Thank you, $fullname!</h2>
    <p><strong>Visitor ID:</strong> $unique_id</p>
    <h3>AR Experience</h3>
    <img src='$plugxr' alt='AR Experience'>
    <div style='margin-top: 20px;'>
        <a href='$link' target='_blank' class='btn'>START</a>
    </div>
  </div>
  <a href='home.php' style='color:white; display:block; margin-top:20px;'>← Back to Homepage</a>
</body>
</html>";
?>
