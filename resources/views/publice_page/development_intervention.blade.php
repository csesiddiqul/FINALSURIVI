@extends('layouts.public')

@section('content')

    @foreach($devlopment as $key=> $devlopment)
<section class="main-about">
			<div class="about-bg">
				<div class="container">
                    <h1>About-	<span class="about-color"> Development Intervention</span></h1>
				</div>
			</div>

		</section>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="title">{{$devlopment->title_one}} </h1>
            <img src="{{$devlopment->img}}" class="img-fluid other-img" alt="">
            <p class="textp mt-2 border-ot ">
                {{$devlopment->description_one}}
            </p>
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title">{{$devlopment->title_tow}}</h1>


                    <p class="border-ot mt-2 textp">
                        {{$devlopment->description_tow}}

                    </p>
                </div>


                <div class="col-md-12">
                    <h1 class="title">{{$devlopment->title_three}}</h1>


                    <p class="border-ot mt-2 textp">
                        {{$devlopment->description_three}}

                    </p>
                </div>

            </div>
        </div>



    </div>
</div>





<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="title">{{$devlopment->title_four}}</h1>
            <p class="textp mt-2 border-ot">
                {{$devlopment->description_four}}


            </p>
        </div>




    </div>
</div>

    @endforeach

@endsection
