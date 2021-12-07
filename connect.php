

<?php
$servername="localhost";
$full_name ="root";
$password ="";
$database_name="database 123"

$conn=mysqli_connect($servername,$full_name,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $Full_Name = $_POST['full_name'];
	
	 $Email = $_POST['email'];
	 $password = $_POST['password'];

	 $sql_query = "INSERT INTO list (Full_Name,email,password)
	 VALUES ('$full_name','$email','$password')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>