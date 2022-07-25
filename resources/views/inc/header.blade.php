@php
    $menudata = \App\Models\menu::all();
    $logo = \App\Models\websiteSetting::first();


@endphp


<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
@php
    $first = strtok($logo->logo_name," ");
    $last = substr(strstr($logo->logo_name," "),1);
@endphp
            <a class="navbar-brand d-md-block" href="">{!! $first !!}<span style="font-size: 10px">{{$last}} </span></a>

            <div class=" social-icon  float-end">
                <ul>

                </ul>
            </div>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menudata">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="menudata">
                <ul class="navbar-nav">

                    {{--  @foreach($menudata as $key=> $menu)


                               <li class="dropdown">
                                   <a class="nav-link dropdown-toggle" href="{{$menu->slug}}"
                                      id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                      aria-expanded="false">
                                       {{($menu->prantsId == 0 ? $menu->name : '' )}}
                                   </a>
                                   <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">

                                       <li class="nav-item"><a
                                               class="dropdown-item nav-link" href="{{$menu->slug}}">

                                               {{($menu->prantsId == 1 ? $menu->name : '' )}}
                                           </a>
                                       </li>


                                   </ul>
                               </li>


                           @endforeach --}}
                    @if($menus->count())

                        @foreach($menus[0] as $key => $menu)
                            <li class="{{!empty($menus[$menu->id]) ? 'dropdown' : ''}}">
                                <a class="nav-link {{!empty($menus[$menu->id]) ? 'dropdown-toggle' : ''}} {{ \Request::url() == url($menu->slug) ? 'active' : '' }}"
                                   href="{{$menu->menu_type == 1 ? $menu->slug : route('pages',$menu->slug)}}" id="menu_{{$key}}"
                                   role="button" @if(!empty($menus[$menu->id])) role="button" data-bs-toggle="dropdown" aria-expanded="false" @endif>
                                    {{$menu->name}}
                                </a>
                                @if(!empty($menus[$menu->id]))
                                    <ul class="dropdown-menu" aria-labelledby="menu_{{$key}}">
                                        @foreach($menus[$menu->id] as $menu)
                                            <li class="nav-item"><a
                                                    class="dropdown-item nav-link" href="{{$menu->menu_type == 1 ? $menu->slug : route('pages',$menu->slug)}}">
                                                    {{$menu->name}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    @endif


{{--                    <li class="dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle {{ \Request::url() == url('/') ? 'active' : '' }}" href="#"--}}
{{--                           id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"--}}
{{--                           aria-expanded="false">--}}
{{--                            Programs--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">--}}

{{--                            <li class="nav-item {{ \Request::route()->getName() == 'educations' ? 'active' : '' }}"><a--}}
{{--                                    class="dropdown-item nav-link" href="{{route('educations')}}">Educations</a></li>--}}
{{--                            <li class="nav-item {{ \Request::route()->getName() == 'earlyChildhood' ? 'active' : ''}}">--}}
{{--                                <a class="dropdown-item nav-link" href="{{route('earlyChildhood')}}">Early Childhood--}}
{{--                                    Care & Development </a></li>--}}
{{--                            <li class="nav-item {{ \Request::url() == url('/') ? 'active' : '' }}"><a--}}
{{--                                    class="dropdown-item nav-link" href="#">Vocational Skill Training</a></li>--}}
{{--                            <li class="nav-item {{ \Request::url() == url('/') ? 'active' : '' }}"><a--}}
{{--                                    class="dropdown-item nav-link" href="#">Proverty Alleviation & Income--}}
{{--                                    Generations</a></li>--}}
{{--                            <li class="nav-item {{ \Request::url() == url('/') ? 'active' : '' }}"><a--}}
{{--                                    class="dropdown-item nav-link" href="#">Health Environment, Sanitation &--}}
{{--                                    Nutrition</a></li>--}}
{{--                            <li class="nav-item {{ \Request::url() == url('/') ? 'active' : '' }}"><a--}}
{{--                                    class="dropdown-item nav-link" href="#">Economic Security, Relief &--}}
{{--                                    Rehabilitation</a></li>--}}
{{--                            <li class="nav-item {{ \Request::url() == url('/') ? 'active' : '' }}"><a--}}
{{--                                    class="dropdown-item nav-link" href="#">Capacity Building & Empowerment</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

                    {{--                        <li class="dropdown">--}}
                    {{--                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
                    {{--                                About Us--}}
                    {{--                            </a>--}}
                    {{--                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">--}}
                    {{--                                <li class="nav-item {{\Request::route()->getName() == 'development' ? 'active' : '' }}"> <a class="dropdown-item nav-link" href="{{route('development')}}">Development Intervention</a></li>--}}

                    {{--                                <li class="nav-item {{\Request::route()->getName() == 'mission' ? 'active' : '' }}"> <a class="dropdown-item nav-link" href="{{route('mission')}}">Mission & Vision</a></li>--}}

                    {{--                                <li class="nav-item {{ \Request::url() == url('') ? 'active' : '' }}"> <a class="dropdown-item nav-link" href="#">Background</a></li>--}}
                    {{--                                <li class="nav-item {{ \Request::url() == url('') ? 'active' : '' }}"> <a class="dropdown-item nav-link" href="#">Organogram</a></li>--}}
                    {{--                                <li class="nav-item {{ \Request::url() == url('') ? 'active' : '' }}"> <a class="dropdown-item nav-link" href="#">Management</a></li>--}}
                    {{--                                <li class="nav-item {{ \Request::url() == url('') ? 'active' : '' }}"> <a class="dropdown-item nav-link" href="#">Surovi at a glance</a></li>--}}
                    {{--                                <li class="nav-item {{ \Request::url() == url('') ? 'active' : '' }}"> <a class="dropdown-item nav-link" href="#">Working Approch</a></li>--}}
                    {{--                                <li class="nav-item {{ \Request::url() == url('') ? 'active' : '' }}"> <a class="dropdown-item nav-link" href="#">Terget Group</a></li>--}}
                    {{--                            </ul>--}}
                    {{--                        </li>--}}

                    {{--                        <li class="dropdown">--}}
                    {{--                            <a class="nav-link dropdown-toggle  {{\Request::route()->getName() == 'ongoing' || 'complate' ? 'active' : '' }}" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
                    {{--                                Projects--}}
                    {{--                            </a>--}}
                    {{--                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">--}}
                    {{--                                <li class="nav-item {{ \Request::route()->getName() == 'ongoing' ? 'active' : '' }}"> <a class="dropdown-item nav-link " href="{{route('ongoing')}}">On-going Projects</a></li>--}}
                    {{--                                <li class="nav-item {{ \Request::route()->getName() == 'complate' ? 'active' : '' }}"><a class="dropdown-item nav-link" href="{{route('complate')}}">Completed Projects </a></li>--}}
                    {{--                            </ul>--}}
                    {{--                        </li>--}}


                    {{--                        <li class="dropdown">--}}
                    {{--                            <a class="nav-link dropdown-toggle {{ \Request::url() == url('/') ? 'active' : '' }}" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
                    {{--                                Programs--}}
                    {{--                            </a>--}}
                    {{--                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">--}}

                    {{--                                <li class="nav-item {{ \Request::route()->getName() == 'educations' ? 'active' : '' }}"> <a class="dropdown-item nav-link" href="{{route('educations')}}">Educations</a></li>--}}
                    {{--                                <li class="nav-item {{ \Request::route()->getName() == 'earlyChildhood' ? 'active' : ''}}"> <a class="dropdown-item nav-link" href="{{route('earlyChildhood')}}">Early Childhood Care & Development </a></li>--}}
                    {{--                                <li class="nav-item {{ \Request::url() == url('/') ? 'active' : '' }}"> <a class="dropdown-item nav-link" href="#">Vocational Skill Training</a></li>--}}
                    {{--                                <li class="nav-item {{ \Request::url() == url('/') ? 'active' : '' }}"><a class="dropdown-item nav-link" href="#">Proverty Alleviation & Income Generations</a></li>--}}
                    {{--                                <li class="nav-item {{ \Request::url() == url('/') ? 'active' : '' }}"><a class="dropdown-item nav-link" href="#">Health Environment, Sanitation & Nutrition</a></li>--}}
                    {{--                                <li class="nav-item {{ \Request::url() == url('/') ? 'active' : '' }}"><a class="dropdown-item nav-link" href="#">Economic Security, Relief & Rehabilitation</a></li>--}}
                    {{--                                <li class="nav-item {{ \Request::url() == url('/') ? 'active' : '' }}"><a class="dropdown-item nav-link" href="#">Capacity Building & Empowerment</a></li>--}}
                    {{--                            </ul>--}}
                    {{--                        </li>--}}

                    {{--                        <li class="nav-item {{ \Request::route()->getName() == 'job_applicaton' ? 'active' : ''}}"><a class="nav-link" href="{{route('job_applicaton')}}">Job Application</a></li>--}}



                    {{--                        <li class="dropdown">--}}
                    {{--                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
                    {{--                                Gallery--}}
                    {{--                            </a>--}}
                    {{--                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">--}}
                    {{--                                <li class="nav-item {{ \Request::route()->getName() == 'photo_gallery' ? 'active' : '' }}"> <a class="dropdown-item nav-link " href="{{route('photo_gallery')}}">Photo Gallery</a></li>--}}
                    {{--                                <li class="nav-item  {{ \Request::route()->getName() == 'video_galler'? 'active' : '' }}"><a class="dropdown-item nav-link" href="{{route('video_gallery')}}">Video Gallery</a></li>--}}
                    {{--                            </ul>--}}
                    {{--                        </li>--}}

                    {{--                        <li class="nav-item {{ \Request::route()->getName() == 'contact' ? 'active' : '' }}"><a class="nav-link" href="{{url('contact')}}">Contact</a></li>--}}

                </ul>
            </div>
        </div>
    </nav>
</header>

<style>
    ul li:hover > ul,
    ul li ul:hover {
        visibility: visible;
        opacity: 1;
        display: block;
    }
</style>
