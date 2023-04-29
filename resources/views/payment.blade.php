<x-app-layout>
    <section class="p-4 p-md-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-5">
                <div class="card rounded-3">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <h3>Settings</h3>
                            <h6>Payment</h6>
                        </div>
                        <form action="">
                            <p class="fw-bold mb-4 pb-2">Saved cards:</p>
                            <div class="d-flex flex-row align-items-center mb-4 pb-3">
                                <img class="img-fluid pb-2" src="https://img.icons8.com/color/48/000000/visa.png" />
                                <div class="flex-fill mx-3">
                                    <div class="form-outline">
                                        <input type="text" id="formControlLgXs" class="form-control form-control-lg"
                                            placeholder="**** **** **** 4296" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="formControlLgXsd" class="form-control form-control-lg"
                                    placeholder="name on card" />
                            </div>

                            <div class="row mb-4">
                                <div class="col-7">
                                    <div class="form-outline">
                                        <input type="text" id="formControlLgXM" class="form-control form-control-lg"
                                            placeholder="Card Number" />
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-outline">
                                        <input type="password" id="formControlLgExpk"
                                            class="form-control form-control-lg" placeholder="MM/YYYY" />
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-outline">
                                        <input type="password" id="formControlLgcvv"
                                            class="form-control form-control-lg" placeholder="Cvv" />
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success btn-lg btn-block">Pay</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
