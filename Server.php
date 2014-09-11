<?php
$con=mysqli_connect("localhost","root","root","somethingdb");
if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$username = $_POST['username'];
$password = $_POST['password'];
$result = mysqli_query($con,"SELECT * FROM table_name where 
username='$username' and password='$password'");
$data = 'Allow';
if (mysqli_num_rows ($result) != 0){
	echo $data;
}
mysqli_close($con);
?>