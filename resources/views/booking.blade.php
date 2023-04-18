<x-app-layout>

    <head>
        <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    </head>
    <section>
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-8 d-flex flex-column">
                    <div class="room-details-head d-flex justify-content-between align-items-center rounded-2"
                        style="position: relative;top:60px; width:100%; max-width:710px;z-index:1;background-color:#e9e9dcf2; padding:28px 57px; margin:auto auto;">
                        <div class="">
                            <h1 class="title fs-4 fw-bold">Exucutive Suite</h1>
                            <div class="d-flex justify-content-center flex-wrap gap-2 fs-6">
                                <span>Bed 2</span>
                                <span>Bath 2</span>
                                <span>Room 2</span>
                            </div>
                        </div>
                        <div class="">
                            <h1 class="text-base fs-4 fw-bold">1000 Euro</h1>
                            <span class="fs-6" style="text-align: center">/ Night</span>
                        </div>
                    </div>
                    <div class="room-detail-thumb mb-3" style="margin: auto auto;">
                        <img src="{{ asset('images/hero_4.jpg') }}" alt="" style="width: 820px"
                            class="img-fluid">
                    </div>
                    <div class="room-details-nav d-flex justify-content-between gap-3" style=" margin: 12px auto;">
                        <div>
                            <img src="{{ asset('images/hero_4.jpg') }}" alt="" style="width: 200px">
                        </div>
                    </div>
                    <div class="room-details cardd" style="margin-top:50px;">
                        <h5 class="title fs-5 fw-bold">Description</h5>
                        <hr>
                        <div class="body">
                            <p>
                                Each air-conditioned room here will provide you with a satellite TV, seating area and a
                                balcony. There is also a minibar. Featuring a shower, private bathroom also comes with
                                bathrobes and free toiletries.
                                At Long Beach Hotel you will find a 24-hour front desk, BBQ facilities and garden. Other
                                facilities offered at the property include meeting facilities, a shared lounge and a
                                ticket service. The property offers
                                free parking. The Barmiz Market Cox s Bazar is 3 km, the Himchari National Park is 8 km
                                and the Binani Beach is 24 km away
                            </p>
                        </div>
                    </div>
                    <div class="room-details cardd " style="margin-top:50px;">
                        <h5 class="title fs-5 fw-bold">Amenities</h5>
                        <hr>
                        <div class="body mb-5">
                            <div class="d-inline-flex flex-md-row flex-column gap-md-5 flex-wrap gap-3">
                                <span class="me-2">
                                    <i class="fa-solid fa-wifi text-primary me-2"></i> Unlimited Wifi
                                </span>
                                <span class="me-2">
                                    <i class="fa-solid fa-person-swimming text-primary me-2"></i> Pool
                                </span>
                                <span class="me-2">
                                    <i class="fa-solid fa-tv text-primary me-2"></i>
                                    TV
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5"
                    style="margin: 80px auto; height: 100%; padding:30px;background-color:#e9e9dcf2;">
                    <div class="mb-3">
                        <label for="" class="my-2">Check-in</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="my-2">Check-out</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="my-2">Rooms</label>
                        <input type="number" class="form-control">
                    </div>
                    <button type="button" class="btn btn-outline-dark my-4 w-100"> Send Booking</button>
                </div>
            </div>
        </div>
    </section>
    <x-footer />
</x-app-layout>
