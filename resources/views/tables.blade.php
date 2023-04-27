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
                <div class="col-lg-4 col-md-6">
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
                                @if ($table->availible)
                                    <a href="#modal-table" data-bs-toggle="modal"><button
                                            class="btn btn-warning">Reserve
                                            Now</button></a>
                                @else
                                    <a href=""><button class="btn btn-warning">
                                            Not availible</button></a>
                                @endif
                                <a href="/edittable/{{ $table->id }}"><button class="btn btn-light">Edit</button></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <!-- Tables MODAL -->
    <div class="modal fade" id="modal-table">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('table.make') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title text-danger">Reserve Your Table</h5>
                        <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                    </div>
                    <div class="modal-body">
                        <!-- This Input Allows Storing table Index  -->
                        <input type="hidden" name="tables_id" id="tables_id" value="{{ $table->id }}">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="fullname" class="form-control title_table" id="fullname" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" name="Email" class="form-control title_table" id="Email" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Adult Number</label>
                            <input type="number" name="Adult" class="form-control title_table" id="Adult"
                                min="1" max="4" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kids Number</label>
                            <input type="number" name="kids" class="form-control title_table" id="kids"
                                min="1" max="4" />
                        </div>
                        <div class="mb-0">
                            <label class="form-label">Special Request</label>
                            <textarea name="specialrequest" class="form-control description" rows="5" id="specialrequest"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="save" class="btn btn-warning"
                            id="table-save-btn">Reserve</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-footer />
    @if (Session::has('message'))
        <script>
            swal("Message", "{{ Session::get('message') }}", 'success', {
                button: "OK",
            });
        </script>
    @endif
</x-app-layout>
