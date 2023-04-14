<x-app-layout>

    <head>
        <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    </head>
    <section class="site-hero inner" id="rooms" style="background-image:url('./images/hansel.jpg')">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade">
                    <p class="heading mb-3">Welcome to our hotel restaurant! Our culinary team takes pride
                        in<span>
                            offering a diverse menu of delicious dishes made with the freshest ingredients. The
                            modern
                            ambiance
                            Join us for a meal that will tantalize</span> your taste buds and create lasting
                        memories.
                    </p>
                    <a href="{{ asset('createtable') }}"><button type="button" class="btn btn-outline-warning">Add
                            Table</button></a>
                </div>
            </div>
        </div>
    </section>

    <body>

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
                                    <h1>{{ $table->name }}</h1>
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
                                    <a href="/edittable/{{ $table->id }}"><button
                                            class="btn btn-light">Edit</button></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>

    <x-footer />

</x-app-layout>
