<header class="header">
		<div class="header_content">

			<!-- Logo -->
			<div class="logo_container d-flex flex-column align-items-center justify-content-center">
				<div class="logo">
					<a href="{{url('nuatthaihome')}}" class="text-center">
						<div class="logo_title"><img src="/images/website-logo.png" alt=""></div>
					</a>
				</div>
			</div>
      
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_inner d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="{{ url('nuatthaihome')}}"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>home</span></div></a></li>
									<li><a href="{{ url('nuatthaiaboutus')}}"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>about us</span></div></a></li>
									<li><a href="{{ url('nuatthaivirtualtour')}}"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>virtual tour</span></div></a></li>
									<li><a href="{{ url('website/pages/services')}}"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Services</span></div></a></li>
									<li><a href="{{ url('website/pages/reservation') }}"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>reservation</span></div></a></li>
									<li><a href="{{ url('website/pages/profile') }}"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Profile</span></div></a></li>
								</ul>
							</nav>
              
							<a data-toggle="modal" data-target="#myModal" id="bookmassagebtn" class="button_container header_button ml-auto"><div class="button text-center"><span>Book Massage</span></div></a>
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
              <div class="form-group1">
                    <div class="user-area dropdown float-right">
                                <a id="navbarDropdown" class="nav-link dropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="margin-top: 20px;">
                                   <img src="" class="admin"> <i class="fa fa-caret-dowsn" style="margin-left: 55px;"></i>
                                </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                               

                                <a class="nav-link" href="{{ url('changepassword') }}"><i class="fa fa-cog"></i> Settings</a>

                                    <a class="nav-link" href="{{ url('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                  
                        </div>          
</nav>
</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </header>
    <div class="menu">
            <div class="background_image" style="background-image:url(images/menu.jpg)"></div>
            <div class="menu_content d-flex flex-column align-items-center justify-content-center">
                <ul class="menu_nav_list text-center">
                    <li><a href="{{ url('nuatthaihome') }}">Home</a></li>
                    <li><a href="{{ url('nuatthaiaboutus') }}">About us</a></li>
                    <li><a href="{{ url('nuatthaivirtualtour') }}">Virtual Tour</a></li>
                    <li><a href="{{ url('website/pages/services') }}">Services</a></li>
                    <li><a href="{{ url('website/pages/reservation') }}">Reservation</a></li>
                    <li><a href="{{ url('website/pages/profile') }}">Profile</a></li>
                    <li><a class="bookmassage-btn"data-toggle="modal" data-target="#myModal">Book Massage</a></li>
                </ul>
            </div>
            
    </div>

		
<style>
    .btn-success {
        color: #fff;
        background-color: #04083a;
        border-color: #04083a;
	}
	.btn-success:hover {
    color: #fff500;
    background-color: #04083a;
    border-color: #04083a;
}

a.bookmassage-btn {
    color: white !important;
}
</style>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
  @if ($user = Auth::user())
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Please proceed to book massage reservation</p>
      </div>
      <div class="modal-footer">
	  	<a href="/bookmassages/create"><button type="button" class="btn btn-success">Proceed</button></a>
	    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    @else
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Please register or login to continue</p>
      </div>
      <div class="modal-footer">
	  	<a href="{{ route('login') }}"><button type="button" class="btn btn-success">Log In</button></a>
		<a href="{{ route('register') }}"><button type="button" class="btn btn-default">Register</button></a>
      </div>
    </div>
    @endif
  </div>
</div>

