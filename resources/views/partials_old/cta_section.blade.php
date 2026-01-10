<div class="cta1 sp10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-content-bg"
                    style="background-image: url('{{ asset('assets/img/reliable.svg') }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                    <div class="row">
                        <div class="col-lg-6 m-auto" style="background-color:rgba(28, 26, 35,0.8);border-radius:15px;padding:10px;">
                            <div class="heading1 text-center">
                                <h2 class="text-white">Reliable Boiler Care – Warmth You Can Trust.</h2>
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