@extends('layouts.app')
@section('title', 'User Dashboard')
@section('content')
    <section class="page-title" style="background-image:url('{{ asset('frontend/assets2/images//background/10.jpg') }}')">
        <!-- <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Dashboard</h2>
                <ul>
                    <li><a href="{{route('home')}}">home</a></li>
                    <li> My profile</li>
                </ul>
            </div>
        </div> -->
        <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>Dashboard</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>My profile</li>
                    </ul>
                    
                </div>
        </div>
    </section>
    <section class="container pt-4 pb-5 ">
        <div class="row">
            <div class="col-lg-8">
                Dashboard
            </div>

            <div class="col-4">
                @include('partials.frontend.user.sidebar')
            </div>

        </div>
    </section>
@endsection
