<?php
	include('header.php');
?>

	<div class="login-img">
		<img src="assets/images/premium_photo-1661432769134-758550b8fedb.jpg">
		<div class="login-box">
      <h3>Log In</h3>
			<form class="needs-validation" novalidate>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" required>
			  </div>
			  <div class="d-flex justify-content-center">
				  <button type="submit" class="btn" style="background-color: #ec8336;">Submit</button>
				</div>
			</form>
		</div>
	</div>

<?php
	include('footer.php');
?>