@php
    $title = 'Join Us';
    $para = 'Join Chanya change Community';
@endphp

@extends('partials.master')
@section('title', $title .' | Chanya Change')
@section('content')

    {{-- beadcumb --}}
    <div class="sub_banner position-relative">
        <section class="sub_banner_con position-relative">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-12">
                        <div class="sub_banner_content" data-aos="fade-up">
                            <h1 class="text-white">{{ $title }}</h1>
                            <p class="col-xl-7 col-lg-9 mx-auto text-white text-size-16">Join Chanya Change Community
                            </p>
                            <div class="box">
                                <a href="/" class="text-decoration-none">
                                    <span class="mb-0">Home</span>
                                </a>
                                <i class="arrow fa-solid fa-arrow-right"></i>
                                <span class="mb-0 box_span">{{ $title }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




    <section class="consultation-con position-relative">
        <figure class="consultation-sideimage mb-0">
            <img src="assets/images/consultation-sideimage.png" alt="image" class="image-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="consultation_wrapper position-relative">
                        <figure class="consultation-image mb-0">
                            <img src="assets/images/activties/school.jpg" alt="Chanya Change" class="image-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="consultation_content" data-aos="fade-up">
                        <h6>{{ $title }}</h6>
                        <h2 class="">{{ $para }}</h2>
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form  method="POST" action="{{ route('join-us.store') }}"
                            class="position-relative">

                            @csrf
                            <div class="form-group input1 float-left">
                                <input type="text" class="form_style" placeholder="Name" name="name" id="fname"
                                    required>
                            </div>
                            <div class="form-group float-left">
                                <input type="tel" class="form_style" placeholder="Phone" name="phone" id="phone"
                                    required>
                            </div>
                            <div class="form-group input1 float-left">
                                <input type="email" class="form_style" placeholder="Email" name="email" id="email"
                                    required>
                            </div>
                            <div class="form-group float-left">
                                <select class="form-control" name="communityType" required>
                                    <option value="" disabled selected>Join Community as</option>
                                    <option value="Volunteer">Volunteer</option>
                                    <option value="Student">Student</option>
                                    <option value="Donor">Donor</option>
                                </select>
                            </div>
                            <div class="form-group message">
                                <textarea class="form_style" placeholder="Your Short Description" rows="3" name="description" required></textarea>
                            </div>
                            <button id="submit" type="submit" class="appointment">Join Now<i
                                    class="fa-solid fa-arrow-right"></i></button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
