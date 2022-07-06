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
        $cus_firstname = $_POST['firstname'];
        $cus_middlename = $_POST['middlename'];
        $cus_lastname = $_POST['lastname'];
        $cus_areacode = $_POST['areacode'];
        $cus_contact = $_POST['telnum'];
        $cus_email = $_POST['emailid'];
        $reserve = $_POST['reserve'];
        $date_time = $_POST['date_time'];
        //$time_ = $_POST['time_']+':';
        
        //$br = explode('-',$date_time);
        // echo $date_time;
        // echo $br[0], $br[1] , $br[2];


        $sql = "INSERT INTO customer (cus_firstname, cus_middlename, cus_lastname, cus_areacode, cus_contact, cus_email) 
        VALUES ('$cus_firstname','$cus_middlename','$cus_lastname','$cus_areacode','$cus_contact','$cus_email')";

        $sql01 = "INSERT INTO reservation (reserve, date_time) VALUES ('$reserve','$date_time')";
        echo "successfully" ;

if ($sql01)
{
  echo"reservation successful";
}

if ($conn->query($sql) === TRUE) 
{
  echo "New record created successfully" ;
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:http://localhost/dbms/index.html");
$conn->close();
?>