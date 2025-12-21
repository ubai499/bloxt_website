<div class="cta1 sp10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-content-bg"
                    style="background-image: url('{{ asset('assets/img/all-images/cta/cta-img4.png') }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="heading1 text-center">
                                <h2>Reliable Boiler Care – Warmth You Can Trust.</h2>
                                <div class="space32"></div>
                                <form method="POST" action="{{ route('subscribe.store') }}">
                                    @csrf
                                    <input type="text" placeholder="Enter Your Email" name="email" required>
                                    <button type="submit" class="vl-btn1">Subscribe <i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>