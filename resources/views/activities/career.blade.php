@php
    $title = 'Career guidance and development';
    $para = 'We provide career guidance, coaching and development to youth and others in the community. This is done through one to one environment, career guidance programs and career guidance events. In this area Chanya change has a special eye on Science, Technology, Engineering, Mathematics and Innovation (STEMI) career encouragement for girls and women.'
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
                        </div>
                        <div class="content1" data-aos="fade-up" data-aos-duration="700">
                            <h3>Career guidance is done in form of </h3>

                            <p class="text-size-16"> &rarr; One to one Career counselling </p>
                            <p class="text-size-16"> &rarr; Career guidance in secondary schools and universities </p>
                            <p class="text-size-16"> &rarr; STEMI career guidance for Girls </p>


                        </div>

                        <div class="content3" data-aos="fade-up" data-aos-duration="700">
                            <figure class="image1 mb-3" data-aos="fade-up">
                                <img src="assets/images/activties/career.jpg" alt="{{ $title }}" class="img-fluid"
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
