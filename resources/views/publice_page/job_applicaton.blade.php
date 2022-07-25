@extends('layouts.public');

@section('content')


<section class="main-about">
			<div class="about-bg">
				<div class="container">
					<h1>Job- <span class="about-color"> Application</span></h1>
				</div>
			</div>

		</section>


	<section class="container mr-con">

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
              <th scope="col">SL</th>
              <th scope="col">job Title</th>
              <th scope="col"> Location (District & City Corporation/Pourasava)</th>

              <th scope="col"> Type of Beneficiaries</th>
            </tr>
        </thead>

        <tbody>

        @foreach($jobApp as $key => $jobData)


            <tr>
              <th scope="row">{{$key+1}}</th>
              <td>{{$jobData->title}}</td>
              <td>{{$jobData->location}}</td>
              <td>{{$jobData->title}}</td>
            </tr>


        @endforeach


        </tbody>

    </table>

	</section>









		<section class="activitis">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h1 class="title">Get in touch!</h1>
						<div class="contacts-form">
							<form>
								<input type="text" name="" placeholder="Name" class="form-label contact-input">
								<input type="email" name="" placeholder="Email" class="form-label contact-input">
								<textarea placeholder="Message..." class="form-label contact-input"></textarea>
								<input type="reset" name="" value="Clear-Form" class="button">
								<input type="submit" name="" value="Send!" class="button">
							</form>
						</div>
					</div>
                    <div class="col-md-4">
						<h1 class="title">Address</h1>
						<div class="tweets testimonials">
							<ul>
								<li>
										<a href="#">Copyright © 2014 Surovi. All Rights Reserved..</a> <br>
										<span>
											<a href="#">Surovi, House # 16, Road #1205 || Dhanmondi R/A, Dhaka-1205. </a> <br>
											 <a href="#">Call :  (880-2) 9661468 || J Fax  :  880-2-8626601 </a> <br>
											 <a href="#">Email  :  info@surovi.com </a><br>
										</span>
								</li>

								<li></li>

							</ul>
						</div>
					</div>


					<div class="col-md-4">
						<h1 class="title">MAP</h1>
						<div class="flickr">

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.25880974205785!2d90.38186989176657!3d23.742352407740288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b704c592c9%3A0x3860a36fc6cf61b2!2sSurovi!5e0!3m2!1sen!2sbd!4v1654942287347!5m2!1sen!2sbd" height="186" width="356" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>

		</section>


@endsection
