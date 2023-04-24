<x-app-layout>

    <head>
        <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    </head>

    <body>
        <section class="banner">
            <h2>BOOK YOUR ROOM NOW</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-container">
                <div class="card-img">
                    <img src="../cover/{{ $room->cover }}">
                </div>
                <div class="card-content">
                    <h3>{{ $room->name }}</h3>
                    <form action="{{ route('booking.make') }}" method="POST">
                        @csrf
                        <input type="hidden " value="{{ $room_id }}" name="room_id" style="display:none">
                        <div class="form-row">
                            <input type="date" class="text-dark" name="arrive">
                            <input type="date" class="text-dark" name="leave">
                        </div>

                        <div class="form-row">
                            <input type="text" placeholder="Full Name" name="name">
                            <input type="text" placeholder="Phone Number" name="phone">
                        </div>

                        <div class="form-row">
                            <input type="text" placeholder="Email" name="email">
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <button type="submit">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </body>
    </section>

    @if (Session::has('message'))
        <script>
            swal("Message", "{{ Session::get('message') }}", 'success', {
                button: "OK",
            });
        </script>
    @endif
</x-app-layout>
