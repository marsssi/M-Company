<?php include "header.php"; ?>




<!-- ADMIN LOG IN FORM -->

<div class="bodyForm">

<form method="POST">
  <div class="mb-3">
    <label for="exampleInputText1" class="form-label">Admin e-mail</label>
    <input type="text" name="auser" class="form-control"  >

  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="apass"class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" name="save" class="btn btn-success">Log in</button>
</form>
</div>


<!-- CHECKING USERNAME AND PASSWORD -->
<!-- 
NOTE: * VALID USERNAME : admin
        VALID PASSWORD : admin -->
<?php 
include 'db.php';
if(isset($_POST['save']))
{	 
	 $username = $_POST['auser'];
	 $password = $_POST['apass'];
	
$sql ="SELECT * FROM admin;";
$result = mysqli_query($con,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while($row= mysqli_fetch_assoc($result)){
    if($row['email']==$username and $row['password']==$password){
      header('Location: admin.php ');
    }else{
      echo "Something went wrong";
    }
    
  }
}
}
?>


<?php include "footer.php"; ?>



