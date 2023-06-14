@extends('layouts.master')

@section('title', 'Properties')
@section('description', 'Shina Real Estate HTML Template')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/6.png')}})">
	<div class="auto-container">
    	<div class="clearfix">
        	<div class="pull-left">
            	<h1>Property Detail</h1>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li>Property Detail</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
	<div class="auto-container">
    	<div class="row clearfix">
            <!--Content Side / Property Detail-->
            <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
            	<div class="property-detail">
					<div class="inner-box">
                    	<!--Upper Box-->
                        <div class="upper-box">
                        	<h2>{{ $data->name }}</h2>
                            <div class="location">{{ $data->locality }}</div>
                            <ul class="post-detail">
                                <li><span class="icon fa fa-calendar"></span>{{ Carbon\Carbon::parse($data->created_at)->format('M d, Y') }}</li>
                                <li><span class="icon fa fa-map-marker"></span>Donceles 99, Centro Histórico, 06000 Centro, CDMX, Mexico</li>
                            </ul>
                        </div>
                        
                        <!--Carousel Box-->
                        <div class="carousel-box">
                        	<div class="property-single-carousel owl-carousel owl-theme">
                            	<div class="slide">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/resource/property-19.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/resource/property-19.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/resource/property-19.jpg')}}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <h3>Property Detail</h3>
                        <div class="text">
                        	<p>Fantastic One Bedroom Facing East In This Amazing Trump Place Doorman Building. There Is A Large Kitchen, Washer And Dryer, Great Light And Plenty Of Closet Space. In Addition, There Are Amazing Custom Made ‘Built Ins’ In The Living Room Providing Plenty Of Storage. The Building Has A Gym, Pool, Children’s Room, Valet Services, Full Time Concierge And Doorman.</p>
                            <blockquote>Main bath has been remodeled including a large shower with a tiled sitting bench. Back yard patio includes no-maintenance cover with built in lights. extra storage inside and out.</blockquote>
                            <p>Short sale approved at $440,000!! home with remodeled kitchen, upgraded cabinets and countertops, open floorplan with spacious layout including a huge separate family room. New windows and newer roof, new airconditioning, fully permitted additonal square footage to the original home. This is a beauty. Huge master with separate sitting/dressing area that would make a perfect nursery.Bonus walk in storage closet in family room.</p>
                        </div>
                        
                        <h4>Home Amenities</h4>
                        <!--List Columns-->
                        <div class="list-columns">
                            <div class="row clearfix">
                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                    <ul class="list-style-three">
                                        <li>Price: $500,000,0</li>
                                        <li>Property Types: Resident</li>
                                        <li>Country: USA</li>
                                        <li>Garages: 3</li>
                                        <li>Bathrooms: 4</li>
                                    </ul>
                                </div>
                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                    <ul class="list-style-three">
                                        <li>For: Sale</li>
                                        <li>Area: 1000SQFT</li>
                                        <li>City: Sterling</li>
                                        <li>Bedrooms: 6</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Default Form-->
                        <div class="default-form style-two">
                            <form method="post" action="contact.html">
                            	<div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="username" value="" placeholder="Full Name" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="email" value="" placeholder="Email Address" required>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" placeholder="Massage"></textarea>
                                    </div>
                                    
                                    <div class="form-group text-right col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-three">Send Now <span class="icon fa fa-edit"></span></button>
                                    </div>                                        
                                </div>
                            </form>
                        </div>
                        <!--End Default Form-->
                        
                    </div>
                </div>
            </div>
            
            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
            	<aside class="sidebar">
                	
                    <!--Property Form Widget-->
                    <div class="property-form-widget">
                    	<h2>Search For Properties</h2>
                        <div class="inner-widget">
                        	
                            <!-- Property Form -->
                            <div class="property-search-form">
                                <!--Form-->
                                <form method="post" action="blog.html">
                                    
                                    <div class="row clearfix">
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <label class="field-label">Status</label>
                                            <select class="custom-select-box">
                                                <option>Any</option>
                                                <option>New York</option>
                                                <option>California</option>
                                                <option>Chicago</option>
                                                <option>Melborne</option>
                                            </select>
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <label class="field-label">Location</label>
                                            <select class="custom-select-box">
                                                <option>Any</option>
                                                <option>Any One</option>
                                                <option>Any Two</option>
                                                <option>Any Three</option>
                                                <option>Any Four</option>
                                            </select>
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label class="field-label">City</label>
                                            <select class="custom-select-box">
                                                <option>Any</option>
                                                <option>New York</option>
                                                <option>California</option>
                                                <option>Chicago</option>
                                                <option>Melborne</option>
                                            </select>
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label class="field-label">Country</label>
                                            <select class="custom-select-box">
                                                <option>Any</option>
                                                <option>USA</option>
                                                <option>Canada</option>
                                                <option>France</option>
                                                <option>Pakistan</option>
                                            </select>
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <label class="field-label">House Category</label>
                                            <select class="custom-select-box">
                                                <option>Any</option>
                                                <option>Category One</option>
                                                <option>Category Two</option>
                                                <option>Category Three</option>
                                                <option>Category Four</option>
                                            </select>
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label class="field-label">Price From</label>
                                            <select class="custom-select-box">
                                                <option>Any</option>
                                                <option>10</option>
                                                <option>100</option>
                                                <option>1000</option>
                                                <option>10000</option>
                                            </select>
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label class="field-label">Price To</label>
                                            <select class="custom-select-box">
                                                <option>Any</option>
                                                <option>10</option>
                                                <option>100</option>
                                                <option>1000</option>
                                                <option>10000</option>
                                            </select>
                                        </div>
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label class="field-label">Bedrooms Min</label>
                                            <select class="custom-select-box">
                                                <option>Any</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label class="field-label">Bedrooms Max</label>
                                            <select class="custom-select-box">
                                                <option>Any</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    	<!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <button class="theme-btn search-btn" type="submit" name="submit-form">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget properties-posts">
                        <div class="sidebar-title">
                        	<h3>Map View</h3>
                            <div class="separator"></div>
                        </div>
	                    <!--Property Map Section-->
	                    <div class="property-map-section">
	                    	<!--Map Outer-->
	                        <div class="map-outer">
	                            <!--Map Canvas-->
	                            <div class="map-canvas"
	                                data-zoom="12"
	                                data-lat="-37.817085"
	                                data-lng="144.955631"
	                                data-type="roadmap"
	                                data-hue="#ffc400"
	                                data-title="Envato"
	                                data-icon-path="{{ asset('assets/images/icons/map-marker.png')}}"
	                                data-content="Melbourne VIC 3000, Australia<br><a href=''>info@youremail.com</a>">
	                            </div>
	                        </div>
	                    </div>
	                </div>
                    
                    <!-- Properties Posts -->
                    <div class="sidebar-widget properties-posts">
                        <div class="sidebar-title">
                        	<h3>Similar Properties</h3>
                            <div class="separator"></div>
                        </div>

                        <article class="post">
                        	<figure class="post-thumb"><a href="#"><img src="{{ asset('assets/images/resource/post-thumb-3.jpg')}}" alt=""></a></figure>
                            <h4><a href="#">401 Biscayne Boulevard</a></h4>
                            <div class="address">Unit 4/Street 14 Indus Street </div>
                            <div class="post-info">Price: 11,412</div>
                        </article>
                        
                        <article class="post">
                        	<figure class="post-thumb"><a href="#"><img src="{{ asset('assets/images/resource/post-thumb-4.jpg')}}" alt=""></a></figure>
                            <h4><a href="#">10 Romain St, Twin Peaks</a></h4>
                            <div class="address">Unit 4/Street 14 Indus Street </div>
                            <div class="post-info">Price: 11,412</div>
                        </article>
                        
                        <article class="post">
                        	<figure class="post-thumb"><a href="#"><img src="{{ asset('assets/images/resource/post-thumb-5.jpg')}}" alt=""></a></figure>
                            <h4><a href="#">Gorgeous Farm in Myrtle</a></h4>
                            <div class="address">Unit 4/Street 14 Indus Street </div>
                            <div class="post-info">Price: 11,412</div>
                        </article>
                    </div>                    
                </aside>
            </div>
            <!--End Sidebar Side-->
            
        </div>
    </div>
</div>
<!--End Sidebar Page Container-->

@endsection