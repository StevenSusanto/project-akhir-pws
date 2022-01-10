@extends('layouts.main')
@section('container')
    <!-- Page Content-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Frequently Asked Questions</h1>
                <p class="lead fw-normal text-muted mb-0">Have Some Questions?</p>
            </div>
            <div class="row gx-5">
                <div class="col-xl-8">
                    <!-- FAQ Accordion 1-->
                    <h2 class="fw-bolder mb-3">About DevCamp</h2>
                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What is Tokopedia Dev-Camp?</button></h3>
                            <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Tokopedia Dev-Camp is a 6-day intensive training and hackathon program for the final year or post-graduate students with tech-related background.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Why join Tokopedia Dev-Camp?</button></h3>
                            <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    In this program, not only will you learn through the program run by us on how Tokopedia really operates and be challenged through a hands on experience to develop new products during the DevCamp hackathon, but you will also have the opportunity to connect to our management team and a golden-ticket chance to work full time here as an engineer at Tokopedia.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">What are the benefits?</button></h3>
                            <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>-Winners will get prizes that are worth up to Rp 69 million* in total.</p>
                                    <p>-All selected participants are obligated to do 3 months internship at Tokopedia.</p>
                                    <p>-All winners will be mentored and assigned directly by VP of Engineering during their internship period.</p>
                                    <p>-An incredible experience to mingle with Tokopedia top leaders.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Accordion 2-->
                    <h2 class="fw-bolder mb-3">Internship</h2>
                    <div class="accordion mb-5 mb-xl-0" id="accordionExample2">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Internship for participants</button></h3>
                            <div class="accordion-collapse collapse show" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    All selected participants will have the opportunity to do a 3 months internship at Tokopedia.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFive"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Internship for winners</button></h3>
                            <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="headingFive" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    All winners will be mentored directly by VP of Engineering Tokopedia during their internship period.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingSix"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">When can I start my internship?</button></h3>
                            <div class="accordion-collapse collapse" id="collapseSix" aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    Participants may start the internship maximum 6 months after the program finishes. Latest start date for internship is on Feb 28, 2020.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card border-0 bg-light mt-xl-5">
                        <div class="card-body p-4 py-lg-5">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <div class="h6 fw-bolder">Have more questions?</div>
                                    <p class="text-muted mb-4">
                                        Contact us at
                                        <br />
                                        <a href="#!">speakers@tokopedia.com</a>
                                    </p>
                                    <div class="h6 fw-bolder">Follow us</div>
                                    <a class="fs-5 px-2 link-dark" href="https://twitter.com/tokopedia?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="bi-twitter"></i></a>
                                    <a class="fs-5 px-2 link-dark" href="https://www.facebook.com/tokopedia/"><i class="bi-facebook"></i></a>
                                    <a class="fs-5 px-2 link-dark" href="https://www.linkedin.com/company/pt--tokopedia/"><i class="bi-linkedin"></i></a>
                                    <a class="fs-5 px-2 link-dark" href="https://www.youtube.com/channel/UCAFlBkLMn1dmdYk0kBud4RA"><i class="bi-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
