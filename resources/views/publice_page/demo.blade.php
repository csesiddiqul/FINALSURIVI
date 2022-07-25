@extends('layouts.public')

@section('content')
    <section class="main-about">
        <div class="about-bg">
            <div class="container">
                <h1 style="text-transform: capitalize">{{ $page->title}}</h1>
            </div>
        </div>

    </section>


        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    @if($page->img)

                    <img src="{{$page->img}}" class="dinamikpage" alt="">
                    @endif
                    <div class="dynami" style="margin-bottom: 20px">
                        {!! $page->description !!}
                    </div>

                </div>



            </div>
        </div>


@endsection
