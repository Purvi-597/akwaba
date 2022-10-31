
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
           
                

            <li>
                    <a href="{{url('/')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>

                        <span>Dashboard</span>
                    </a>

                </li>
                
               
                <li>
                    <a href="{{ url('admin/users') }}" class="">
                        <i class="fas fa-users"></i>
                        <span>User Management</span>
                    </a>
                    
                </li>
               
				<li>
                    <a href="{{ url('admin/categories') }}" class="">
                        <i class="fas fa-list"></i>
                        <span>Categories</span>
                    </a> 
                </li>

                <li>
                    <a href="{{ url('admin/subcategories') }}" class="">
                        <i class="fas fa-list"></i>
                        <span>Sub Categories</span>
                    </a>  
                </li>

                <li>
                    <a href="{{ url('admin/advertisement') }}" class="">
                        <i class='fas fa-ad'></i>
                        <span>Advertisement</span>
                    </a>
                    
                </li>

                <li>
                    <a href="{{ url('admin/place_advertisement') }}" class="">
                        <i class='fas fa-ad'></i>
                        <span>Place Advertisement</span>
                    </a>
                    
                </li>

                <li>
                    <a href="{{ url('admin/feature') }}" class="">
                        <i class='fas fa-ad'></i>
                        <span>Feature Places</span>
                    </a>
                    
                </li>

                <li>
                    <a href="{{ url('admin/feature_list') }}" class="">
                        <i class='fas fa-ad'></i>
                        <span>Feature Places List</span>
                    </a>
                    
                </li>

                
                

                  <!--  <li>
                    <a href="{{ url('admin/media') }}" class="">
                        <i class="fas fa-circle-notch"></i>
                        <span>Media</span>
                    </a>
                    
                </li> -->
			
            
                    <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('admin/editpassword') }}"><i class="bx bx-radio-circle-marked"></i>Change Password</a></li>                          
                         {{-- <li><a href="{{ url('admin/support') }}"><i class="bx bx-radio-circle-marked"></i>Support</a></li>
                         <li><a href="{{ url('admin/bookingfee') }}"><i class="bx bx-radio-circle-marked"></i>Booking Fee</a></li> --}}
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->


