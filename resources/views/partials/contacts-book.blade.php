<section class="consultation-con position-relative">
    <figure class="consultation-sideimage mb-0">
        <img src="assets/images/consultation-sideimage.png" alt="image" class="image-fluid">
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="consultation_wrapper position-relative">
                    <figure class="consultation-image mb-0">
                        <img src="assets/images/consultation-image.jpg" alt="image" class="image-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="consultation_content" data-aos="fade-up">
                    <h6>Get in touch</h6>
                    <h2 class="text-white">We're here to help! Feel free to get in touch with us at any time.</h2>
                    <form id="contactpage" method="post" class="position-relative" action="{{ route('contact.store') }}">
                        @csrf
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
                            <select class="form-control">
                                <option>Community</option>
                                <option>Career Guidance</option>
                                <option>Consultation</option>
                                <option>Others</option>
                            </select>
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
</section>
