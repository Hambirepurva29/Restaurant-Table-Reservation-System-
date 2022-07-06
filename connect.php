<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmsmini";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

        $reserve = $_POST['reserve'];
        $date_time = $_POST['date_time'];
        //$time_ = $_POST['time_']+':';
        
        //$br = explode('-',$date_time);
        // echo $date_time;
        // echo $br[0], $br[1] , $br[2];



        $sql01 = "INSERT INTO reservation (reserve, date_time) VALUES ('$reserve','$date_time')";
        echo "successfully" ;

if ($conn->query($sql01) === TRUE) 
{
  echo "New record created successfully" ;
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:http://localhost/dbms/index.html");
$conn->close();
?>