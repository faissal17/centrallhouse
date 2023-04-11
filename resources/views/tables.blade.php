<x-app-layout>
<head>
    <link rel="stylesheet" href="./css/table.css">
</head>
<section class="site-hero inner" id="rooms" style="background-image:url('./images/hansel.jpg')">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <p class="heading mb-3">Welcome to our hotel restaurant! Our culinary team takes pride in<span> offering a diverse menu of delicious dishes made with the freshest ingredients. The modern ambiance
                     Join us for a meal that will tantalize</span> your taste buds and create lasting memories.</p>
               <a href="{{asset('createtable')}}"><button type="button" class="btn btn-outline-warning">Add Table</button></a>
            </div>
        </div>
    </div>
</section>
</x-app-layout>
