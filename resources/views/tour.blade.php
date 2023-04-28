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
                            <h2 class="pb-0">{{ $tour->price }} $</h2>
                            @if ($tour->availible)
                                <h5 class="border-start mt-0 text-success">Availible</h5>
                            @else
                                <h5 class="border-start text-warning">Not Availible</h5>
                            @endif
                            <p>{{ $tour->description }}</p>
                            @if ($tour->availible)
                                <div class="pt-4 pb-0">
                                    <a href="#modal-tour" data-bs-toggle="modal"><button class="btn btn-outline-primary"
                                            type="submit">Reserve A
                                            Place</button></a>
                                @else
                                    <a href=""><button class="btn btn-outline-primary" type="submit">Not
                                            Avilible</button></a>
                            @endif
                            <a href="/editTour/{{ $tour->id }}"><button class="btn btn-outline-primary"
                                    type="submit">edit a
                                    tour</button></a>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
        </div>

        <!-- tours MODAL -->
        <div class="modal fade" id="modal-tour">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('tour.make') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title text-danger">Reserve Your tour</h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>
                        <div class="modal-body">
                            <!-- This Input Allows Storing tour Index  -->
                            <input type="hidden" name="tours_id" id="tours_id" value="{{ $tour->id }}">
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="fullname" class="form-control title_tour" id="fullname" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control title_tour" id="email" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">phone</label>
                                <input type="text" name="phone" class="form-control title_tour" id="phone" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Guests</label>
                                <input type="number" name="guests" class="form-control title_tour" id="guests"
                                    min="1" max="4" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="save" class="btn btn-warning"
                                id="tour-save-btn">Reserve</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <x-footer />
    </body>
</x-app-layout>
