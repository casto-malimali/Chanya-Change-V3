@php
    $title = 'Newsletter';
    $para = '.'
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
                            <h2>Subscribe</h2>
                            <div class="container mt-5">
                                <h1>Subscribe to our Newsletter</h1>

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

                                <form action="{{ route('newsletter.subscribe') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2">Subscribe</button>
                                </form>
                            </div>



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
