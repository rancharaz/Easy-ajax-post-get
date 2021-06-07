<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // enter your own credentials
 $servername = "localhost";
 $username = "root";
 $pswd = "";
 $db = "ajaxform";

 /* database connection */
 $conn = new mysqli($servername, $username, $pswd, $db);

 $sname = $conn->real_escape_string($_POST['name']);
 $sphone = $conn->real_escape_string($_POST['phone']);
 $semail = $conn->real_escape_string($_POST['email']);
 
/* sql scripts */
$sql = "INSERT INTO atest(fname, fphone, fmail)VALUES('$sname', '$sphone','$semail')";

if ($conn->query($sql) === TRUE) {
    echo "All the fields has been posted!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  /* connection close */
  $conn->close();
  
}