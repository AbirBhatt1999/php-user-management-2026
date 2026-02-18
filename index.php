<?php
	include('header.php');
?>

	<section id="slider">
		<div>
			<div class="owl-carousel">
				<div class="slidImg">
					<img src="assets/images/pexels-chanwalrus-958545.jpg">
					<div class="slidertext">
						<h4>Welcome</h4>
						<p>A world of culinery delights and indulge in an unforgettable dining experience.Explore our menu and make a reservation today.</p>
						<div class="subdiv">
							<a class="a1">OUR MENU</a>
							<a class="a2">BOOK A TABLE</a>
						</div>
					</div>
				</div>
				<div class="slidImg">
					<img src="assets/images/img4.jpg">
					<div class="slidertext">
						<h4>Welcome</h4>
						<p>A world of culinery delights and indulge in an unforgettable dining experience.Explore our menu and make a reservation today.</p>
						<div class="subdiv">
							<a class="a1">OUR MENU</a>
							<a class="a2">BOOK A TABLE</a>
						</div>
					</div>
				</div>
				<div class="slidImg">
					<img src="assets/images/image-asset.jpeg">
					<div class="slidertext">
						<h4>Welcome</h4>
						<p>A world of culinery delights and indulge in an unforgettable dining experience.Explore our menu and make a reservation today.</p>
						<div class="subdiv">
							<a class="a1">OUR MENU</a>
							<a class="a2">BOOK A TABLE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="how-it-works">
		<div class="container">
			<h3 class="mb50">How It Works</h3>
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="hiw_cards">
						<div class="hiw_cardtop"><img src="assets/images/explore.jpg"></div>
						<div class="hiw_cardbott">
							<h5><b> Explore Our Website</b></h5>
							<p>Discover the flavours,ambiance and experiences that make us special.From handcrafted dishes to memorable moments,there's something for everyone to explore.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="hiw_cards">
						<div class="hiw_cardtop"><img src="assets/images/web-signup.jpg"></div>
						<div class="hiw_cardbott">
							<h5><b>Sign Up</b></h5>
							<p>Sign up to enjoy a better dining experience-whether you are booking a table,ordering online.Its quick and easy.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="hiw_cards">
						<div class="hiw_cardtop"><img src="assets/images/listing.jpg"></div>
						<div class="hiw_cardbott">
							<h5><b>Manage Your Details</b></h5>
							<p>Keep your information up to date to ensure a smooth andpersonalize experience.From here you can update our name,email,address,phone number and other profile details.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="hiw_cards">
						<div class="hiw_cardtop"><img src="assets/images/manage.png"></div>
						<div class="hiw_cardbott">
							<h5><b>Manage Your Account</b></h5>
							<p>Manege your account to enjoy a more personaized dining experience. Keeping your informationcurrent helps us to serve you better-whether ou are placing an order or making reservation.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="back-img">
		<div class="back-img">
			<div class="back-img-content">
				<h5><b>Yummy
				</b></h5>
				<p>welcome to YUMMY,where flavour meets comfort in the heart of the city.We offer a fresh twist on classic comfort food,using locallysourced ingredients and bold,globally inspired flavours. Whether you are craving a cozy runch,a lively dinner or handcrafted cocktails with friends,our inviting atmosphereand attractive service make every visit special.We believe great food brings people together-join us and taste the difference.</p>
			</div>
		</div>
	</section>

	<section id="about-us">
		<div class="container">
			<h2>About Us</h2>
			<div class="row">
				<div class="col-md-6">
					<p>At Yummy, we believe every dish tells a story.Founded in 2000, our ourney began with a passion for Italian food and a desire to bring authentic flavours to Kolkata. what started as a family kitchen has blossomed into a beloved dining destination <br><br>
					Our mission is to serve food that nourishes both the body and the soul.We are committed to local farmers using organic ingredients and creating a dining experience that feels like home.Whether you are here for a quick bite or a specialcelerations,we strive to makeevery meal memorable</p>
				</div>
				<div class="col-md-6">
					<img class="about-img" src="assets/images/img5.jpg">
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".owl-carousel").owlCarousel({
				loop: true,
				nav: true,
				doots: true,
				responsive:{
			        0:{
			            items:1
			        }
			    }
			});
		});
	</script>

<?php
	include('footer.php');
?>