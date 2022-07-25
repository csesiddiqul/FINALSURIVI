@extends('layouts.public');

@section('content');
<section class="main-about">
			<div class="about-bg">
				<div class="container">
					<h1>About-	<span class="about-color">Event</span></h1>
				</div>
			</div>

		</section>



		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="title">{{$result->title}}</h1>



                    <video class="other-img" controls>
                        <source src="{{$result->video}}" type="video/mp4">
                        <source src="mov_bbb.ogg" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>

					<p class="border-ot mt-2 textp">
						{{$result->description}}
					</p>
				</div>


			</div>
		</div>




@endsection
