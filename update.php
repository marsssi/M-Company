<?php 
include 'db.php';



// UPDATING AN EMPLOYEE
if(isset($_POST['submit']))
{	 
    $id = $_POST['id'];
	 $first_name = $_POST['fname'];
	 $last_name = $_POST['lname'];
	 $username = $_POST['email'];
	 $password = $_POST['pass'];
     $role = $_POST['role'];
	 $salary = $_POST['salary'];
	 $status = $_POST['status'];
	 $job_started = $_POST['job_started'];

	 $sql = "UPDATE employee SET firstname = ' $first_name', lastname = '$last_name', email = '$username', 
     password = ' $password', role = '$role', salary = '$salary', status = '$status', date = '$job_started' WHERE id = '$id' ";
	 
     if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $con->error;
      }
      $con->close();
    }

?>