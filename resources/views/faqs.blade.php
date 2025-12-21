@extends('layouts.master')
@section('content')
    @include('partials.page_title', ['title' => 'FAQs', 'bgColor' => '#b79825'])

    <div class="faq-inner sp1">
        <div class="container">
            <div class="col-lg-8 m-auto">
                <div class="heading1">
                    <h2>Frequently Asked Questions (FAQs)</h2>
                    <div class="space48"></div>
                </div>
                <div class="faq-main-section">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. How often should my boiler be serviced?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We recommend having your boiler serviced annually to ensure it runs safely and
                                        efficiently, and to prevent unexpected breakdowns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="space20"></div>
                        <div class="accordion-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Do you offer emergency boiler repair services?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes, our engineers are available for emergency callouts to restore your heating and
                                        hot water as quickly as possible.</p>
                                </div>
                            </div>
                        </div>
                        <div class="space20"></div>
                        <div class="accordion-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. How long does a typical boiler service take?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>A standard service usually takes between 45 minutes to 1 hour, depending on the type
                                        and condition of your boiler.</p>
                                </div>
                            </div>
                        </div>
                        <div class="space20"></div>
                        <div class="accordion-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. Will servicing my boiler help lower energy bills?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes. Regular servicing improves efficiency, which can reduce energy consumption and
                                        help save on monthly bills.</p>
                                </div>
                            </div>
                        </div>
                        <div class="space20"></div>
                        <div class="accordion-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="1300">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    5. Do you work with all types of boilers?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We service, repair, and install a wide range of boilers, including combi, system, and
                                        conventional models from leading brands.</p>
                                </div>
                            </div>
                        </div>
                        <div class="space20"></div>
                        <div class="accordion-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="1400">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    6. Can you replace my old boiler with a more energy-efficient one?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Absolutely. We can assess your current system and recommend a modern,
                                        energy-efficient boiler that fits your home and budget.</p>
                                </div>
                            </div>
                        </div>
                        <div class="space20"></div>
                        <div class="accordion-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    7. Is your work guaranteed?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes, all our services come with a guarantee for parts and labor, giving you peace of
                                        mind.</p>
                                </div>
                            </div>
                        </div>
                        <div class="space20"></div>
                        <div class="accordion-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="1600">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    8. Do you offer service plans or maintenance packages?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes, we provide flexible service plans that include annual servicing and priority
                                        support to keep your boiler in top condition year-round.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===== CONTACT AREA STARTS =======-->
    <div class="contact1 sp10">
        <div class="container">
            @include('partials.contact_form')
        </div>
    </div>
    <!--===== CONTACT AREA ENDS =======-->

    @include('partials.cta_section')
@endsection