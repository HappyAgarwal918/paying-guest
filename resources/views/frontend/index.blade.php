@extends('layouts.master')

@section('title', 'Homepage')
@section('description', 'Shina Real Estate HTML Template')

@section('css')
<link href="{{ asset('assets/plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{ asset('assets/plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{ asset('assets/plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
@endsection

@section('content')

@include('frontend.slider')

<!--Property Section-->
<section class="property-section">
	<div class="auto-container">
    	<!--Sec Title-->
        <div class="sec-title centered">
        	<div class="title">Our Featured Properties For Sale and Rent</div>
            <h2>Properties For Sale & Rent</h2>
            <div class="separator"></div>
        </div>
        <div class="row clearfix">
        @foreach($data['properties'] as $properties)
        	<!--Property Block-->
            <div class="property-block col-md-4 col-sm-6 col-xs-12">
            	<div class="inner-box">
                	<div class="image">
                    	<a href="{{ route('propertydetail',encrypt($properties->id))}}"><img src="{{ asset('assets/images/resource/property-1.jpg')}}" alt="" /></a>
                        <div class="sale">{{ $properties->tenant }}</div>
                        <div class="price">${{ min(array_filter([$properties->sb_price, $properties->db_price, $properties->tb_price, $properties->fb_price])) }} Onwards</div>
                    </div>
                    <div class="lower-content">
                    	<div class="upper-box">
                        	<h3><a href="{{ route('propertydetail',encrypt($properties->id))}}">{{ $properties->locality }}</a></h3>
                            <div class="location flow-ellipse">{{ $properties->full_address }}</div>
                            <div class="text">Room Types - {{ $properties->room_type }}</div>
                        </div>
                        <div class="lower-box clearfix">
                        	<div class="pull-left">
                            	<ul>
                                	<li><span class="icon flaticon-bed-1"></span>{{ $properties->sb_room_count+$properties->db_room_count+$properties->tb_room_count+$properties->fb_room_count}}</li>
                                    <li><span class="icon flaticon-bathtube-with-shower"></span>{{ $properties->sb_bathroom_count+$properties->db_bathroom_count+$properties->tb_bathroom_count+$properties->fb_bathroom_count}}</li>
                                    @if($properties->parking != NULL)
                                    <li><span class="icon flaticon-garage"> {{ $properties->parking}}</span></li>
                                    @endif
                                </ul>
                            </div>
                            <div class="pull-right">
                            	<ul>
                                	<li>Listed by - {{ $properties['propertyuser']->username }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            <!--Property Block-->
            <!-- <div class="property-block col-md-4 col-sm-6 col-xs-12">
            	<div class="inner-box">
                	<div class="image">
                    	<a href="property-detail.html"><img src="{{ asset('assets/images/resource/property-2.jpg')}}" alt="" /></a>
                        <div class="sale">Sale</div>
                        <div class="price">$11,512</div>
                    </div>
                    <div class="lower-content">
                    	<div class="upper-box">
                        	<h3><a href="property-detail.html">Gorgeous Farm in Myrtle</a></h3>
                            <div class="location">New Yark</div>
                            <div class="text">Citizens of distant epochs. Jean-François Champollion explorations? Brain is the seed of intelligence from which we</div>
                        </div>
                        <div class="lower-box clearfix">
                        	<div class="pull-left">
                            	<ul>
                                	<li><span class="icon flaticon-bed-1"></span>03</li>
                                    <li><span class="icon flaticon-bathtube-with-shower"></span>03</li>
                                    <li><span class="icon flaticon-garage"></span>02</li>
                                </ul>
                            </div>
                            <div class="pull-right">
                            	<ul>
                                	<li><span class="icon flaticon-squares"></span>1040 square</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            
            <!--Property Block-->
            <!-- <div class="property-block col-md-4 col-sm-6 col-xs-12">
            	<div class="inner-box">
                	<div class="image">
                    	<a href="property-detail.html"><img src="{{ asset('assets/images/resource/property-3.jpg')}}" alt="" /></a>
                        <div class="sale">Sale</div>
                        <div class="price">$12,412</div>
                    </div>
                    <div class="lower-content">
                    	<div class="upper-box">
                        	<h3><a href="property-detail.html">1200 Anastasia Avenue</a></h3>
                            <div class="location">New Yark</div>
                            <div class="text">Citizens of distant epochs. Jean-François Champollion explorations? Brain is the seed of intelligence from which we</div>
                        </div>
                        <div class="lower-box clearfix">
                        	<div class="pull-left">
                            	<ul>
                                	<li><span class="icon flaticon-bed-1"></span>03</li>
                                    <li><span class="icon flaticon-bathtube-with-shower"></span>03</li>
                                    <li><span class="icon flaticon-garage"></span>02</li>
                                </ul>
                            </div>
                            <div class="pull-right">
                            	<ul>
                                	<li><span class="icon flaticon-squares"></span>1040 square</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            
            <!--Property Block-->
            <!-- <div class="property-block col-md-4 col-sm-6 col-xs-12">
            	<div class="inner-box">
                	<div class="image">
                    	<a href="property-detail.html"><img src="{{ asset('assets/images/resource/property-4.jpg')}}" alt="" /></a>
                        <div class="sale">Sale</div>
                        <div class="price">$21,412</div>
                    </div>
                    <div class="lower-content">
                    	<div class="upper-box">
                        	<h3><a href="property-detail.html">10 Romain St, Twin Peaks</a></h3>
                            <div class="location">New Yark</div>
                            <div class="text">Citizens of distant epochs. Jean-François Champollion explorations? Brain is the seed of intelligence from which we</div>
                        </div>
                        <div class="lower-box clearfix">
                        	<div class="pull-left">
                            	<ul>
                                	<li><span class="icon flaticon-bed-1"></span>03</li>
                                    <li><span class="icon flaticon-bathtube-with-shower"></span>03</li>
                                    <li><span class="icon flaticon-garage"></span>02</li>
                                </ul>
                            </div>
                            <div class="pull-right">
                            	<ul>
                                	<li><span class="icon flaticon-squares"></span>1040 square</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            
            <!--Property Block-->
            <!-- <div class="property-block col-md-4 col-sm-6 col-xs-12">
            	<div class="inner-box">
                	<div class="image">
                    	<a href="property-detail.html"><img src="{{ asset('assets/images/resource/property-5.jpg')}}" alt="" /></a>
                        <div class="sale">Sale</div>
                        <div class="price">$25,412</div>
                    </div>
                    <div class="lower-content">
                    	<div class="upper-box">
                        	<h3><a href="property-detail.html">Luxury Villa In Rego Park</a></h3>
                            <div class="location">New Yark</div>
                            <div class="text">Citizens of distant epochs. Jean-François Champollion explorations? Brain is the seed of intelligence from which we</div>
                        </div>
                        <div class="lower-box clearfix">
                        	<div class="pull-left">
                            	<ul>
                                	<li><span class="icon flaticon-bed-1"></span>03</li>
                                    <li><span class="icon flaticon-bathtube-with-shower"></span>03</li>
                                    <li><span class="icon flaticon-garage"></span>02</li>
                                </ul>
                            </div>
                            <div class="pull-right">
                            	<ul>
                                	<li><span class="icon flaticon-squares"></span>1040 square</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--Property Block-->
            <!-- <div class="property-block col-md-4 col-sm-6 col-xs-12">
            	<div class="inner-box">
                	<div class="image">
                    	<a href="property-detail.html"><img src="{{ asset('assets/images/resource/property-6.jpg')}}" alt="" /></a>
                        <div class="sale">Sale</div>
                        <div class="price">$10,412</div>
                    </div>
                    <div class="lower-content">
                    	<div class="upper-box">
                        	<h3><a href="property-detail.html">Biscayne Boulevard</a></h3>
                            <div class="location">New Yark</div>
                            <div class="text">Citizens of distant epochs. Jean-François Champollion explorations? Brain is the seed of intelligence from which we</div>
                        </div>
                        <div class="lower-box clearfix">
                        	<div class="pull-left">
                            	<ul>
                                	<li><span class="icon flaticon-bed-1"></span>03</li>
                                    <li><span class="icon flaticon-bathtube-with-shower"></span>03</li>
                                    <li><span class="icon flaticon-garage"></span>02</li>
                                </ul>
                            </div>
                            <div class="pull-right">
                            	<ul>
                                	<li><span class="icon flaticon-squares"></span>1040 square</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            
        </div>
    </div>
</section>
<!--End Property Section-->

<!--Testimonial Section-->
<section class="testimonial-section">
	<div class="auto-container">
    	<!--Sec Title-->
        <div class="sec-title centered">
            <div class="title">Testimonial</div>
            <h2>What Client Says</h2>
            <div class="separator"></div>
        </div>
        <div class="two-item-carousel owl-carousel owl-theme">
            <!--Testimonial Block Three-->
            @foreach($data['testimonial'] as $testimonial)
            <div class="testimonial-block-three">
            	<div class="inner-box">
                	<div class="text">{{ $testimonial->description }}</div>
                    <div class="author-info">
                    	<div class="author-inner">
                        	<div class="image">
                            	<img src="{{ asset('assets/'.$testimonial->img_path)}}" alt="" />
                            </div>
                            <h3>{{ $testimonial->name }}</h3>
                            <div class="author-designation">{{ $testimonial->designation }}</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--End Testimonial Section-->

@endsection

@section('js')

<!--Revolution Slider-->
<script src="{{ asset('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{ asset('assets/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{ asset('assets/js/main-slider-script.js')}}"></script>
@endsection