<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- stylesheet link -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- font awsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>BOSE</title>
</head>

<body>
    <!-- section bose start -->
    <section id="bose">
        <div class="container-fluid position-relative">
            <img src="{{asset('assets/images/black-section.png')}}" class="position-absolute end-0 black-section"
                alt="black-section">
            <img src="{{asset('assets/images/color-line-image.png')}}" class="position-absolute  end-0 color-line-image"
                alt="color-line-image">
            <img src="{{asset('assets/images/headphone-shadow.png')}}" class="position-absolute headphone-shadow headphone-shadow"
                alt="headphone-shadow">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-8 col-sm-8">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="#"><img src="{{asset('assets/images/bose-logo.png')}}" alt="bose-logo"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse " id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" aria-current="page" href="#"><b>Headphones</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="#headphone-img"><b>Speakers</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="#perfect-sound"><b>Audio sunglasses</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="#battery-life" tabindex="-1"
                                            aria-disabled="true"><b>Support</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"> <img
                                                src="{{asset('assets/images/nav-cart.png')}}" class="shop nav-img" alt="nav-cart">
                                            <img src="{{asset('assets/images/nav-search.png')}}" class="shop" class="px-2 shop"
                                                alt="nav-search">
                                            <img src="{{asset('assets/images/nav-person.png')}}" class="shop" alt="nav-person">
                                            <img src="assets/images/nav-dropdown.png" class="shop"
                                                alt="nav-dropdown"></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8 quiet-comfort">
                        <h1><b>QuietComfort <br>35 wireless <br>headphones II</b></h1>
                        <p class="color"><small>Select your color :</small></p>
                        <img src="{{asset('assets/images/landing-color-one.png')}}" alt="landing-color-one">
                        <img src="{{asset('assets/images/landing-color-two.png')}}" class="px-2" alt="landing-color-two">
                        <img src="{{asset('assets/images/landing-color-three.png')}}" alt="landing-color-three">
                        <img src="{{asset('assets/images/landing-color-four.png')}}" class="px-2" alt="landing-color-four">
                        <img src="{{asset('assets/images/landing-color-five.png')}}" alt="landing-color-five">
                        <p class="text-start"><small>Silver</small></p>
                        <div class="d-flex">
                            <h3><b>$229.95</b></h3>
                            <button class="btn bg-dark rounded-pill text-white px-5 ms-4 px-md-1 buy-now"><b>BUY
                                    NOW</b></button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-4">
                        <img src="{{asset('assets/images/landing-headphone-img.png')}}" class="landing-headphone-img"
                            alt="landing-headphone-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section bose end -->
    <!-- section headphone-img start -->
    <section id="headphone-img">
        <div class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
                    crossorigin="anonymous">
                <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active ">
                            <div class="card-wrapper container-sm d-flex">
                                <div>
                                    <img src="{{asset('assets/images/slider-img-one.png')}}" class="card-img-top"
                                        alt="slider-img-one" width="220px" height="290px">
                                </div>
                                <div>
                                    <img src="{{asset('assets/images/slider-img-two.png')}}" class="card-img-top"
                                        alt="slider-img-two" width="270px" height="290px">
                                </div>
                                <div>
                                    <img src="{{asset('assets/images/slider-img-three.png')}}" class="card-img-top"
                                        alt="slider-img-three" width="270px" height="290px">
                                </div>
                                <div>
                                    <img src="{{asset('assets/images/slider-img-four.png')}}" class="card-img-top"
                                        alt="slider-img-four" width="270px" height="290px">
                                </div>
                                <div>
                                    <img src="{{asset('assets/images/slider-img-five.png')}}" class="card-img-top"
                                        alt="slider-img-five" width="270px" height="290px">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-wrapper container-sm d-flex">
                                <div>
                                    <img src="{{asset('assets/images/slider-img-one.png')}}" class="card-img-top"
                                        alt="slider-img-one" width="270px" height="290px">
                                </div>
                                <div>
                                    <img src="{{asset('assets/images/slider-img-two.png')}}" class="card-img-top"
                                        alt="slider-img-two" width="270px" height="290px">
                                </div>
                                <div>
                                    <img src="{{asset('assets/images/slider-img-three.png')}}" class="card-img-top"
                                        alt="slider-img-three" width="270px" height="290px">
                                </div>
                                <div>
                                    <img src="{{asset('assets/images/slider-img-four.png')}}" class="card-img-top"
                                        alt="slider-img-four" width="270px" height="290px">
                                </div>
                                <div>
                                    <img src="{{asset('assets/images/slider-img-five.png')}}" class="card-img-top"
                                        alt="slider-img-five" width="270px" height="290px">
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <i class="fa-solid fa-angle-left text-dark"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <i class="fa-solid fa-angle-right text-dark"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>




                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
                        crossorigin="anonymous"></script>
                </div>
            </div>
        </div>
    </section>
    <!-- section headphone-img end -->
    <!-- section perfect-sound start -->


    <section id="perfect-sound">
        <div class="container mt-5 text-dark">
            <br>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link text-dark active" data-bs-toggle="tab" href="#home"><b>Overview</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="tab" href="#menu1"><b>Space</b></a>
                </li>
                <li class="nav-item text-dark">
                    <a class="nav-link text-dark" data-bs-toggle="tab" href="#menu2"><b>Reviews</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="tab" href="#menu3"><b>Accessories</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="tab" href="#menu4"><b>Support</b></a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                    <div class="row">
                        <div class="col-lg-4 col-sm-4">
                            <img src="{{asset('assets/images/perfect-section-img.png')}}"
                                class="perfect-section-img position-absolute" alt="perfect-section-img" width="550px">
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <span>
                                <h1><b>Perfect sound <br>immersive world</b></h1>
                                <p>QuietComfort 35 wireless headphones II are engineered with <br>renowned noise
                                    cancellation. with the Google Assistant and <br>Amazon Alexa built-in, you have
                                    instant
                                    access to million of <br>songs, playlists and more-hands free.</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    <div class="row">
                        <div class="col-lg-4 col-sm-4">
                            <img src="{{asset('assets/images/signup-img.png')}}" class="signup-img position-absolute"
                                alt="signup-img" height="534px" width="480px">
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <span>
                                <h1><b>Perfect sound <br>Comfort feel</b></h1>
                                <p>QuietComfort 35 wireless headphones II are engineered with <br>renowned noise
                                    cancellation. with the Google Assistant and <br>Amazon Alexa built-in, you have
                                    instant
                                    access to million of <br>songs, playlists and more-hands free.</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                    <div class="row">
                        <div class="col-lg-4 col-sm-4">
                            <img src="{{asset('assets/images/battery-section-img.png')}}"
                                class="battery-section-img position-absolute" alt="battery-section-img" width="490px">
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <span>
                                <h1><b>Perfect sound <br>Long Lasting Battry Life </b></h1>
                                <p>QuietComfort 35 wireless headphones II are engineered with <br>renowned noise
                                    cancellation. with the Google Assistant and <br>Amazon Alexa built-in, you have
                                    instant
                                    access to million of <br>songs, playlists and more-hands free.</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="menu3" class="container tab-pane fade"><br>
                    <div class="row">
                        <div class="col-lg-4 col-sm-4">
                            <img src="{{asset('assets/images/accesories.jpg')}}" class="accesories position-absolute"
                                alt="accesories" height="490px" width="369px">
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <span>
                                <h1><b>Perfect sound <br>With free Accessories</b></h1>
                                <p>QuietComfort 35 wireless headphones II are engineered with <br>renowned noise
                                    cancellation. with the Google Assistant and <br>Amazon Alexa built-in, you have
                                    instant
                                    access to million of <br>songs, playlists and more-hands free.</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="menu4" class="container tab-pane fade"><br>
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('assets/images/suopport.jpg')}}" class="suopport position-absolute" alt="suopport"
                                height="490px" width="369px">
                        </div>
                        <div class="col-lg-6">
                            <span>
                                <h1 class="support-heading"><b>Perfect sound <br> free Support</b></h1>
                                <p class="support-paragraph">QuietComfort 35 wireless headphones II are engineered with
                                    renowned noise
                                    cancellation. with the Google Assistant and Amazon Alexa built-in, you have
                                    instant
                                    access to million of songs, playlists and more-hands free.</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section perfect-sound end -->
    <!-- section premium-design start -->
    <section id="premium-design">
        <div class="container-fluid">
            <div class="container">
                <div class="text-center">
                    <h1><b>Premium design</b></h1>
                    <p class="mt-3">when you wnt to take your music anywhere, you need <br> headphones built to keep up.
                        with
                        impact-resistant materials, <br> glass-filled nylon, and corrosion-resistant stainless steel,
                        <br>they're engineered to survive life on the go.
                    </p>
                </div>
            </div>
            <div class="row position-relative">
                <div class="col-lg-4 col-sm-4 col-md-4 ps-0">
                    <img src="{{asset('assets/images/premium-img-one.png')}}" class="premium-img-one" alt="premium-img-one">
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4">
                    <img src="{{asset('assets/images/premium-img-two.png')}}" class="premium-img-two" alt="premium-img-two"
                        width="1000px" height="750px">
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4">
                    <img src="{{asset('assets/images/premium-img-three.png')}}" class="position-absolute premium-img-three"
                        alt="premium-img-three">
                </div>
            </div>
        </div>
    </section>
    <!-- section premium-design end -->
    <!-- section battery-life start -->
    <section id="battery-life">
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <div class="justify-content-center">
                        <h1><b>Up to 20 hours <br> battery life</b></h1>
                        <p>Enjoy up to 20 hours of listening. enough time to pore <br>through this entire playlist. So
                            you can skeep the music-or <br> the quiet - going all day long. And when it finally runs
                            down, <br>a quick 15-minute change gives you another 2.5 hours.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <img src="{{asset('assets/images/battery-section-img.png')}}" alt="battery-section-img" height="800px">
                </div>
            </div>
        </div>
    </section>
    <!-- section battery-life end -->
    <!-- section related-product start -->
    <section id="related-product">
        <div class="container-fluid bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-sm-10 col-md-10 pt-md-2">
                        <h1 class="heading"><b>Related product</b></h1>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        <button class="btn rounded-pill border-2 border-dark px-5 px-md-3 heading"><b>SHOW
                                ALL</b></button>
                    </div>
                </div>
                <div class="scroll-card">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{asset('assets/images/product-img-one.png')}}" alt="product-img-one" width="180px">
                            <h5>QuietComfort 35 <br>Wireeless <br>headphones II</h5>
                            <p class="text-secondary">$449.99</p>
                        </div>
                        <div class="card">
                            <img src="{{asset('assets/images/Product-img-two.png')}}" alt="Product-img-two" width="230px">
                            <h5>SoundLink&reg; <br>aroundear wireless <br>headphones</h5>
                            <p class="text-secondary">$269.99</p>
                        </div>
                        <div class="card">
                            <img src="{{asset('assets/images/product-img-three.png')}}" alt="product-img-three" width="200px">
                            <h5>Bose on-ear <br>wireless <br>headphones</h5>
                            <p class="text-secondary">$209.99</p>
                        </div>
                        <div class="card">
                            <img src="{{asset('assets/images/prduct-img-five.png')}}" alt="product-img-four" width="160px">
                            <h5 class="text">Bose Noise <br> Cancelling <br> Headphones 7</h5>
                            <p class="text-secondary">Comming Soon</p>
                        </div>
                        <div class="card">
                            <img src="{{asset('assets/images/product-img-one.png')}}" alt="product-img-one" width="180px">
                            <h5>QuietComfort 35 <br>Wireeless <br>headphones II</h5>
                            <p class="text-secondary">$449.99</p>
                        </div>
                        <div class="card">
                            <img src="{{asset('assets/images/Product-img-two.png')}}" alt="Product-img-two" width="230px">
                            <h5>SoundLink&reg; <br>aroundear wireless <br>headphones</h5>
                            <p class="text-secondary">$269.99</p>
                        </div>
                        <div class="card">
                            <img src="{{asset('assets/images/product-img-three.png')}}" alt="product-img-three" width="200px">
                            <h5>Bose on-ear <br>wireless <br>headphones</h5>
                            <p class="text-secondary">$209.99</p>
                        </div>
                        <div class="card">
                            <img src="{{asset('assets/images/prduct-img-five.png')}}" alt="product-img-four" width="160px">
                            <h5 class="text">Bose Noise <br> Cancelling <br> Headphones 7</h5>
                            <p class="text-secondary">Comming Soon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section related-product start -->
    <!-- section signup start -->
    <section id="signup">
        <div class="container-fluid bg-dark text-white position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <img src="{{asset('assets/images/signup-img.png')}}" class="position-absolute" alt="signup-img"
                            height="650px">
                    </div>
                    <div class="col-lg-8 col-sm-12 col-md-8">
                        <h1 class="heading">Being first has it's <br>perks</h1>
                        <p class="py-3 heading">Sign up to get more information about Bose, <br> exclusive first looks
                            at
                            promotions, new products <br> and more.</p>
                        <div class="d-flex heading">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Your e-mail here">
                            <button class="btn rounded-pill bg-white text-dark px-5 ms-3 "><b>SIGN UP</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section signup end -->
    <!-- section footer start -->
    <section id="footer">
        <div class="container-fluid bg-dark">
            <div class="container text-white">
                <div class="row">
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        <img src="{{asset('assets/images/footer-img.png')}}" alt="footer">
                    </div>
                    <div class="col-lg-10 col-sm-10 col-md-10">
                        <p class="ms-3"><b><span>Headphones</span> <span>Speakers</span> <span>Audio sunglasses</span>
                                <span>Support</span> <span>Contact</span></b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section footer end -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> -->
</body>

</html> 