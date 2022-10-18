<style type="text/css">
    .header-item, .header-item:hover
    {
        color: white;
    }
    .navbar-header .dropdown.show .header-item
    {
        color: #314667;
    }
</style>
<header id="page-topbar">
    <div class="navbar-header" style="
    background-color:  #314667;
    color: white;
">
        <div class="d-flex">
            <!-- LOGO -->
		        <div class="navbar-brand-box" style="background:#314667;">
                <a href="javascript:void(0);" class="logo logo-dark">
                    <span class="logo-sm">
                        <!-- logo-dark.png -->
                        <img src="{{ URL::asset('assets/images/img/logo_p1.png')}}" alt="" style="cursor: default;height: 25x;margin-left: -10px;" >
                    </span>
                    <span class="logo-lg">
                        <!-- logo-dark.png -->
                        <img src="{{ URL::asset('assets/images/img/logo_p.png')}}" alt="" style="cursor: default;" height="17">
                    </span>
                </a>


                <a href="javascript:void(0);" class="logo logo-light">
                    <span class="logo-sm">
                      <img src="{{ URL::asset('assets/images/img/logo_p1.png')}}" alt="" style="height: 25px;margin-left: -10px;">
                    </span>
                    <span class="logo-lg">
                        <!-- logo-dark.png -->
                       <img src="{{ URL::asset('assets/images/img/logo_p.png')}}" alt="" >
                </a>
            </div>

		
			
			
                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

			

            <!-- App Search-->
            <!--<form class="app-search d-none d-lg-block" style="width:25%;">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search . . .">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>-->


           <!-- <div class="dropdown dropdown-mega d-none d-lg-block ml-2">
                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false"
                    aria-expanded="false">
                    Mega Menu
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="{{ url('newsroom/brakingnewsfeedadd') }}"> <i
                                                    class="bx bxs-news"></i> News Room</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('sales/customerlist') }}"> <i class="bx bxs-briefcase"></i>
                                                Sales
                                                Operations</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('marketingpromotion/myapppromotionlist') }}"> <i
                                                    class="bx bxs-megaphone"></i>
                                                Marketing &
                                                Promotions</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('hradmin/employeelist') }}"> <i
                                                    class="bx bxs-user-plus"></i> HR &
                                                Admin</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('accountsvender/vendorlist') }}"> <i
                                                    class="bx bxs-user"></i>
                                                Accounts &
                                                Vender</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"> <i class="bx bxs-message-rounded-dots"></i>
                                                Social Media Centre</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"> <i class="bx bxs-file-plus"></i> Document
                                                Centre</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"> <i class="bx bxs-contact"></i> Smart Contact
                                                List</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"> <i class="bx bxs-home-circle"></i> Work From
                                                Home</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"> <i class="bx bxs-calendar-check"></i> Online
                                                Interview</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"> <i class="bx bxs-book"></i> Subscription
                                                Management</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"> <i class="bx bx-world"></i> Website
                                                Management</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"> <i class="bx bxs-buoy"></i> Story Pool</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"> <i class="bx bxs-help-circle"></i> Quick
                                                Guide</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('setting') }}"> <i class="bx bxs-cog"></i> Setting</a>
                                        </li>

                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>-->

        </div>


        <div class="d-flex">

           {{-- <div class="time_and_date">
                <div class="wather">
                    <body onload="digi()">
						  <p id="tt" style="margin-top: 16px !important"></p>
						</body>


                </div>
            </div> --}}




            <div class="dropdown d-inline-block d-lg-none ml-2">

                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search . . ."
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <!-- <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-time-five"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" style="height:240px; overflow-y:scroll; ">



                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-time-five"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right custom_scroll">
                    <div class="px-lg-2">



                    </div>
                </div>
            </div>-->


            <!-- <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div> -->

            <div class="dropdown d-inline-block">

                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> View All</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Your order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <img src="assets/images/users/avatar-3.jpg" class="mr-3 rounded-circle avatar-xs"
                                    alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">James Lemire</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="bx bx-badge-check"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <img src="assets/images/users/avatar-4.jpg" class="mr-3 rounded-circle avatar-xs"
                                    alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle mr-1"></i> View More..
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{-- @if(Auth::user()->profile_image)
                    <img class="rounded-circle header-profile-user" src="/uploads/users/{{Auth::user()->profile_image}}"
                        alt="Header Avatar">
                    @else
                    <img class="rounded-circle header-profile-user"src="/uploads/users/avatar-2.jpg"
                        alt="Header Avatar">
                    @endif --}}
                    <span class="d-none d-xl-inline-block ml-1">{{Auth::user()->firstname}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
						<a class="dropdown-item text-danger" href="javascript:void();"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>

            <!-- <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect">
                    <i class="bx bx-cog bx-spin"></i>
                </button>
            </div> -->

        </div>
    </div>
</header>
