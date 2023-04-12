
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="/"><span class="text-warning">Central</span><span class="text-danger fw-bold">House</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('tables')}}">Tables</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Tours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown" href="user/profile">User</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="./js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<style>
    .navbar-nav a {
    font-size: 15px;
    text-transform: uppercase;
    font-weight: bold;
}

.navbar-light .navbar-brand {
    color: #000;
    font-size: 25px;
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 2px;
}

.navbar-light .navbar-nav .nav-link {
    color: #000000;
    font-weight: 400;
    font-size: 17px;
}

.collapse {
    visibility: visible;
}


 </style>


