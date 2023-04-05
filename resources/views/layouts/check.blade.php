
<head>
    <link rel="stylesheet" href="./css/rooms.css">
</head>

<div class="container availability-form mt-8" style="width: 95%">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded me-4">
            <h5 class="col-lg-3 text-uppercase" id="check">Check Booking Availability</h5>
            <form action="" method="GET">
                <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-in</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-out</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Adult</label>
                        <select class="form-select shadow-none">
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3+</option>
                       </select>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight: 500;">Children</label>
                        <select class="form-select shadow-none">

                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3+</option>
                       </select>
                    </div>
                    <div class="col-lg-1 mb-lg-3 mt-2 btn btn-warning">
                        <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
