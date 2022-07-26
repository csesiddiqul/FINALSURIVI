<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('admin/dist/img/surovi.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Surovi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">

            </div>
            <div class="info">
                <a href="#" class="d-block" style="text-transform: capitalize">
                   {{auth()->user()->name}}

                </a>


            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{asset('/home')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-user"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('users.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('users')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-images"></i>
                        <p>
                            Slider
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('slider.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>upload</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('slider.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list</p>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon  fa-solid fa-hand-holding-hand"></i>
                        <p>
                            Service
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('service.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('service.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list</p>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class="nav-item">
                    <a href="{{route('slogan.index')}}" class="nav-link">
                        <i class="nav-icon fa-solid fa-hand-fist"></i>
                        <p>
                            Slogan

                        </p>
                    </a>

                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-file-lines"></i>
                        <p>
                            Notice Board
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('notice.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('notice.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-id-badge"></i>
                        <p>
                            Executive Committee
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('card.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('card.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-paperclip"></i>
                        <p>
                            Important link
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('importanLink.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('importanLink.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-calendar-check"></i>
                        <p>
                            Event
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('event.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>upload</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('event.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list</p>
                            </a>
                        </li>

                    </ul>
                </li>












                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-newspaper"></i>
                        <p>
                            News
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('news.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('news.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-photo-film"></i>
                        <p>
                            Gallery
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-image"></i>
                                <p>
                                    photo
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('photo_admin.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>upload</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('photo_admin.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>list</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-video"></i>
                                <p>
                                    video
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('videogal.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>upload</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('videogal.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>list</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>


                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-brands fa-pix"></i>
                        <p>
                            Static page
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('developinter.index')}}" class="nav-link">

                                <i class="nav-icon fa-solid fa-note-sticky"></i>
                                <p>
                                    Development Inter..
                                </p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('missionVision.index')}}" class="nav-link">

                                <i class="nav-icon fa-solid fa-note-sticky"></i>
                                <p>
                                    Mission & Vision
                                </p>
                            </a>
                        </li>
                    </ul>






                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-file-pen"></i>
                                <p>
                                    Job Application
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('JobApplication.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>upload</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('JobApplication.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>list</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>



                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-file-pen"></i>
                                <p>
                                     Projects
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('project.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>upload</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('project.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>list</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>


                </li>





                <li class="nav-item">
                    <a href="{{route('websetting.index')}}" class="nav-link">
                        <i class="nav-icon fa-solid fa-gears"></i>
                        <p>
                            Site Settings

                        </p>
                    </a>

                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-list-check"></i>
                        <p>
                            Menu
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('manu.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('manu.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-file-circle-plus"></i>
                        <p>
                            Content
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('page.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('page.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>list</p>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="nav-icon fa-solid fa-right-from-bracket"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
