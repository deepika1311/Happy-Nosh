<?php
$firstName = $_POST['firstName'];
$emailId = $_POST['emailId'];
$Password = $_POST['Password'];

//Dtabase Connection
$conn = new mysqli('localhost','root','','happynosh');
if($conn->connect_error)
{
	die('Connection Failed : '.$conn->connect_error);
}
else
{
	$sql = "INSERT INTO registration (User_Name, Password, Email)
VALUES ('$firstName', '$Password','$emailId' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
	$conn->close();
}
?>