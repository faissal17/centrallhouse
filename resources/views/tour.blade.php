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
                        <button class="text-light btnone">Add Tour</button>
                        {{-- <button class="text-light btntwo">Discover More</button> --}}
                    </div>
                </div>
            </div>
        </section>
    </body>
</x-app-layout>
