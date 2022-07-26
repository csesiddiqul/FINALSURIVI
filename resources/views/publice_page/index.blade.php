@extends('layouts.public')

@section('content')

    <section class="slider">
        <div class="">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
                <div class="carousel-indicators">
                    @foreach($slider as $key => $imge)
                        <button  type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$key}}" class="{{($key == 0 ? 'active' : '')}}" aria-current="true" aria-label="Slide {{$key}}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach($slider as $key => $imge)
                        <div class="carousel-item {{($key == 0 ? 'active': '')}}">
                            <img src="{{asset($imge->url)}}" class="d-block w-100 slider-img-con" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="font-family: OpenSans-Bold; font-size: 20px">{{\Illuminate\Support\Str::limit($imge->title,40)}}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="overlay">
            </div>
        </div>
    </section>


    <section class="plainig">
        <div class="container">
            <div class="row">
                @foreach($services as $key=> $serviceData)
                    <div class="col-sm-12 col-md-4">
                        <div class="plaining-item">
                            <div class="planing-icon">
                                <a href=""><i class="fa-solid {{$serviceData->icon}}"></i></a>
                            </div>
                            <h1 class="title">{{$serviceData->title}}</h1>

                            <p class="plagtin-p">{{$serviceData->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>



    <section class="welcome">
        <div class="container">
            <img src="{{asset('frontend/img/border.png')}}" class="img-fluid mx-auto d-block">
            @foreach($slogan as $key => $slogandata)

                <h3 style="text-transform: capitalize">{{\Illuminate\Support\Str::limit($slogandata->title,20)}}</h3>
                <h2 style="text-transform: capitalize">{{\Illuminate\Support\Str::limit($slogandata->slogan)}}</h2>
            @endforeach
            <img src="{{asset('frontend/img/border.png')}}" class="img-fluid mx-auto d-block">
        </div>
    </section>

    <section class="about-news">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="title"  >Notice Board</h1>
                    <div class="about notish-height" data-aos="fade-up" data-aos-duration="1500">
                        <ul class="customBorder">
                            @foreach($notice as $key => $noticeList)
                                <li><i class="isize fa-solid fa-caret-right"></i><a href="{{route('all_notice',$noticeList->id)}}" target="_blank">{{\Illuminate\Support\Str::limit($noticeList->title,105)}}</a></li>
                            @endforeach
                                <a href="" class="readmore mt-4">All Notice →</a>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <h1 class="title">Executive Committee</h1>
                    @foreach($card as $key=> $cardData)
                        <div class="commite-card"  data-aos="fade-down" data-aos-duration="1500">
                            <div class="row" >
                                <div class="col-md-12 col-sm-12">
                                    <div class="item  item-control card-height ">
                                        <div class="float-start">
                                            <img class="commite-img" src="{{asset($cardData->img)}}" alt="">
                                        </div>
                                        <div class="item-title float-start">
                                            <p class="auth">{{\Illuminate\Support\Str::limit($cardData->title,51)}}</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="details">{{\Illuminate\Support\Str::limit($cardData->description,75)}}

                                        </p>
                                        <a class="readmore float-end px-2 acont" href="{{route('singaleCard',$cardData)}}">Read more →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="title">Events</h1>
                    <div class="row">
                        @foreach($event as $key=> $eventData)
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="commite-card" data-aos="fade-up" data-aos-duration="1500">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="item item-control">
                                                        <img src="{{asset($eventData->img)}}"  class="img-fluid box-img">
                                                        <p class="details" >{{\Illuminate\Support\Str::limit($eventData->title,50)}}</p>
                                                        <p class="details">{{\Illuminate\Support\Str::limit($eventData->description,90)}}
                                                            <a class="readmore mt-2" href="{{route('singaleEvent',$eventData->id)}}" target="">Read more...</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-4">
                    <h1 class="title">Important link</h1>
                    <div class="">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="about">
                                    <ul class="customBorder">
                                        @foreach($imlink as $key => $link)
                                            <li><i class="fa-solid fa-square-check"></i><a href="{{$link->url}}" target="_blank">{!! \Illuminate\Support\Str::limit($link->title,38) !!}</a></li>
                                        @endforeach


                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <h1 class="title">video</h1>

                                <div class="about">
                                    <div class="row">

                                        @foreach($video as $video)
                                            <div class="col-md-12">
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="item item-control">


                                                                <iframe class="lol" src="{{$video->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                <p class="details">Tristique tincidunt cursus sed  <a class="readmore mt-2" href="">Read more...</a></p>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>








                </div>
            </div>
        </div>
    </section>





    <section class="blog">
        <div class="container">
            <h1 class="title">News</h1>
            <div class="row">
                @foreach($news as $key => $newsData)
                    <div class="col-md-6">
                        <div class="commite-card" data-aos="flip-right" data-aos-duration="1500">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="item item-control">
                                        <img src="{{$newsData->img}}" class="img-fluid box-img-2">
                                        <p class="details">{{\Illuminate\Support\Str::limit($newsData->title,25)}}</p>
                                        <p class="details">{{\Illuminate\Support\Str::limit($newsData->description,65)}}<a class="readmore mt-2" href="{{route('singaleNews',$newsData->id)}}" target="">Read more...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>


    <section class="blog">
        <div class="container">
            <h1 class="title">Projects</h1>
            <div class="row">
                @foreach($project as $key => $projectData)
                    <div class="col-md-6">
                        <div class="commite-card" data-aos="flip-right" data-aos-duration="1500">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="item item-control">
                                        <img src="{{$projectData->img}}" class="img-fluid box-img-2">
                                        <p class="details">{{\Illuminate\Support\Str::limit($projectData->title,25)}}</p>
                                        <p class="details">{{\Illuminate\Support\Str::limit($projectData->description,65)}}<a class="readmore mt-2" href="{{route('singaleNews',$newsData->id)}}" target="">Read more...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>



    <section class="featured">
        <div class="container">
            <div class="row">
                <h1 class="title">Beautiful Moments </h1>



                @foreach($photoin as $key=> $photo)
                    <div class="col-md-4">
                        <div class="feature-item">
                            <a href="{{route('photo_gallery')}}">
                                <img src="{{$photo->img}}" class="img-fluid box-img-2">
                                <div class="caption">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>


@endsection
