@extends('layouts.master')

@section('title', 'Properties')
@section('description', 'Shina Real Estate HTML Template')

@section('content')

<!--Property Section-->
<section class="property-section">
	<div class="auto-container">
    	<!--Sec Title-->
        <div class="sec-title centered">
        	<div class="title">Our Featured Properties For Rent</div>
            <h2>Properties For Rent</h2>
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
                        <div class="price">{{ min(array_filter([$properties->sb_price, $properties->db_price, $properties->tb_price, $properties->fb_price])) }}</div>
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
        </div>
    </div>
</section>
<!--End Property Section-->

@endsection