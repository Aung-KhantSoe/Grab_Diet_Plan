<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<title>thank you</title>
	<meta name="viewport" content="width=device-width,">
	<link rel="stylesheet" href="assets/thank_assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/thank_assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/thank_assets/css/style.css">
</head>
<body>
	<!-- Start of thank you section
		============================================= -->
		<section id="thank-you" class="thank-you-section" style="margin: auto; ">
			<div class="container">
				<div class="thank-you-wrapper position-relative thank-wrapper-style-two thank-wrapper-style-four">
					<!-- <div class="thank-you-close text-center">x</div> -->
					<div class="thank-txt text-center">
						<div class="text-area-thank">
							<div class="thank-icon">
								<img src="assets/img/tht4.png" alt="">
							</div>
							<h1>Thankyou for Using</h1>
							<p>You can download meal plan in following link</p>
						</div>
					</div>
					<div class="thank-txt-part2">
						<div class="okey-btn text-uppercase text-center">
							<a class="d-block" href="#">Download</a>
						</div>
                        <div style="text-align: center;">
                            <span>Your Daily Calorie Needed for it </span><br>
                            {{-- <p>{{ $bmi }}</p> --}}
                            <span style="font-size: 50px">{!! number_format((float)($calories), 0) !!}</span>
                        </div>
						{{-- <span><img src="assets/img/eni.png" alt="">youremail@gmail.com</span>
						<span><img src="assets/img/phi.png" alt="">021 ( 876-983-873 )</span> --}}
					</div>
                    <div style="height: 100px;"></div>
					<div class="thank-vectoritem thank-vector2 position-absolute"><img src="assets/img/tv2.png" alt=""></div>
					<div class="thank-vectoritem thank-vector3 position-absolute"><img src="assets/img/tv4.png" alt=""></div>
				</div>
			</div>
		</section>
 	<!-- End of thank you section
 		============================================= -->

 		<script src="assets/thank_assets/js/jquery-3.3.1.min.js"></script>
 		<script src="assets/thank_assets/js/bootstrap.min.js"></script>
 		<script src="assets/thank_assets/js/main.js"></script>
 	</body>
 	</html>