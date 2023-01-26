<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>CentrallHouse</title>
    <link rel="shortcut icon" href="../../public/images/icon.png" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN CSS Bootstrap ================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="../../public/css/style.css">
    <!-- ================== END CSS Bootstrap ================== -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-warning">Central</span><span class="text-danger fw-bold">House</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Signup</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner mt-2">
            <div class="carousel-item active">
                <img src="../../public/images/menara-gardens-5924722.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="fw-bold">About Marrakech</h5>
                    <p>Marrakech was founded in 1062 by Yusuf ibn Tashfin, leader of the Moroccan Almoravid empire. He is also considered one of the most prominent leaders of the country,
                        promoting an Islamic system in the whole country, Muslim Spain and the Maghreb.
                        Marrakech became the capital of the Almoravid dominion.</p>
                </div>
            </div>
            <div class="carousel-item mt-2">
                <img src="../../public/images/morocco-2746495.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Touriste in marrakech</h5>
                    <p>30% of the tourists were one of the 3.8 million Moroccans living abroad. Marrakech itself had over 2 million visitors in 2017. In 2019, more than 13 million tourists visited Morocco.
                        In 2020, Morocco witnessed an all time low with no more than 4 million tourists,
                        due to the spread of the COVID-19.</p>
                </div>
            </div>
            <div class="carousel-item mt-2">
                <img src="../../public/images/marrakech-735888.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>why marrakech</h5>
                    <p>Marrakech is also known as the city of luxury, thanks to its famous palaces, 5-star restaurants, luxury spas and hammams and charming riads (traditional houses) in the medina. Amongst others,
                        there is the Mamounia and its enchanting gardens, the luxurious Royal Mansour
                        hammam and the refined cuisine of Namaskar Palace.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- about section  -->

    <section class="about section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-image">
                        <img src="../../public/images/pisicin.jpg" class="img-fluid" style="height: 70vh">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2 class="text-dark mt-2">We present the real <br> moroccan culture</h2>
                        <h5 class="text-secondary mb-2">CentrallHouse present the morrocan hospitality and how Moroccan treat peaple
                            also we try to put a big effort in our service, Morocco is a tolerant, yet traditional culture with strong values and there are one or two
                            etiquette rules to follow to ensure a smooth and respectful trip. As a Muslim country, clothing should be modest as many people are offended
                            by clothes that do not cover legs and shoulders, especially in rural areas.
                            he is one of the best this how CentrallHouse present morocco
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-image">
                        <img src="../../public/images/foods.jpg" class="img-fluid" style="height: 70vh">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2 class="text-dark mt-2">We present the <br> morrocan cuisine</h2>
                        <h5 class="text-secondary mb-2">Moroccan cuisine is known for its rich flavors and diverse ingredients. It is heavily influenced by Berber, Moorish, and Mediterranean cultures. Some popular dishes include tagine,
                            a slow-cooked stew typically made with meat, vegetables, and spices such as cumin and ginger;
                            couscous, a type of pasta made from semolina flour that is often served with vegetables and meat;
                            and bisteeya, a savory pastry filled with meat and nuts. Other traditional ingredients include olives, preserved lemons, and a variety of spices such as saffron, cinnamon, and turmeric
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-image">
                        <img src="../../public/images/hos.jpg" class="img-fluid" style="height: 70vh">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2 class="text-dark mt-2">We present the <br> morrocan hospitality</h2>
                        <h5 class="text-secondary mb-2">Moroccan hospitality is renowned for being warm, generous, and welcoming. Visitors to Morocco are often greeted with traditional tea and pastries upon arrival,
                            and hosts often go out of their way to make guests feel at home.
                            Hospitality is deeply ingrained in Moroccan culture, and it is considered a point of pride to make guests feel comfortable and well-cared for.
                            Additionally, Moroccans often invite guests to share meals with them, and it is considered rude to decline such an invitation. Overall, Moroccan hospitality is a reflection of
                            the country's strong sense of community and tradition.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>