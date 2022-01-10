@extends('layouts.main')
@section('container')
<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Header-->
        <header class="py-5">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xxl-6">
                        <div class="text-center my-5">
                            <h1 class="fw-bolder mb-3">About Us</h1>
                            <p class="lead fw-normal text-muted mb-4">Tokopedia is an Indonesian technology company with a mission to
                                democratize commerce through technology.</p>
                            <a class="btn btn-primary btn-lg" href="#scroll-target">Read our story</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About section one-->
        <section class="py-5 bg-light" id="scroll-target">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="\dist\img\banner-1.jpg" alt="banner-1" /></div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder">The Journey of Tokopedia and Our Merchants</h2>
                        <p class="lead fw-normal text-muted mb-0">Throughout the past decade, we’ve stumbled upon many hurdles. Fortunately, we have cultivated strong friendships with merchants and communities across Indonesia, while strengthening our bond with our Nakama, who we call family.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section two-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="\dist\img\banner-2.jpg" alt="banner-2" /></div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder">Not Just About Us, But The Communities Around Us</h2>
                        <p class="lead fw-normal text-muted mb-0">We are committed to helping the less fortunate communities by providing resources or knowledge, to ultimately make their lives better. Our reach focuses on four main areas: People with Disabilities, Natural Disaster Victims, Education & Technology, and Women Empowerment.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team members section-->
        <section class="py-5 bg-light">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="fw-bolder">Our team</h2>
                    <p class="lead fw-normal text-muted mb-5">We're Dedicated to build a quality and make your dream come true</p>
                </div>
                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="\dist\img\william-tanuwijaya.jpg" alt="william-tanuwijaya" />
                            <h5 class="fw-bolder">William Tanuwijaya</h5>
                            <div class="fst-italic text-muted">Founder &amp; CEO</div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="\dist\img\jacky-lo.jpeg" alt="jacky-lo" />
                            <h5 class="fw-bolder">Jacky Lo</h5>
                            <div class="fst-italic text-muted">CFO</div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-sm-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="\dist\img\andi-yusuf.jpg" alt="andi-yusuf" />
                            <h5 class="fw-bolder">Yusuf Andi Muchtisar</h5>
                            <div class="fst-italic text-muted">Operations Manager</div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="\dist\img\herman-widjaja.jpeg" alt="herman-widjaja" />
                            <h5 class="fw-bolder">Herman Widjaja</h5>
                            <div class="fst-italic text-muted">CTO</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
@endsection