@php
    $title = 'Events';
    $para = 'Chanya change believes in events as a means of bringing people together and communicating a specific message. Events enable career development as they allow learning, demonstration and networking for better results. Events organised by chanya change can be categories into:'
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
                            <p class="col-xl-7 col-lg-9 mx-auto text-white text-size-16">Employable Youth and Women for
                                Sustainable Economic Development
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



    <section class="singleblog-section blogpage-section mt-3">
        <div class="container">
            <div class="row">
                <br>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="main-box">

                        <div class="content1" data-aos="fade-up" data-aos-duration="700">
                            <h2>{{ $title }}</h2>

                            <p class="text-size-16">{{ $para }}</p>
                            <hr style="width: 3px; border-color: orange; thickness: 3px; height: 10px;">
                        </div>

                        <div class="row">
                            <div class="col-6 content1">
                                <h3>Women Empowerment Events</h3>
                                <p class="text-size-16">
                                    Events that focus on career advancements for girls and women. Some of the events previously done include Arusha women celebration, ladies talk with madam Pam and Chanya Change Female Youth Awards (CFEYA).
                                </p>
                            </div>
                            <div class="col-6">
                                <figure class="image1 mb-3" data-aos="fade-up">
                                    <img src="assets/images/activties/women.jpg" alt="{{ $title }}" class="img-fluid"
                                        loading="lazy">
                                </figure>
                            </div>
                        </div>
                        <hr style="width: 3px; border-color: orange; thickness: 3px; height: 10px;">
                        <hr style="width: 100%; border-color: orange; border-width: 3px; border-style: solid;">
                        <div class="row">
                            <div class="col-6 content1">
                                <h3>Digital Technology and Innovation events</h3>
                                <p class="text-size-16">
                                    Chanya Change conduct events to foster digital transformation and fostering innovation. Some of the events are organised by Chanya change and some are organised with other partners. Some of the digital technology and innovation events that happened include Healthy Tech Girls workshop (marking the International girls in ICT Day), Arusha ICT Summit, Arusha Innovation Summit and Innovation week Arusha.
                                </p>
                            </div>
                            <div class="col-6">
                                <figure class="image1 mb-3" data-aos="fade-up">
                                    <img src="assets/images/activties/ict.webp" alt="{{ $title }}" class="img-fluid"
                                        loading="lazy">
                                </figure>
                            </div>
                        </div>
                        <hr style="width: 3px; border-color: orange; thickness: 3px; height: 10px;">
                        <hr style="width: 100%; border-color: orange; border-width: 3px; border-style: solid;">
                        <div class="row">
                            <div class="col-6 content1">
                                <h3>Networking Events</h3>
                                <p class="text-size-16">
                                    These events are aimed at bringing different stakeholders together for networking that enables collaboration. One of the event done to enable networking was the Surprise night with madam Pam.
                                </p>
                            </div>
                            <div class="col-6">
                                <figure class="image1 mb-3" data-aos="fade-up">
                                    <img src="assets/images/activties/advocacy.jpg" alt="{{ $title }}" class="img-fluid"
                                        loading="lazy">
                                </figure>
                            </div>
                        </div>
                        <hr style="width: 3px; border-color: orange; thickness: 3px; height: 10px;">
                        <hr style="width: 100%; border-color: orange; border-width: 3px; border-style: solid;">

                        </div>
                        <div class="content3" data-aos="fade-up" data-aos-duration="700">
                            <figure class="image1 mb-3" data-aos="fade-up">
                                <img src="assets/images/activties/advocacy.jpg" style="object-fit: cover;" alt="{{ $title }}" class="img-fluid"
                                    loading="lazy">
                            </figure>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    </section>


@endsection
