@extends('partials.master')
@section('title', 'Advocacy and Awareness | Chanya Change')
@section('content')
@php
    $title = 'Advocacy and Awareness';
@endphp
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

                            <p class="text-size-16">Chanya change performs advocacy and awareness creation on various policy and community issues. This is done through digital and physical modes. Could be in terms of campaigns, participation in invited activities and any other form that is seen to be working based on the context. Advocacy and awareness is mainly done on issues related to career, life skills, digital transformation and health aspects.</p>
                        </div>
                        <div class="content3" data-aos="fade-up" data-aos-duration="700">
                            <figure class="image1 mb-3" data-aos="fade-up">
                                <img src="assets/images/activties/advocacy.jpg" alt="Chanya change advocacy image" class="img-fluid"
                                    loading="lazy">
                            </figure>

                        </div>

                        {{-- <p class="text text-size-16">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae
                            ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                            ipsam voluptatem quia voluptas.
                        </p>
                        <div class="content3" data-aos="fade-up" data-aos-duration="700">
                            <figure class="image1 mb-3" data-aos="fade-up">
                                <img src="assets/images/singleblog-image2.jpg" alt="image" class="img-fluid"
                                    loading="lazy">
                            </figure>
                            <p class="text text-size-16">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum.
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae
                                ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
                                enim ipsam voluptatem quia voluptas.
                            </p>
                        </div> --}}



                    </div>
                </div>

            </div>
        </div>
    </section>



    </section>
    <!-- Succeed -->

    <!-- Consultation -->


@endsection
