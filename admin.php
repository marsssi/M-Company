<?php include "header.php"; ?>


<div class="container">
     <div class="row">
        <div class="col-md-5 titulli_majtas">
            <h2>List of Employees</h2>
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-2 butoni_djathtas">
            <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-target="#exampleModal">Add Employee</button>
        </div>
     </div>
 </div>



 <!-- MODAL FOR ADDING A EMPLOYEE -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add an employee</h5>
        <button type="submit" name="submit" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="add.php" method="POST" id="forma_shtimit">
      <div class="modal-body">
          <label for="firstname">Firstname</label>
        <input class="form-control" type="text" name="fname" id="brand" value="" />
        <label for="firstname">Lastname</label>
        <input class="form-control" type="text" name="lname" id="type" value="" />
        <label for="firstname">E-mail</label>
        <input class="form-control" type="text" name="email" id="production_year" value="" />
        <label for="firstname">Password</label>
        <input class="form-control" type="text" name="pass" id="engine" value="" />
        <label for="firstname">Role</label>
        <input class="form-control" type="text" name="role" id="fuel" value="" />
        <label for="firstname">Salary</label>
        <input class="form-control" type="text" name="salary" id="mykm" value="" />
        <label for="firstname">Status</label>
        <input class="form-control" type="text" name="status" id="price" value="" />
        <label for="firstname">Job Started</label>
        <input class="form-control" type="text" name="job_started" id="price" value="" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" id="butsave" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>




<!--  MODAL FOR ADDING A EMPLOYEE --> 
<div class="modal" id="updateModal">
	  	<div class="modal-dialog">
		    <div class="modal-content">
		      	<div class="modal-header">
			        <h4 class="modal-title">Update Employee</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      	</div>
		      	<div class="modal-body">
		        	<form action="update.php"  method="POST" id="editForm">
              <div class="form-group">
						    <label for="id">Id</label>
						    <input class="form-control updatebrand" type="text" name="id">
					  	</div>

				    	<div class="form-group">
						    <label for="email">Employee Firstname</label>
						    <input class="form-control updatebrand" type="text" name="fname">
					  	</div>
					  	<div class="form-group">
						    <label for="first_name">Employee Lastname</label>
						    <input class="form-control updatetype" type="text" name="lname">
					  	</div>
					  	<div class="form-group">
						    <label for="last_name">Employee E-mail</label>
						    <input class="form-control update_production_year" type="text" name="email">
					  	</div>
					  	<div class="form-group">
						    <label for="address">Employee Password</label>
						    <input class="form-control update_engine" type="text" name="pass" >
                        </div>
              <div class="form-group">
						    <label for="address">Employee Role</label>
						    <input class="form-control update_price" type="text" name="role" >
					  	</div>
                          <div class="form-group">
						    <label for="address">Employee Salary</label>
						    <input class="form-control update_engine" type="text" name="salary" >
                        </div>
                        <div class="form-group">
						    <label for="address">Employee Status</label>
						    <input class="form-control update_engine" type="text" name="status" >
                        </div>
                        <div class="form-group">
						    <label for="address">Job Started</label>
						    <input class="form-control update_engine" type="text" name="job_started" >
                        </div>
                        <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
					  	<button type="submit" name="submit" class="btn btn-primary float-right" data-id="<?php echo $row['id'];?>" id="btnUpdateSubmit">Update</button>
					  
					</form>
		      	</div>
		    </div>
	  	</div>
</div>




<!-- TABLE OF EMPLOYEES -->
 <div class="container">
   <div class="row">
       <div class="col-md-12">
               
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>E-mail</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Salary</th>
                        <th>Status</th>
                        <th>Job Started</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    include 'db.php';



// SHOWING ALL EMPLOYEES THAT HAVE NOT THE STATUS FIRED
 $sql ="SELECT * FROM employee WHERE status<>'fired';";
 $result = mysqli_query($con,$sql);
 $resultCheck = mysqli_num_rows($result);

 if($resultCheck > 0){
   while($row= mysqli_fetch_assoc($result)){

     echo "<tr> <td>".$row['id']."</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td>
      <td>".$row['email']."</td> <td>".$row['password']."</td> <td>".$row['role']."</td><td>".$row['salary']."</td>
      <td>".$row['status']."</td><td>".$row['date']."</td> <td> <button class='btn btn-info' data-toggle='modal' data-target='#updateModal' >Update</button> </td></tr>";

   }
 }

?>
</table> </div></div></div></div>





<?php include "footer.php"; ?>