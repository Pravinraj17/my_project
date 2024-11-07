<?php
include './database/connect.php';

if (isset($_POST['submit'])) {

	$customer_name=$_POST['customer_name'];
	$customer_comments=$_POST['customer_comments'];

	$insert_query="insert into `review` (name , comments) values('$customer_name','$customer_comments') ";
	$result_review=mysqli_query($con,$insert_query);
	if ($result_review) {
		echo "<script>alert('Thank you for your review!!!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}

	
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr./database/net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<title>Veniteck Solutions</title>
</head>
<body class="bg-secondary bg-opacity-25">

	<div class="container-fluid bg-light">

		<div class="navbar navbar-expand-lg  bg-light">
			<!-- logo -->
			
			<div class="logo">
				<div class="navbar-brand">
					<img src="./images/logo.JPG">
				</div>
			</div>
			<!-- nav-items -->

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar"></button>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="navbar-nav">
					<li class="nav-item project"><a href="javascipt:void(0)" class="nav-link mx-lg-4 mx-sm-0">  Home </a></li>
					<li class="nav-item project"><a href="javascipt:void(0)" class="nav-link mx-lg-4 mx-sm-0">Our Services </a></li>
					<li class="nav-item project"><a href="javascipt:void(0)" class="nav-link mx-lg-4 mx-sm-0">Client Testinomials </a></li>
					<li class="nav-item project"><a href="javascipt:void(0)" class="nav-link mx-lg-4 mx-sm-0">Contact </a></li>

					<li class="nav-item">
						<button class="btn btn-primary btn-sm mx-lg-4 mx-sm-0"><a href="javascipt:void(0)" class="nav-link p-1 text-light">Get started</a></li>

							<div class="d-lg-block d-lg-none">
								<li class="nav-item project"><a href="javascipt:void(0)" class="nav-link">profile</a></li>
							</div>
							<div class="d-lg-block d-lg-none">
								<li class="nav-item project"><a href="javascipt:void(0)" class="nav-link">Logout</a></li>
							</div>
						</ul>
					</div>

					<ul class="navbar-nav">
						<div class="d-md-block d-none">
							<li class="nav-item mx-3 project1"><a href="javascipt:void(0)" class="nav-link"><i class="bi bi-person-circle fs-5"></i></a></li></div>
							<div class="d-md-block d-none">

								<li class="nav-item  mx-3 project1"><a href="javascipt:void(0)" class="nav-link"><i class="bi bi-box-arrow-right fs-5"></i></a></li></div>

							</ul>

						</div>
					</div>

					<!-- section 1 home-page -->

					<section id="home_page">
						<div class="container-fluid bg-light h-100 img-thumbnail mt-5">

							<div class="home_page mt-3">

								<h3 class="text-center">Welcome</h3>
								<h3 class="text-center">to</h3>
								<h3 class="text-center">Veniteck Solutions</h3>

								<div class="text-center mt-5">

									<p class="text-capitalize">At Veniteck Solutions, <br>we specialize in bringing your digital vision to life through innovative <br> <span class="fst-italic fw-semibold"> web design, robust web development, and results-driven digital marketing strategies.</span> </p>
								</div>
								<div class="text-center my-5">
									<p class="text-capitalize"> We aim to empower businesses with a dynamic online presence,<br>that captures their brand essence and engages their audience effectively.</p>
								</div>


							</div>
						</div>


					</section>


					<!-- our services -->
					<section id="our_services">
						<div class="container-fluid mt-5 bg-light">
							<h2 class="text-center ">Our Services</h2>
							<div class="row">
								<div class="col-md-4 img-thumbnail my-5">


									<h3 class="text-center mt-3">Web Design</h3>

									<p class="card-text text-center mt-5">Our design team crafts visually stunning, user-friendly websites tailored to your brand’s unique identity. <br> With a focus on responsive design and intuitive navigation, we ensure every visitor has an engaging experience across all devices.</p>
									<div class="text-center my-5">
										<a href="javascipt:void(0)" class="btn btn-primary card-link">View More</a>
									</div>
								</div>


								<div class="col-md-4 img-thumbnail my-5">



									<h3 class="text-center mt-3">Web Development</h3>

									<p class="text-center mt-5">From simple websites to complex applications, our developers build reliable, secure, and scalable web solutions. We leverage the latest technologies to deliver high-performance websites that meet today’s standards, ensuring your platform is not only functional but also future-ready.</p>
									<div class="text-center my-5">
										<a href="javascipt:void(0)" class="btn btn-primary">View More</a>
									</div>
								</div>

								<div class="col-md-4 img-thumbnail my-5">



									<h3 class="text-center mt-3">Digital Marketing</h3>

									<p class="text-center mt-5">Our digital marketing strategies are built to drive traffic, increase engagement, and convert leads into loyal customers. We offer a full range of services, including SEO, social media marketing, content creation, and paid advertising, all designed to maximize your online impact and help your business grow.</p>
									<div class="text-center my-4">
										<a href="javascipt:void(0)" class="btn btn-primary">View More</a>
									</div>
								</div>
							</div>

						</div>



					</div>
				</section>
				<!-- customer reviews -->

				<section id="reviews">

					<div class="container-fluid my-4 bg-light">

						<div class="row">
							<div class="col">
								<h4 class="text-center mt-3">Customer Reviews</h4>

								<div class="owl-carousel">
									<?php

									$select_query="select * from `review`";

									$result_select_review=mysqli_query($con,$select_query);
									if ($result_select_review) {

										while ($row=mysqli_fetch_assoc( $result_select_review)) {
											$name=$row['name'];
											$comments=$row['comments'];		

											echo" <div class='item'>
											<div class='text-center img-thumbnail mt-3'>
											<i class='bi bi-quote fs-1 text-muted'></i>
											<p class='text-muted mt-3 text-center'>$comments</p>
											<p class='fs-5 fw-bold text-uppercase ' style='font-family:Platypi;'>$name</p>
											</div>
											</div>";
										}
									}

									?>

								</div>
							</div>
						</div>


						<div class="mt-4 review_form">
							<h4 class="text-center">Comment Your Reviews</h4>


							<form class="" method="post">

								<div class="mt-3">
									<label class="form-label">Name :</label>
									<input type="text" name="customer_name" class="form-control form-control-sm">
								</div>
								<div class="mt-3">
									<label class="form-label">Write your Comments :</label>
									<input type="text" name="customer_comments" class="form-control form-control-sm">
								</div>

								<div class="text-center mt-4">
									<button class="btn btn-primary btn-sm review_btn w-100" name="submit">Submit Your Review</button>
								</div>


							</form>

						</div>

					</div>

				</section>

				<!-- contact section -->
				<section id="contact_section">
					<div class="contact_section container-fluid img-thumbnail my-3">
						<h3 class="text-center">Contact Us</h3>

						<h5 class="text-center my-4 ">We Glad to Help You!!</h5>

						<form  class="form" method="post" autocomplete="off" >



							<div class="row">

								<div class="col-lg-6">

									<div class="my-3 mx-2">
										<label class="form-label ">Name</label>
										<input type="text" name="enquiry_name" class="form-control form-control-sm">
									</div>

								</div>


								<div class="col-lg-6">
									<div class="my-3 mx-2">
										<label class="form-label "> Email </label>
										<input type="email" name="enquiry_email" class="form-control form-control-sm ">
									</div>

								</div>

							</div>

							<div class="row">
								<div class="col-lg-6">

									<div class="my-2 mx-2">
										<label class="form-label"> Mobile number </label>
										<input type="text" name="enquiry_phnnumber" class="form-control form-control-sm">
									</div>

								</div>


								<div class="col-lg-6">

									<div class="my-2 mx-2">
										<label class="form-label"> Subject </label>
										<input type="text" name="enquiry_subject" class="form-control form-control-sm ">
									</div>

								</div>

							</div>


							<div class="row">
								<div class="col">

									<div class="form-floating my-3 mx-2">
										<textarea class="form-control" placeholder="Leave a comment here" name="enquiry_comment"></textarea>
										<span>Leave Your Query to The Above Comment box</span>

									</div>
								</div>

							</div>

							<button class="btn btn-primary btn-sm w-100 mx-1 my-3" name="Query_submit">Send Your Message</button>

						</form>

						<div class="row mt-4 contact_link">
							<div class="col-md-4 img-thumbnail">

								<h3 class="">Company Info</h3>
								<p>Where Innovation Meets Implementation.
								We design,we code, we conquer the digital realm.</p>
								<address>Address:<br> 0, 0th Abc Rd, City,<br> State,<br> pincode: xxxxxx</address>
								<span class="">+00 000 000 0000</span><br>
								<label class="">abcd@veniteck.com</label>

							</div>
							<div class="col-md-4 img-thumbnail">	
								<h3>Quick Links</h3>
								<div class="my-2"><a href="javascipt:void(0)" class="text-decoration-none text-dark">Insights</a> </div>
								<div class="my-2"><a href="javascipt:void(0)" class="text-decoration-none text-dark">Industries</a> </div>
								<div class="my-2"><a href="javascipt:void(0)" class="text-decoration-none text-dark">Carrers</a> </div>
								<div class="my-2"><a href="javascipt:void(0)" class="text-decoration-none text-dark">Contact Us</a> </div>
								<div class="my-2"><a href="javascipt:void(0)" class="text-decoration-none text-dark">Policies</a> </div>
								<div class="my-2"><a href="javascipt:void(0)" class="text-decoration-none text-dark">Social Responsibility</a> </div>
							</div>

							<div class="col-md-4 img-thumbnail">
								<h3 class="">Social media</h3>
								<div class="my-2"><a href="javascipt:void(0)" class="text-decoration-none text-dark">Facebook</a> </div>
								<div class="my-2"><a href="javascipt:void(0)" class="text-decoration-none text-dark">Instagram</a> </div>
								<div class="my-2"><a href="javascipt:void(0)" class="text-decoration-none text-dark">LinkedIn</a> </div>
								<div class="my-2"><a href="javascipt:void(0)" class="text-decoration-none text-dark">YouTube</a> </div>
								<div class="my-2"><a href="javascipt:void(0)" class="text-decoration-none text-dark">Pininterest</a> </div>
								<div class="my-2"><a href="javascipt:void(0)" class="text-decoration-none text-dark">Twitter </a> </div>
							</div>
						</div>
					</div>
				</section>

				<section id="footer">
					<div class="container-fluid m-0 p-0">
						<footer class="text-center bg-light">
							Copyright &copy 2024 Veniteck Solutions
						</footer>
					</div>
				</section>







			</body>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
			<script>

				$(document).ready(function () {

					$('.owl-carousel').owlCarousel({ 
						autoplay:true,
						autoplayTimeout:4000,
						animateOut: 'slideOutDown',
						animateIn: 'flipInX',
						items:1,
						loop:true,
						margin:30,
						stagePadding:30,

					});


					$(".form").validate({
						rules: {
							enquiry_name: {
								required: true,
								minlength: 3
							},
							enquiry_email: {
								required: true,
								email: true
							},
							enquiry_phnnumber:{
								required:true,digits:true,minlength:10,

							}, 
							enquiry_subject:{
								required:true,

							}, 
							enquiry_comment:{
								required:true,
							},
						},
						messages: {
							enquiry_name: {
								required: "Please enter a name",
								minlength: "Your name must be at least 3 characters long"
							},
							enquiry_email: {
								required: "Please enter an email address",
								email: "Please enter a valid email address (eg:abcd@gmail.com)"
							},
							enquiry_phnnumber: {
								required: "Please provide a Mobile number",

							},
							enquiry_subject: {
								required: "Write a Subject",

							},
							enquiry_comment:{
								required:"Write a Query",
							},





						},
						errorPlacement: function(error, element) {
                // Place error message directly after the input element
							error.insertAfter(element);
						},

						submitHandler: function(form) {
							alert("Form successfully submitted!");
            form.submit();  // Submits the form if all validations pass
        }
    });

				})
			</script>



			</html>