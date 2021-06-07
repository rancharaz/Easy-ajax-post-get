<?php

$servername = "localhost";
$username = "root";
$pswd = "";
$db = "ajaxform";

$conn = new mysqli($servername, $username, $pswd, $db);

$sql = "SELECT  fname, fphone, fmail FROM atest";
$result = $conn->query($sql);

if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
        
        echo "Name:" . $row['fname'] . "<br>" . "Phone num :" . $row['fphone'] . "<br>" . "Email:" . $row['fmail'] . "<br>";
        
    }

 

}else{
    echo "0 results";
}
 
 
$conn->close();