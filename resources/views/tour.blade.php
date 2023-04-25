<x-app-layout>

    <head>
        <link rel="stylesheet" href="{{ asset('css/tour.css') }}">
    </head>

    <body>
        <section style="background-image: url(./images/travels.jpg)">
            <div class="d-flex justify-content-center align-items-center" style="height:100vh">
                <div class="text">
                    <h1 class="text-warning text-uppercase"><span class="text-light">Travel with</span> Central<span
                            class="text-danger">Tours</span><strong class="text-light"> In Marrakech</strong></h1>
                    <p>Explore Marrakech with us</p>
                    <div class="d-flex justify-content-center align-items-center mt-2">
                        <a href="{{ asset('createtour') }}"><button class="text-light btnone">Add Tour</button></a>
                        {{-- <button class="text-light btntwo">Discover More</button> --}}
                    </div>
                </div>
            </div>
        </section>
        <div class="card-section">
            <div class="container my-3">
                <div class="card">
                    <div class="imgBx"></div>
                    <div class="content"></div>
                </div>
            </div>
        </div>
        <x-footer />
    </body>
</x-app-layout>
