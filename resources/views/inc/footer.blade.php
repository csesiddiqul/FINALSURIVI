@php
    $webdata = \App\Models\websiteSetting::first();
@endphp
<section class="activitis">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 class="title">Get in touch!</h1>
                <div class="contacts-form">
                    <form>

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
                            <a href="#">All Rights Reserved..</a> <br>
                            <span>
                                    <a href="#">Surovi, House # 16, Road #1205 || Dhanmondi R/A, Dhaka-1205. </a> <br>
                                    <a href="#">Call :  (880-2) 9661468 || J Fax  :  880-2-8626601 </a> <br>
                                    <a href="#">Email  :  info@surovi.com </a><br>

                                    <a href="#"></a>
                            </span>
                        </li>

                        <li></li>

                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <h1 class="title">MAP</h1>
                <div class="flickr">
                    <iframe class="map" src="{{$webdata->mapUrl}}"></iframe>
                </div>
            </div>
        </div>
    </div>

</section>


<footer class="all_contant">
    <div class="container">

        <div class="row">

            <div class="clo-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <h1 class="title ">Contact Info</h1>

                        <p class="fottoerp"><i class="fa-solid fa-phone"></i> {{$webdata->phone}} </p>

                        <p class="fottoerp"><i class="fa-solid fa-envelope"></i> {{$webdata->email}}</p>

                        <p class="fottoerp">
                            <i class="fa-solid fa-hand-holding-medical"></i>
                            {{$webdata->websiteLink}}
                        </p>

                    </div>


                    <div class="col-md-4">

                        <img src="{{asset($webdata->logo)}}" class="fotterimgm" alt="">
                        <div class="footera">
                            <!-- <ul>
                                <li><a href="#">Ipsum dolor sit amet.</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet con</a></li>
                            </ul> -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h1 class="title">About Website</h1>

                        <div class="footera">
                            <ul>
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="{{route('development')}}">About Us</a></li>
                                <li><a href="{{route('ongoing')}}">Projects</a></li>
                                <li><a href="{{route('mission')}}">Mission Vission</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>

                    </div>



                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="clearfix">
                    <div class="social-icon  footer-icon">
                        <ul>

                            <input class="f-input" type="text" placeholder="Search the Site">
                            <li><a href="{{$webdata->facbookLink}}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>

                            <li><a href="{{$webdata->twitter}}" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>

                            <li><a href="{{$webdata->instagram}}" target="_blank" title="Instagram"><i class="fab fa-brands fa-instagram"></i></a></li>


                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-md-6">

                <div class="footer-item">


                    <p>© 2020 surovi . All Rights Reserved. Ipsita Computers Pte Ltd</p>
                </div>
            </div>

        </div>

        <div class="border-2"></div>



    </div>
</footer>

<script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script><script>
    AOS.init();
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script><script>
    AOS.init();
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
