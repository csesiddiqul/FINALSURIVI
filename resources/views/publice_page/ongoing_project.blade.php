@extends('layouts.public');

@section('content');

<section class="main-about">
			<div class="about-bg">
				<div class="container">
					<h1>Projects- <span class="about-color">Projects</span></h1>
				</div>
			</div>

		</section>


		<section class="container mr-con">

		<table id="example" class="table table-striped" style="width:100%">
			<thead>
				<tr>
				<th scope="col">SL</th>
				<th scope="col">Project Title</th>
				<th scope="col">Project img</th>
				<th scope="col"> Location (District & City Corporation/Pourasava)</th>

				<th scope="col"> Type of Beneficiaries</th>
				</tr>
			</thead>


            @foreach($jobApp as $key => $jobData)


                <tr>
                    <th scope="row">{{$key+1}}</th>

                    <td>{{$jobData->title}}</td>
                    <td><img src="{{$jobData->img}}" alt="" width="5%"></td>
                    <td>{{$jobData->location_data}}</td>
                    <td>{{$jobData->title}}</td>
                </tr>


            @endforeach

		</table>

		</section>

@endsection
