<div class="container availability-form mt-8" style="width: 95%">
    <div class="row">
        <div class="col-lg-12 bg-white p-4 me-4 doo">
            <h5 class="col-lg-3 text-uppercase" id="check">Check Booking Availability</h5>
            <form action="/room" method="POST">
                @csrf
                <div class="row align-items-end">
                    <div class="col-lg-4 mb-3">
                        <label class="form-label" style="font-weight: 500;">Rooms</label>
                        <select class="form-select shadow-none" id="room" name="room">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4+</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label class="form-label" style="font-weight: 500;">Bed</label>
                        <select class="form-select shadow-none" id="bed" name="bed">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4+</option>
                        </select>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Bath</label>
                        <select class="form-select shadow-none" id="bath" name="bath">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4+</option>
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

<style>
    #check {
        font-weight: bold;
        color: black;
    }

    .doo {
        box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;
    }
</style>
