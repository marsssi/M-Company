<?php 
include 'db.php';


// ADDING AN EMPLOYEE
if(isset($_POST['submit']))
{	 
	 $first_name = $_POST['fname'];
	 $last_name = $_POST['lname'];
	 $username = $_POST['email'];
	 $password = $_POST['pass'];
     $role = $_POST['role'];
	 $salary = $_POST['salary'];
	 $status = $_POST['status'];
	 $job_started = $_POST['job_started'];

	 $sql = "INSERT INTO employee(firstname,lastname,email,password,role,salary,status,date)
	 VALUES ('$first_name','$last_name','$username','$password','$role', ' $salary', '$status ', '$job_started' )";
	 
     if (mysqli_query($con, $sql)) {
		echo "New employee added successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}
?>