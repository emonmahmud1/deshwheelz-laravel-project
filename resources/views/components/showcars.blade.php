<div class="row g-0 g-md-4">
<!-- {{json_encode($cars, JSON_PRETTY_PRINT);}} -->
    <!-- Service Item 01 -->
    @foreach ($cars as $car)
    <div class="col-12">
        <div class="service-card">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="service-img-container" style="background-image: url('./assets/images/services.jpg')">
                        <a href="./vehicle-details.html" class="overlay-link"></a>

                        <button class="bg-transparent border-0 wishlist-btn position-absolute theme-color"
                            data-bs-toggle="tooltip" title="Add to wishlist">
                            <i class="fa-regular fa-heart"></i>
                        </button>

                        <div class="sm-content position-absolute d-md-none">
                            <h3 class="service-title fw-medium fs-4">{{$car->name}}</h3>

                            <div class="service-content justify-content-center">
                                <p class="price mb-0 mb-md-1"> {{$car->selling_price}}</p>
                                <p class="down-price text-start text-md-center mb-2"> <span>{$car->downpayment}</span> Downpayment <span> $180 </span> Weekly Rent </p>

                                <ul class="feature-list">
                                    <li>5 Seats</li>
                                    <li>CVT Transmission</li>
                                    <li>Dual Zone AC</li>
                                    <li>Apple CarPlay</li>
                                    <li>1,500 Miles Monthly</li>
                                </ul>

                                <div class="row g-2 align-items-end">
                                    <div class="col-4">
                                        <a href="#!" class="btn theme-btn text-light py-1 px-2 w-100"> Buy Now </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#!" class="btn theme-btn text-light py-1 px-2 w-100"> Rent to Own </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#!" class="btn theme-btn text-light py-1 px-2 w-100"> Features List </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8 d-none d-md-block">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-12 col-lg-8">
                            <a href="./vehicle-details.html" class="text-decoration-none">
                                <div class="service-content">
                                    <h3 class="service-title fw-medium fs-4">{{$car->name}} </h3>
                                    <ul class="feature-list">
                                        <li>5 Seats</li>
                                        <li>CVT Transmission</li>
                                        <li>Dual Zone AC</li>
                                        <li>Apple CarPlay</li>
                                        <li>1,500 Miles Monthly</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="service-content ps-0 justify-content-center">
                                <h4 class="price text-start text-md-center mb-2">{{$car->selling_price}}<sub> Was <del>{{$car->regular_price}} </del> </sub></h4>
                                <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6 w-100 mb-4"> Buy Now Price </a>
                                <p class="down-price mb-1"> <span> {{$car->downpayment}} </span> Downpayment <span> $180 </span> Weekly Rent </p>
                                <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6"> Rent to Own </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="d-flex justify-content-end mt-4">

    {{ $cars->links() }} 
</div>

</div>