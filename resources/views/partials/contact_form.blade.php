<div class="row">
    <div class="col-lg-6 m-auto">
        <div class="heading1 text-center space-margin60">
            <h5 class="vl-section-subtitle" data-aos="zoom-in" data-aos-duration="900">
                <img src="{{ asset('assets/img/icons/sub-logo1.svg') }}" alt="">CONTACT US
            </h5>
            <div class="space16"></div>
            <h2 class="vl-section-title" data-aos="zoom-in" data-aos-duration="1000">Request a Free Quote</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="img1 image-anime">
            <img src="{{ asset('assets/img/all-images/contact/contact-img1.png') }}" alt="">
        </div>
    </div>

    <div class="col-lg-6">
        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="contact1-boxarea" data-aos="fade-left" data-aos-duration="1200">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="input-area">
                            <input type="text" placeholder="First Name" name="first_name" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="input-area">
                            <input type="text" placeholder="Last Name" name="last_name" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="input-area">
                            <input type="email" placeholder="Email Address" name="email" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="input-area">
                            <input type="tel" name="phone" placeholder="Phone Number" inputmode="numeric"
                                pattern="[0-9\s\-()+]*" required />
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="input-area">
                            <select name="service" id="country" class="country-area nice-select" required>
                                <option value="Boiler Services" data-display="Boiler Services" disabled>Boiler
                                    Services</option>
                                <option value="Boiler Installation">Boiler Installation</option>
                                <option value="Boiler Replacement">Boiler Replacement</option>
                                <option value="Boiler Repair">Boiler Repair</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="input-area">
                            <textarea placeholder="Type Your Message" name="message" required></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="input-area">
                            <button type="submit" class="vl-btn1">Submit Message <i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>