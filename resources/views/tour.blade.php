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
                        <a href="{{ asset('createtour') }}"><button class="btn btn-outline-warning" type="button">Add
                                Tour</button></a>
                        {{-- <button class="text-light btntwo">Discover More</button> --}}
                    </div>
                </div>
            </div>
        </section>
        <div class="card-section">
            <div class="container">
                @foreach ($tours as $tour)
                    <div class="card">
                        <div class="imgBx">
                            <img src="cover/{{ $tour->image }}">
                        </div>
                        <div class="content">
                            <h1 class="text-danger">{{ $tour->name }}</h1>
                            <h2 class="pb-3">{{ $tour->price }} $</h2>
                            <p>{{ $tour->description }}</p>
                            <div class="pt-4 pb-0">
                                <a href="#"><button class="btn btn-outline-primary" type="submit">Reserve A
                                        Place</button></a>
                                <a href="#"><button class="btn btn-outline-primary" type="submit">edit A
                                        Place</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <x-footer />
    </body>
</x-app-layout>
