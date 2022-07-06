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
        $feed_firstname = $_POST['firstname'];
        $feed_lastname = $_POST['lastname'];
        $feed_areacode = $_POST['areacode'];
        $feed_telnum = $_POST['telnum'];
        $feed_emailid = $_POST['emailid'];
        $feed_feedback = $_POST['feedback'];
        

		
        $sql = "INSERT INTO feedback (feed_firstname, feed_lastname, feed_areacode, feed_telnum, feed_emailid,feed_feedback) 
        VALUES ('$feed_firstname','$feed_lastname','$feed_areacode','$feed_telnum','$feed_emailid','$feed_feedback')";
        
if ($conn->query($sql) === TRUE) 
{
  echo "New record created successfully" ;
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:http://localhost/dbms/contactus.html");
$conn->close();
?>