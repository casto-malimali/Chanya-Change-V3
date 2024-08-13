@extends('partials.master')
@section('title', 'Contact Us | Chanya Change')
@section('content')

{{-- beadcumb --}}
<div class="sub_banner position-relative">
<section class="sub_banner_con position-relative">
    <div class="container position-relative">
        <div class="row">
            <div class="col-12">
                <div class="sub_banner_content" data-aos="fade-up">
                    <h1 class="text-white">Contact Us</h1>
                    <p class="col-xl-7 col-lg-9 mx-auto text-white text-size-16">Join Our Vibrant Community and Connect with Like-Minded Individuals
                    </p>
                    <div class="box">
                        <a href="/" class="text-decoration-none">
                            <span class="mb-0">Home</span>
                        </a>
                        <i class="arrow fa-solid fa-arrow-right"></i>
                        <span class="mb-0 box_span">Contact Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
 {{-- contact us  --}}

 <section class="contact-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact_content text-center" data-aos="fade-up">
                    <h6>Contact info</h6>
                    <h2>Our Contact Information</h2>
                    <p class="col-xl-8 col-lg-10 mx-auto mb-0 text-size-16">  We are always here to assist you with any questions or concerns. Reach out to us via
                    </p>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="contact-box">
                    <figure class="contact-icon">
                        <img src="./assets/images/contact-icon1.png" alt="image" class="img-fluid">
                    </figure>
                    <h5>Our Location</h5>
                    <div class="text">
                        <p class="mb-0 text-size-14">Elerai Majengo Juu, Arusha</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="contact-box">
                    <figure class="contact-icon">
                        <img src="./assets/images/contact-icon2.png" alt="image" class="img-fluid">
                    </figure>
                    <h5>Phone Number</h5>
                    <div class="text">
                        <a href="tel:+255759334659" class="mb-0 text-decoration-none text-size-14">+255 759 334 659</a><br>
                        <a href="tel:+255655611512" class="mb-0 text-decoration-none text-size-14">+255 655 611 512</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="contact-box mb-0">
                    <figure class="contact-icon">
                        <img src="./assets/images/contact-icon3.png" alt="image" class="img-fluid">
                    </figure>
                    <h5>Email us at</h5>
                    <div class="text">
                        <a href="mailto:info@chanyachange.com" class="mb-0 text-decoration-none text-size-14">info@lawfinity.com</a><br>
                        <a href="mailto:chanyachange@gmail.com" class="mb-0 text-decoration-none text-size-14">chanyachange@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form -->
{{-- <section class="consultation-con position-relative">
    <figure class="consultation-sideimage mb-0">
        <img src="assets/images/consultation-sideimage.png" alt="image" class="image-fluid">
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="consultation_wrapper position-relative">
                    <figure class="consultation-image mb-0">
                        <img src="assets/images/contact-image.jpg" alt="image" class="image-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="consultation_content" data-aos="fade-up">
                    <h6>Get in touch</h6>
                    <h2 class="text-white">Send us a Message</h2>
                    <form id="contactpage" method="post" class="position-relative">
                        <div class="form-group input1 float-left">
                            <input type="text" class="form_style" placeholder="Name" name="fname" id="fname">
                        </div>
                        <div class="form-group float-left">
                            <input type="tel" class="form_style" placeholder="Phone" name="phone" id="phone">
                        </div>
                        <div class="form-group input1 float-left">
                            <input type="email" class="form_style" placeholder="Email" name="email" id="email">
                        </div>
                        <div class="form-group float-left">
                            <input type="text" class="form_style" placeholder="Subject" name="subject" id="subject">
                        </div>
                        <div class="form-group message">
                            <textarea class="form_style" placeholder="Message" rows="3" name="msg"></textarea>
                        </div>
                        <button id="submit" type="submit" class="appointment">Send Now<i class="fa-solid fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@include('partials.contacts-book')
<!-- Map -->
<div class="contact_map_con position-relative" data-aos="fade-up">
    <div class="container">

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63727.696096059786!2d35.8670878!3d-3.3547942!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18342126962176af%3A0xd84f1e067b1af37f!2sChanya%20Change!5e0!3m2!1sen!2sus!4v1717084865943!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- Footer -







@endsection
