@extends('layouts.master')

@section('title', 'Our Agents')
@section('description', 'Shina Real Estate HTML Template')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/6.png')}})">
	<div class="auto-container">
    	<div class="clearfix">
        	<div class="pull-left">
            	<h1>Our Agents</h1>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Agents</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Team Section-->
<section class="team-section style-two">
	<div class="auto-container">
    	<!--Sec Title-->
        <div class="sec-title centered">
        	<div class="title">Meet Our Agents</div>
            <h2>Our Best Agents</h2>
            <div class="separator"></div>
        </div>
        <div class="row clearfix">
            @foreach($data['agents'] as $agent)
            <!--Team Block-->
            <div class="team-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="{{ route('properties',encrypt($agent->id))}}"><img src="{{ asset('assets/images/resource/team-1.jpg')}}" alt="" /></a>
                        <div class="social-box">
                            <p class="agent-properties"><a href="{{ route('properties',encrypt($agent->id))}}">{{ count($agent['properties']) }} Properties</a></p>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="{{ route('properties',encrypt($agent->id))}}">{{ $agent->username }}</a></h3>
                        <div class="designation">Agent</div>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</section>
<!--End Team Section-->

@endsection