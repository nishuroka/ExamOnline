<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Online Examination System</title>
	<link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/theme.css')}}">
	<meta name="_token" content="{{csrf_token()}}" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
</head>

<body>
	@if(Session::has('success'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Success!</strong> {{ Session::get('message', '') }}
	</div>
	@endif
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="/"><img src="images/logo.png" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
						<div class="container-fluid nav-bar">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

								<ul class="nav navbar-nav navbar-right">
									<li><a class="menu" href="#home">Home</a></li>
									<li><a class="menu" href="#quiz">quiz</a></li>
									<li><a class="menu" href="#mcq">mcqs</a></li>
									<li><a class="menu" href="#exam">exam</a></li>
									<li><a class="menu" href="#feedback"> feedback</a></li>
								</ul>
							</div><!-- /navbar-collapse -->
						</div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->



	<!--slider section-->
	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">

				<div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="images/slide-one.jpg" alt="">
							<div class="carousel-caption">
								<!-- <h1>Tax</h1> -->
								<p>Prepare yourself for examination</p>

							</div>
						</div>
						<div class="item">
							<img src="images/slide-two.jpg" alt="">
							<div class="carousel-caption">
								<!-- <h1>Financial</h1> -->
								<p>Technology with examination</p>

							</div>
						</div>
						<div class="item">
							<img src="images/slide-three.jpg" alt="">

						</div>
						<div class="item">
							<img src="images/slide-four.jpg" alt="">
							<div class="carousel-caption">

								<p>Disscuss with your friends for the preparation.</p>

							</div>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left fas fa-left-arrow" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

			</div>
		</div>
	</section>
	<!-- end of slider section -->

	<!--practise exam section-->
	<section class="quiz" id="quiz">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-8 text">
					<h1>Online Quiz</h1>
					<p>Login using your designated ID and you can practise quizes online. Practise and prepare yorself for the examination.</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<img src="images/practise.png">
				</div>
			</div>
		</div>
		<!--contaimer-->
	</section>
	<!--practise exam section-->

	<!--mcq section-->
	<section class="mcq" id="mcq">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<img src="images/mcq.png">
				</div>
				<div class="col-md-8 col-sm-8 col-xs-8 text">
					<h1>MCQ Sample Questions</h1>
					<p>Login using your designated ID and you can practise quizes online. Practise and prepare yorself for the examination.</p>
				</div>

			</div>
		</div>
		<!--contaimer-->
	</section>
	<!--mcq section-->

	<!--onlineexam section-->
	<section class="onlineexam" id="exam">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-8 text">
					<h1>MCQ Sample Questions</h1>
					<p>Login using your designated ID and you can practise quizes online. Practise and prepare yorself for the examination.</p>
				</div>
				<div class="col-md-4 ">
					<img src="images/onlineexam.png">
				</div>
			</div>
		</div>
		<!--contaimer-->
	</section>
	<!--onlineexam section-->

	<div class="clear-fix"></div>

	<!-- map section -->
	<section class="api-map" id="feedback">

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="we">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.316259509535!2d85.29111325668332!3d27.70895594441281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu+44600!5e0!3m2!1sen!2snp!4v1554791845488!5m2!1sen!2snp" width="100%" height="830px" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section><!-- end of map section -->

	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>give feedback</h2>
					</div>

					<div class="col-md-5 contact-info text-left">
						<h3>contact information</h3>
						<div class="info-detail">
							<ul>
								<li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li>
							</ul>
							<ul>
								<li><i class="fa fa-map-marker"></i><span>Address:</span> 123 Some Street , California, US, CP 123</li>
							</ul>
							<ul>
								<li><i class="fa fa-phone"></i><span>Phone:</span> (01) 999-1235</li>
							</ul>
							<ul>
								<li><i class="fa fa-fax"></i><span>Fax:</span> (01) 999-1234</li>
							</ul>
							<ul>
								<li><i class="fa fa-envelope"></i><span>Email:</span> info@domain.com</li>
							</ul>
						</div>
					</div>


					<div class="col-md-6 col-md-offset-1 contact-form">
						<h3>leave us a message</h3>
						<div id="successAlert" class="alert alert-success" style="display:none">
							Thank you for contacting us
						</div>
						<form id="myForm">
							<input class="name" id="name" name="name" type="text" placeholder="Name" required>
							<input class="email" id="email" name="email" type="email" placeholder="Email" required>
							<input class="phone" id="phone" name="phone" type="text" placeholder="Phone No:" required>
							<textarea class="message" id="message" name="message" required id="message" cols="30" rows="10" placeholder="Message"></textarea>
							<button id="ajaxSubmit" class="btn btn-block sent-butnn">Send</button>
						</form>
					</div>
					<!-- Ajax feedback -->
					<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
					</script>
					<script>
						jQuery(document).ready(function() {
							jQuery('#ajaxSubmit').click(function(e) {
								jQuery('#ajaxSubmit').attr("disabled", true);
								var valid = this.form.checkValidity();
								if (valid) {
									e.preventDefault();
									$.ajaxSetup({
										headers: {
											'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
										}
									});
									jQuery.ajax({
										url: "{{ url('/feedback') }}",
										method: 'post',
										data: {
											name: jQuery('#name').val(),
											email: jQuery('#email').val(),
											phone: jQuery('#phone').val(),
											message: jQuery('#message').val(),
										},
										success: function(result) {
											jQuery('.alert').show();
											jQuery('.alert').html(result.success);
											document.getElementById("myForm").reset();
											$("#successAlert").show();
											$("#successAlert").delay(5000).fadeOut();

										},
										complete: function() {
											//Ajax request is finished, so we can enable
											//the button again.
											jQuery('#ajaxSubmit').attr("disabled", false);
										}

									});
								}
							});

						});
					</script>


				</div>
			</div>
		</div>
	</section><!-- end of contact section -->


	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p>&copy; Nishan Roka, All right reserved</p>
				</div>

				<div class="col-xs-6 text-right">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
	</footer>





	<!-- script tags
	============================================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>

</html>