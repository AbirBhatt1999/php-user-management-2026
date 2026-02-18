<?php
	include('header.php');

	$success_msg = '';
	$error_msg = '';

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if(isset($_POST['submit_form'])) {
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$mobile_no = $_POST['mobile_no'];
			$email_id = $_POST['email_id'];
			$password = $_POST['password'];
			$gender = $_POST['gender'];
			$subject = '';
			if(isset($_POST['sub_physics'])) {
				if($subject == '') {
					$subject .= $_POST['sub_physics'];
				}
				else{
					$subject .= ','.$_POST['sub_physics'];
				}
			}
			if(isset($_POST['sub_chemistry'])) {
				if($subject == '') {
					$subject .= $_POST['sub_chemistry'];
				}
				else{
					$subject .= ','.$_POST['sub_chemistry'];
				}
			}
			if(isset($_POST['sub_math'])) {
				if($subject == '') {
					$subject .= $_POST['sub_math'];
				}
				else{
					$subject .= ','.$_POST['sub_math'];
				}
			}
			$date_of_birth = $_POST['date_of_birth'];
			$address = $_POST['address'];
			$state = $_POST['state'];
			$city = $_POST['city'];
			$postal_code = $_POST['postal_code'];
			$country = $_POST['country'];
			$profile_picture = $_POST['profile_picture'];

			$sql = "INSERT INTO pt_user (first_name,last_name,phone,email,password,gender,subject,address,state,city,zip,country,profile_pic,dob)
			VALUES ('".$first_name."', '".$last_name."', '".$mobile_no."', '".$email_id."', '".md5($password)."', '".$gender."', '".$subject."', '".$address."', '".$state."', '".$city."', '".$postal_code."', '".$country."', '".$profile_picture."', '".$date_of_birth."')";

			if ($conn->query($sql) === TRUE) {
				$success_msg = 'You have successfully registered!';
			} else {
				$error_msg = 'Sorry! Something went wrong, please try again. Error: ' . $sql . '<br>' . $conn->error;
			}
		}
	}
	
	// $success_msg = 'You have successfully registered!';
	// $error_msg = 'Sorry! Something went wrong, please try again.';
?>

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
		<div class="reg_form">
			<h1 class="text-center">Signup Form</h1>
			<div class="form-group">
					<label for="exampleInputEmail1">First Name</label>
					<input name="first_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter first name" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Last Name</label>
					<input name="last_name" type="test" class="form-control" id="exampleInputPassword1" placeholder="Enter last name" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Mobile No</label>
					<input name="mobile_no" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter mobile no" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email Id</label>
					<input name="email_id" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
				</div>
				<div class="form-group">
		  			<div class="input-group mb-2">
		    			<label for="exampleInputEmail1" style="width:100%">Password</label>
		    			<input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
		    			<div class="input-group-prepend">
		      				<div class="input-group-text" onclick="changePass()"><i class="fa fa-eye pass_toggle" aria-hidden="true"></i></div>
		    			</div>
		  			</div>
					 </div>

				<div class="form-group">
					<label for="exampleInputEmail1">Confirm Password</label>
					<input name="confirm_password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Re-enter password" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1" style="width:100%">Gender</label>
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
					<label for="exampleInputEmail1">Date Of Birth</label>
					<div class="form-group mb-4">
		      			<div class="datepicker date input-group">
		        			<input name="date_of_birth" type="text" placeholder="Choose Date" class="form-control" id="fecha1" required>
		        			<div class="input-group-append">
		          				<span class="input-group-text"><i class="fa fa-calendar"></i></span>
		        			</div>
		      			</div>
		    		</div>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1" style="width: 100%">Subject</label>
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
						<label for="exampleFormControlTextarea1" class="form-label">Address</label>
						<textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
				</div>
				<div class="form-group">
		  			<label for="exampleInputEmail1">State</label>
		  			<input name="state" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter state" required>
					</div>
					<div class="form-group">
		  			<label for="exampleInputEmail1">City</label>
		  			<input name="city" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter city" required>
					</div>
					<div class="form-group">
		  			<label for="exampleInputEmail1">Postal Code</label>
		  			<input name="postal_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter postal code" required>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Country</label>
					<select name="country" class="form-control" required>
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

<script type="text/javascript">
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

<style>

</style>

<?php
	include('footer.php');
?>