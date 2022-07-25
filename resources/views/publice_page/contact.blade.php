@extends('layouts.public');
@section('content');

<section class="activitis">

			<div class="container">
				<div class="row">


					<div class="col-md-12">
						<h1 class="title">MAP</h1>
						<div class="flickr">

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.25880974205785!2d90.38186989176657!3d23.742352407740288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b704c592c9%3A0x3860a36fc6cf61b2!2sSurovi!5e0!3m2!1sen!2sbd!4v1654942287347!5m2!1sen!2sbd" height="400px" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>

					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">

								<div class="add-box">
									<i class="fa-solid fa-location-dot"></i>

									<h3>address</h3>
									<p>Surovi, House # 16, Road #1205  Dhaka-1205. </p>
								</div>

							</div>

							<div class="col-md-4">

								<div class="add-box">
									<i class="fa-solid fa-phone"></i>

									<h3>Phone Number</h3>
									<p>Call :  (880-2) 9661468,Fax  :  880-2-8626601 </p>
								</div>

							</div>

							<div class="col-md-4">

								<div class="add-box">
									<i class="fa-solid fa-envelope"></i>

									<h3>E-mail Address</h3>
									<p> info@surovi.com || surovior.@gmail.com </p>
								</div>

							</div>
						</div>
					</div>

					<div class="col-md-12">
						<h1 class="title">Leave Comment</h1>
						<div class="contacts-form">
							<form>

								<div class="row">
									<div class="col-md-6">
										<input type="text" name="" placeholder="Name" class="form-label contact-input">
									</div>
									<div class="col-md-6">
										<input type="text" name="" placeholder="phone" class="form-label contact-input">
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<input type="email" name="" placeholder="Email" class="form-label contact-input">
									</div>
									<div class="col-md-6">
										<input type="text" name="" placeholder="Subject" class="form-label contact-input">
									</div>
								</div>

								<div class="row">
									<div class="cl-md-12">
										<textarea placeholder="Message..." class="form-label cont-heig contact-input"></textarea>
									</div>
								</div>


								<input type="reset" name="" value="Clear-Form" class="button">

								<input type="submit" name="" value="Send!" class="button">

							</form>
						</div>
					</div>





				</div>
			</div>

</section>

@endsection
