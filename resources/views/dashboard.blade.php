<?php

?>
<x-app-layout>

    <head>
        <link rel="stylesheet" href="./css/rooms.css">
    </head>

    <section class="site-hero inner" id="rooms" style="background-image:url('./images/Morocco.jpg')">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade">
                    <p class="heading mb-3">Welcome back <span class="username">{{ auth()->user()->name }}</span></p>
                    @if (auth()->user()->isadmin == 1)
                        <a href="{{ asset('createroom') }}"><button type="button" class="btn btn-outline-warning">Add
                                Room</button></a>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">

                @foreach ($rooms as $room)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="Image">
                                    <img src="cover/{{ $room->cover }}">
                                    <small
                                        class="position-absolute start-0 top-100 translate-middle-y bg-danger text-white rounded py-1 px-3 ms-4">${{ $room->price }}/Night</small>
                                </div>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">{{ $room->name }}</h5>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i
                                            class="fa fa-bed text-primary me-2"></i>{{ $room->bed }} Bed</small>
                                    <small class="border-end me-3 pe-3"><i
                                            class="fa fa-bath text-primary me-2"></i>{{ $room->bath }} Bath</small>
                                    <small><i class="fa fa-hotel text-primary me-2"></i>{{ $room->room }}
                                        Rooms</small>

                                    @if ($room->availible)
                                        <small class="border-start ms-3 ps-3 text-success">Availible</small>
                                    @else
                                        <small class="border-start ms-3 ps-3 text-warning">Not Availible</small>
                                    @endif

                                </div>
                                <p class="text-body mb-3">{{ $room->description }}</p>
                                <div class="d-flex justify-content-between">
                                    @if ($room->availible)
                                        <a class="btn btn-sm btn-primary rounded py-2 px-4"
                                            href="/booking/{{ $room->id }}">Book Now</a>
                                    @else
                                        <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">Not
                                            Available</a>
                                    @endif
                                    @if (auth()->user()->isadmin == 1)
                                        <a class="btn btn-sm btn-dark rounded py-2 px-4"
                                            href="/editroom/{{ $room->id }}">Edit Room</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    @if (Session::has('message'))
        <script>
            swal("Message", "{{ Session::get('message') }}", 'success', {
                button: "OK",
            });
        </script>
    @endif


    <x-footer />
</x-app-layout>
