<header class="header">
		<div class="header_content">

			<!-- Logo -->
			<div class="logo_container d-flex flex-column align-items-center justify-content-center">
				<div class="logo">
					<a href="#" class="text-center">
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
								</ul>
							</nav>
							<a href="{{ url('bookmassages/create') }}" class="button_container header_button ml-auto"><div class="button text-center"><span>Book Massage</span></div></a>
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
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
                </ul>
            </div>
        </div>