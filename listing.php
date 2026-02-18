 <?php
	include('header.php');

	$sql = "SELECT * FROM pt_user ORDER BY id DESC";
	$result = $conn->query($sql);

	$success_msg = '';
	$error_msg = '';

  // while($value = $result->fetch_assoc()) {

  // }
  //     $key++;
  // exit();
  // $value = $result->fetch_assoc();
  // if ($result->num_rows > 0) {
  //   $key = 0;
  // }
?>
<div class="container-fluid" style="min-height: 100vh;">
	<h3 class="listing-h3">User Details</h3>
	<div class="table-responsive">
	  <table class="table table-hover">
	  <thead class="thead-light">
	    <tr>
	      <th scope="col">SL NO.</th>
	      <th scope="col">Name</th>
	      <th scope="col">Mobile No</th>
	      <th scope="col">Email Id</th>
	      <th scope="col">Gender</th>
	      <th scope="col">Date of Birth</th>
	      <th scope="col">Subject</th>
	      <th scope="col">Address</th>
	      <th scope="col">State</th>
	      <th scope="col">City</th>
	      <th scope="col">Postal Code</th>
	      <th scope="col">Country</th>
	      <th scope="col">Profile Picture</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php
	  		$key = 0;
	  		while($value = $result->fetch_assoc()) {
	  			$key++;
	  	?>
	    <tr id="row_<?=$value['id'];?>">
	      <th scope="row"><?=$key;?></th>
	      <td><?=$value['first_name'] . ' ' . $value['last_name'];?></td>
	      <td><?=$value['phone'];?></td>
	      <td><?=$value['email'];?></td>
	      <td><?=ucfirst($value['gender']);?></td>
	      <td><?=date('d-m-Y', strtotime($value['dob']));?></td>
	      <td><?=$value['subject'];?></td>
	      <td><?=$value['address'];?></td>
	      <td><?=$value['state'];?></td>
	      <td><?=$value['city'];?></td>
	      <td><?=$value['zip'];?></td>
	      <td><?=$value['country'];?></td>
	      <td><?=$value['profile_pic'];?></td>
	      <!-- <td><?=$value['status'];?></td> -->
	      <td class="text-center">
	      	<div class="switch_dv">
	      		<?php
	      			$activeA = '';
	      			$activeB = '';
	      			if($value['status'] == '0') {
	      				$activeB = 'active';
	      			}
	      			else{
	      				$activeA = 'active';
	      			}
	      		?>
	      		<div class="switch_btn switchA switchA_<?=$value['id'];?> <?=$activeA;?>" onclick="changeStatus('1', <?=$value['id'];?>)">Active</div>
	      		<div class="switch_btn switchB switchB_<?=$value['id'];?> <?=$activeB;?>" onclick="changeStatus('0', <?=$value['id'];?>)">Inactive</div>
	      	</div>
	      	<button onclick="editUser(<?=$value['id'];?>)" type="button" class="btn btn-info" style="margin-top: 15px;">Edit</button>
	      	<button onclick="deleteUser(<?=$value['id'];?>)" type="button" class="btn btn-danger" style="margin-top: 15px;">Delete</button>
	      </td>
	    </tr>
	    <?php
	  		}
	  	?>
	  </tbody>
	</table>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="editUserTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editUserLongTitle">Signup Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" method="POST" action="" novalidate>
			<?php
				if($success_msg !='') {
			?>
			<div class="alert alert-success" role="alert">
			  <?=$success_msg;?>
			</div>
			<?php
				}
				if($error_msg !='') {
			?>
			<div class="alert alert-danger" role="alert">
			  <?=$error_msg;?>
			</div>
			<?php
				}
			?>
			<div class="edit_form">
				<!-- <h1 class="text-center">Signup Form</h1> -->
				<div class="form-group">
					<label for="first_name">First Name</label>
					<input name="first_name" type="text" class="form-control" id="first_name" aria-describedby="emailHelp" placeholder="Enter first name" required>
				</div>
				<div class="form-group">
					<label for="last_name">Last Name</label>
					<input name="last_name" type="test" class="form-control" id="last_name" placeholder="Enter last name" required>
				</div>
				<div class="form-group">
					<label for="mobile_no">Mobile No</label>
					<input name="mobile_no" type="text" class="form-control" id="mobile_no" aria-describedby="emailHelp" placeholder="Enter mobile no" required>
				</div>
				<div class="form-group">
					<label for="email_id">Email Id</label>
					<input name="email_id" type="email" class="form-control" id="email_id" aria-describedby="emailHelp" placeholder="Enter email" required>
				</div>
				<div class="form-group">
		  			<div class="input-group mb-2">
		    			<label for="password" style="width:100%">Password</label>
		    			<input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
		    			<div class="input-group-prepend">
		      				<div class="input-group-text" onclick="changePass()"><i class="fa fa-eye pass_toggle" aria-hidden="true"></i></div>
		    			</div>
		  			</div>
					 </div>

				<div class="form-group">
					<label for="confirm_password">Confirm Password</label>
					<input name="confirm_password" type="password" class="form-control" id="confirm_password" aria-describedby="emailHelp" placeholder="Re-enter password" required>
				</div>
				<div class="form-group">
					<label for="" style="width:100%">Gender</label>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
						<label class="form-check-label" for="inlineRadio1">Male</label>
				</div>
				<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
						<label class="form-check-label" for="inlineRadio2">Female</label>
				</div>
				<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Others">
						<label class="form-check-label" for="inlineRadio2">Others</label>
				</div>
				</div>
				<div class="form-group">
					<label for="dob">Date Of Birth</label>
					<div class="form-group mb-4">
		      			<div class="datepicker date input-group">
		        			<input name="date_of_birth" type="text" placeholder="Choose Date" class="form-control" id="dob" required>
		        			<div class="input-group-append">
		          				<span class="input-group-text"><i class="fa fa-calendar"></i></span>
		        			</div>
		      			</div>
		    		</div>
				</div>
				<div class="form-group">
					<label for="" style="width: 100%">Subject</label>
					<div class="form-check form-check-inline">
						<input name="sub_physics" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Physics">
						<label class="form-check-label" for="inlineCheckbox1">Physics</label>
				</div>
				<div class="form-check form-check-inline">
						<input name="sub_chemistry" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Chemistry">
						<label class="form-check-label" for="inlineCheckbox2">Chemistry</label>
				</div>
				<div class="form-check form-check-inline">
						<input name="sub_math" class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Math">
						<label class="form-check-label" for="inlineCheckbox3">Math</label>
				</div>
				</div>
				<div class="form-group">
					<div class="mb-3">
						<label for="address" class="form-label">Address</label>
						<textarea name="address" class="form-control" id="address" rows="3" required></textarea>
				</div>
				<div class="form-group">
		  			<label for="state">State</label>
		  			<input name="state" type="text" class="form-control" id="state" aria-describedby="emailHelp" placeholder="Enter state" required>
					</div>
					<div class="form-group">
		  			<label for="city">City</label>
		  			<input name="city" type="text" class="form-control" id="city" aria-describedby="emailHelp" placeholder="Enter city" required>
					</div>
					<div class="form-group">
		  			<label for="zip">Postal Code</label>
		  			<input name="postal_code" type="text" class="form-control" id="zip" aria-describedby="emailHelp" placeholder="Enter postal code" required>
					</div>
				</div>
				<div class="form-group">
					<label for="country">Country</label>
					<select name="country" class="form-control" required id="country">
						<option value="">select</option>
						<option value="India">India</option>
						<option value="USA">USA</option>
						<option value="Canada">Canada</option>
						<option value="Belgium">Belgium</option>
				</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Profile Picture</label>
					<div class="custom-file">
						<input name="profile_picture" type="file" class="custom-file-input" id="customFile" required>
						<label class="custom-file-label" for="customFile">Choose file</label>
				</div>
				</div>
				<div class="d-flex justify-content-center">
					<button name="submit_form" type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<script>
	function changeStatus(e, i) {
		if(e == '1') {
			$('.switchA_'+i).addClass('active');
			$('.switchB_'+i).removeClass('active');
		}
		if(e == '0') {
			$('.switchA_'+i).removeClass('active');
			$('.switchB_'+i).addClass('active');
		}

		$.ajax({
            type: "POST",
            url: 'ajax/common_functions.php',
            dataType: 'json',
            data: {id: i, status: e, page: 'statusChange'},
            beforeSend: function (data) {
            	// $('.loaderMain').show();
            },
            success: function (data) {
            	// $('.loaderMain').hide();
				// console.log(data);
            }
        });
	}
	function editUser(i) {
		$.ajax({
            type: "POST",
            url: 'ajax/common_functions.php',
            dataType: 'json',
            data: {id: i, page: 'editUser'},
            beforeSend: function (data) {
            	// $('.loaderMain').show();
            },
            success: function (data) {
            	// $('.loaderMain').hide();
				// console.log(data);

				$('#first_name').val(data.userDetails.first_name);
				$('#last_name').val(data.userDetails.last_name);
				$('#mobile_no').val(data.userDetails.phone);
				$('#email_id').val(data.userDetails.email);

				$('#editUser').modal('show');
            }
        });
	}
	function deleteUser(i) {
		$.ajax({
            type: "POST",
            url: 'ajax/common_functions.php',
            dataType: 'json',
            data: {id: i, page: 'deleteUser'},
            beforeSend: function (data) {
            	// $('.loaderMain').show();
            },
            success: function  (data) {
            	// $('.loaderMain').hide();
				console.log(data);
				$('#row_'+i).remove();

            }
        });
	}

	function changePass(e) {
		if($('.pass_toggle').hasClass('fa-eye')) {
			$('.pass_toggle').removeClass('fa-eye');
			$('.pass_toggle').addClass('fa-eye-slash');
			$('#password').attr('type', 'text');
		}
		else{
			$('.pass_toggle').removeClass('fa-eye-slash');
			$('.pass_toggle').addClass('fa-eye');
			$('#password').attr('type', 'password');
		}
	}
	$(function () {
	  $('.datepicker').datepicker({
	    language: "es",
	    autoclose: true,
	    format: "yyyy-mm-dd"
	  });
	});
	(function() {
	  'use strict';
	  window.addEventListener('load', function() {
	    // Fetch all the forms we want to apply custom Bootstrap validation styles to
	    var forms = document.getElementsByClassName('needs-validation');
	    // Loop over them and prevent submission
	    var validation = Array.prototype.filter.call(forms, function(form) {
	      form.addEventListener('submit', function(event) {
	        if (form.checkValidity() === false) {
	          event.preventDefault();
	          event.stopPropagation();
	        }
	        form.classList.add('was-validated');
	      }, false);
	    });
	  }, false);
	})();
</script>

<?php
	include('footer.php');
?>