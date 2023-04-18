<x-app-layout>

    <head>
        <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    </head>
    <section class="site-hero inner" id="rooms" style="background-image:url('./images/hansel.jpg')">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade">
                    <div class="text">
                        <h1 class="text-warning text-uppercase"><span class="text-light">Here in</span> Central<span
                                class="text-danger">House</span><strong class="text-light"> In Marrakech</strong></h1>
                        <p>Explore The Moroccan Food With Us</p>
                    </div>
                    <a href="{{ asset('createtable') }}"><button type="button" class="btn btn-outline-warning">Add
                            Table</button></a>
                </div>
            </div>
        </div>
    </section>

    <div class="team-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    @foreach ($tables as $table)
                        <div class="single-team">
                            <div class="img-area">
                                <img src="cover/{{ $table->image }}" class="img-responsive" alt="">
                            </div>
                            <div class="img-text">
                                <h1 class="pt-2">{{ $table->name }}</h1>
                                <h5>{{ $table->price }}$</h5>
                            </div>
                            @if ($table->availible)
                                <h5 class="text-success text-center">Availible</h5>
                            @else
                                <h5 class="text-warning text-center">Not Availible</h5>
                            @endif
                            <p>{{ $table->description }}</p>
                            <div
                                class="d-flex justify-content-center align-items-center pb-3 justify-content-between mx-3">
                                <button class="btn btn-warning">Reserve Now</button>
                                <a href="/edittable/{{ $table->id }}"><button class="btn btn-light">Edit</button></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <x-footer />

</x-app-layout>
