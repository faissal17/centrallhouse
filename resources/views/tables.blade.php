<x-app-layout>
<head>
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
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

<body>

    <div class="team-area">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="single-team">
          <div class="img-area">
            <img src="{{asset('images/hero_4.jpg')}}" class="img-responsive" alt="">
          </div>
          <div class="img-text">
            <h1>Table 1</h1>
            <h5>55$</h5>
          </div>
          <h5 class="text-success text-center">Availible</h5>
          <p>Here is the description of each table</p>
          <div class="d-flex justify-content-center align-items-center pb-3">
          <button class="btn btn-warning">Reserve Now</button>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="single-team">
          <div class="img-area">
            <img src="{{asset('images/hos.jpg')}}" class="img-responsive" alt="">
          </div>
          <div class="img-text">
            <h1>Table 2</h1>
            <h5>20$</h5>
          </div>
          <h5 class="text-success text-center">Availible</h5>
          <p>Here is the description of each table</p>
          <div class="d-flex justify-content-center align-items-center pb-3">
            <button class="btn btn-warning">Reserve Now</button>
            </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="single-team">
          <div class="img-area">
            <img src="{{asset('images/hotelroom.jpg')}}" class="img-responsive" alt="">
          </div>
          <div class="img-text">
            <h1>Table 3</h1>
            <h5>30$</h5>
          </div>
          <h5 class="text-success text-center">Availible</h5>
          <p>Here is the description of each table</p>
          <div class="d-flex justify-content-center align-items-center pb-3">
            <button class="btn btn-warning">Reserve Now</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

<x-footer/>

</x-app-layout>
