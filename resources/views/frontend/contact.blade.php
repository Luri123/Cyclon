<body>
@section('title', 'Contact Us')
@include ('frontend.header')
    <div class="container mt-5 pl-0">
        <div class="cU mt-5">
            <h2 class="text-center s32 black">Contact <i>Us</i></h2>
        </div>

        <div class="row mt-4">

            <div class="col-xl-4 col-lg-5 col-md-12 ps-0">
                <div class="contact-item">
                    <div class="contact-icon  d-flex align-items-center justify-content-center">
                        <span class="fa fa-map-marker"></span>
                    </div>
                    <div class="contact-info">
                        <h3 class="s52">Address</h3>
                        <p> 198 West 21th Street, Suite 721 New York NY 10016</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon  d-flex align-items-center justify-content-center">
                        <span class="fa fa-phone"></span>
                    </div>
                    <div class="contact-info">
                        <h3 class="s52">Phone</h3>
                        <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                        <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-paper-plane"></span>
                    </div>
                    <div class="contact-info">
                        <h3 class="s52">Email</h3>
                        <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                        <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                    </div>
                </div>
            </div>

            <div class="contact-item col-xl-8 col-lg-7 col-md-12  d-flex align-items-stretch pb-0">
                <form method="POST" class="needs-validation" id="contactUs" name="contactForm" action="{{ route ('send') }}" novalidate>  
               @csrf
                 <div class="row">
                    <div class="col-md-12">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                            <p class="textMessage"><i class="fa-solid fa-check"></i>&nbsp;{{ $message }}</p>
                            </div>
                         @endif
                    </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name*" required>
                                <div class="invalid-feedback">
                                <i class="fa-solid fa-exclamation"></i>&nbsp;Please fill the name field
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
                                <div class="invalid-feedback">
                                <i class="fa-solid fa-exclamation"></i>&nbsp;Please fill the email field
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject*" required>
                                <div class="invalid-feedback">
                                <i class="fa-solid fa-exclamation"></i>&nbsp;Please fill the subject field
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Your message..." required></textarea>
                                <div class="invalid-feedback">
                                <i class="fa-solid fa-exclamation"></i>&nbsp;Please fill the message field
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btnC">
                                <div class="submitting"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            

          
        </div>
    </div>

    <div class="container mt-3">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12341917.587345691!2d3.7134584135224453!3d40.95599752660652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d4fe82448dd203%3A0xe22cf55c24635e6f!2sItaly!5e0!3m2!1sen!2s!4v1675597450844!5m2!1sen!2s"
            width="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    @include ('frontend.footer')
</body>

</html>