<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $username = $_POST['username'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $password = $_POST['password'];


  $conn = new mysqli('localhost', 'root','','test');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {          
    $stmt =$conn->prepare("insert into data(fname,lname,username,phone,email,dob,password) values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssisis",$fname,$lname, $username, $phone ,$email, $dob, $password);
    $stmt->execute();
    echo"Data Inserted Successfully";
    $stmt->close();
    $conn->close();
  }
?>