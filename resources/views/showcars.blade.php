<!-- <div>
    <h1>Cars</h1>
    <ul>
        @foreach ($cars as $car)
            <li>{{ $car->name }}</li>
        @endforeach
    </ul>
</div> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row g-0 g-md-4">
                <!-- Service Item 01 -->
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
                                        <h3 class="service-title fw-medium fs-4"> 2024 Toyota Corolla </h3>

                                        <div class="service-content justify-content-center">
                                            <p class="price mb-0 mb-md-1"> $22,500 </p>
                                            <p class="down-price text-start text-md-center mb-2"> <span> $2,000 </span> Downpayment <span> $180 </span> Weekly Rent </p>
                                            
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
                                                <h3 class="service-title fw-medium fs-4"> 2024 Toyota Corolla </h3>
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
                                            <h4 class="price text-start text-md-center mb-2">$22,500 <sub> Was <del> $24,000 </del> </sub></h4>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6 w-100 mb-4"> Buy Now Price </a>
                                            <p class="down-price mb-1"> <span> $2,000 </span> Downpayment <span> $180 </span> Weekly Rent </p>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6"> Rent to Own  </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Item 02 -->
                <div class="col-12">
                    <div class="service-card">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="service-img-container" style="background-image: url('./assets/images/services-list/2.webp')">
                                    <a href="./vehicle-details.html" class="overlay-link"></a>

                                    <button class="bg-transparent border-0 wishlist-btn position-absolute theme-color"
                                        data-bs-toggle="tooltip" title="Add to wishlist">
                                        <i class="fa-regular fa-heart"></i>
                                    </button>

                                    <div class="sm-content position-absolute d-md-none">
                                        <h3 class="service-title fw-medium fs-4"> Honda Civic LX </h3>

                                        <div class="service-content justify-content-center">
                                            <p class="price mb-0 mb-md-1"> $24,300 </p>
                                            <p class="down-price text-start text-md-center mb-2"> <span> $2,200 </span> Downpayment <span> $190 </span> Weekly Rent </p>
                                            
                                            <ul class="feature-list">
                                                <li>5 Seats</li>
                                                <li>Turbo Engine</li>
                                                <li>Heated Seats</li>
                                                <li>Android Auto</li>
                                                <li>2,000 Miles Monthly</li>
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
                                                <h3 class="service-title fw-medium fs-4"> Honda Civic LX </h3>
                                                <ul class="feature-list">
                                                    <li>5 Seats</li>
                                                    <li>Turbo Engine</li>
                                                    <li>Heated Seats</li>
                                                    <li>Android Auto</li>
                                                    <li>2,000 Miles Monthly</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="service-content ps-0 justify-content-center">
                                            <h4 class="price text-start text-md-center mb-2">$24,300 <sub> Was <del> $26,000 </del> </sub></h4>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6 w-100 mb-4"> Buy Now Price </a>
                                            <p class="down-price mb-1"> <span> $2,200 </span> Downpayment <span> $190 </span> Weekly Rent </p>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6"> Rent to Own  </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Item 03 -->
                <div class="col-12">
                    <div class="service-card">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="service-img-container" style="background-image: url('./assets/images/services-list/3.webp')">
                                    <a href="./vehicle-details.html" class="overlay-link"></a>

                                    <button class="bg-transparent border-0 wishlist-btn position-absolute theme-color"
                                        data-bs-toggle="tooltip" title="Add to wishlist">
                                        <i class="fa-regular fa-heart"></i>
                                    </button>

                                    <div class="sm-content position-absolute d-md-none">
                                        <h3 class="service-title fw-medium fs-4"> 2023 Ford Escape </h3>

                                        <div class="service-content justify-content-center">
                                            <p class="price mb-0 mb-md-1"> $27,800 </p>
                                            <p class="down-price text-start text-md-center mb-2"> <span> $2,500 </span> Downpayment <span> $220 </span> Weekly Rent </p>
                                            
                                            <ul class="feature-list">
                                                <li>5 Seats</li>
                                                <li>4WD Capability</li>
                                                <li>Panoramic Sunroof</li>
                                                <li>Navigation System</li>
                                                <li>2,500 Miles Monthly</li>
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
                                                <h3 class="service-title fw-medium fs-4"> 2023 Ford Escape </h3>
                                                <ul class="feature-list">
                                                    <li>5 Seats</li>
                                                    <li>4WD Capability</li>
                                                    <li>Panoramic Sunroof</li>
                                                    <li>Navigation System</li>
                                                    <li>2,500 Miles Monthly</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="service-content ps-0 justify-content-center">
                                            <h4 class="price text-start text-md-center mb-2">$27,800 <sub> Was <del> $29,500 </del> </sub></h4>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6 w-100 mb-4"> Buy Now Price </a>
                                            <p class="down-price mb-1"> <span> $2,500 </span> Downpayment <span> $220 </span> Weekly Rent </p>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6"> Rent to Own  </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Item 04 -->
                <div class="col-12">
                    <div class="service-card">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="service-img-container" style="background-image: url('./assets/images/services-list/4.webp')">
                                    <a href="./vehicle-details.html" class="overlay-link"></a>

                                    <button class="bg-transparent border-0 wishlist-btn position-absolute theme-color"
                                        data-bs-toggle="tooltip" title="Add to wishlist">
                                        <i class="fa-regular fa-heart"></i>
                                    </button>

                                    <div class="sm-content position-absolute d-md-none">
                                        <h3 class="service-title fw-medium fs-4"> Chevrolet Malibu </h3>

                                        <div class="service-content justify-content-center">
                                            <p class="price mb-0 mb-md-1"> $23,900 </p>
                                            <p class="down-price text-start text-md-center mb-2"> <span> $2,100 </span> Downpayment <span> $175 </span> Weekly Rent </p>
                                            
                                            <ul class="feature-list">
                                                <li>5 Seats</li>
                                                <li>Premium Audio</li>
                                                <li>Remote Start</li>
                                                <li>Lane Keep Assist</li>
                                                <li>1,800 Miles Monthly</li>
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
                                                <h3 class="service-title fw-medium fs-4"> Chevrolet Malibu </h3>
                                                <ul class="feature-list">
                                                    <li>5 Seats</li>
                                                    <li>Premium Audio</li>
                                                    <li>Remote Start</li>
                                                    <li>Lane Keep Assist</li>
                                                    <li>1,800 Miles Monthly</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="service-content ps-0 justify-content-center">
                                            <h4 class="price text-start text-md-center mb-2">$23,900 <sub> Was <del> $25,200 </del> </sub></h4>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6 w-100 mb-4"> Buy Now Price </a>
                                            <p class="down-price mb-1"> <span> $2,100 </span> Downpayment <span> $175 </span> Weekly Rent </p>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6"> Rent to Own  </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Item 05 -->
                <div class="col-12">
                    <div class="service-card">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="service-img-container" style="background-image: url('./assets/images/services-list/5.webp')">
                                    <a href="./vehicle-details.html" class="overlay-link"></a>

                                    <button class="bg-transparent border-0 wishlist-btn position-absolute theme-color"
                                        data-bs-toggle="tooltip" title="Add to wishlist">
                                        <i class="fa-regular fa-heart"></i>
                                    </button>

                                    <div class="sm-content position-absolute d-md-none">
                                        <h3 class="service-title fw-medium fs-4"> 2024 Hyundai Tucson </h3>

                                        <div class="service-content justify-content-center">
                                            <p class="price mb-0 mb-md-1"> $28,500 </p>
                                            <p class="down-price text-start text-md-center mb-2"> <span> $2,800 </span> Downpayment <span> $240 </span> Weekly Rent </p>
                                            
                                            <ul class="feature-list">
                                                <li>5 Seats</li>
                                                <li>Hybrid Option</li>
                                                <li>Wireless Charging</li>
                                                <li>Blind Spot Monitor</li>
                                                <li>3,000 Miles Monthly</li>
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
                                                <h3 class="service-title fw-medium fs-4"> 2024 Hyundai Tucson </h3>
                                                <ul class="feature-list">
                                                    <li>5 Seats</li>
                                                    <li>Hybrid Option</li>
                                                    <li>Wireless Charging</li>
                                                    <li>Blind Spot Monitor</li>
                                                    <li>3,000 Miles Monthly</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="service-content ps-0 justify-content-center">
                                            <h4 class="price text-start text-md-center mb-2">$28,500 <sub> Was <del> $30,000 </del> </sub></h4>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6 w-100 mb-4"> Buy Now Price </a>
                                            <p class="down-price mb-1"> <span> $2,800 </span> Downpayment <span> $240 </span> Weekly Rent </p>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6"> Rent to Own  </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Item 06 -->
                <div class="col-12">
                    <div class="service-card">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="service-img-container" style="background-image: url('./assets/images/services-list/6.webp')">
                                    <a href="./vehicle-details.html" class="overlay-link"></a>

                                    <button class="bg-transparent border-0 wishlist-btn position-absolute theme-color"
                                        data-bs-toggle="tooltip" title="Add to wishlist">
                                        <i class="fa-regular fa-heart"></i>
                                    </button>

                                    <div class="sm-content position-absolute d-md-none">
                                        <h3 class="service-title fw-medium fs-4"> Kia Sorento LX </h3>

                                        <div class="service-content justify-content-center">
                                            <p class="price mb-0 mb-md-1"> $29,200 </p>
                                            <p class="down-price text-start text-md-center mb-2"> <span> $2,900 </span> Downpayment <span> $250 </span> Weekly Rent </p>
                                            
                                            <ul class="feature-list">
                                                <li>7 Seats</li>
                                                <li>Third Row Seating</li>
                                                <li>Rear Entertainment</li>
                                                <li>360 Camera</li>
                                                <li>3,500 Miles Monthly</li>
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
                                                <h3 class="service-title fw-medium fs-4"> Kia Sorento LX </h3>
                                                <ul class="feature-list">
                                                    <li>7 Seats</li>
                                                    <li>Third Row Seating</li>
                                                    <li>Rear Entertainment</li>
                                                    <li>360 Camera</li>
                                                    <li>3,500 Miles Monthly</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="service-content ps-0 justify-content-center">
                                            <h4 class="price text-start text-md-center mb-2">$29,200 <sub> Was <del> $31,000 </del> </sub></h4>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6 w-100 mb-4"> Buy Now Price </a>
                                            <p class="down-price mb-1"> <span> $2,900 </span> Downpayment <span> $250 </span> Weekly Rent </p>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6"> Rent to Own  </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Item 07 -->
                <div class="col-12">
                    <div class="service-card">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="service-img-container" style="background-image: url('./assets/images/services-list/7.webp')">
                                    <a href="./vehicle-details.html" class="overlay-link"></a>

                                    <button class="bg-transparent border-0 wishlist-btn position-absolute theme-color"
                                        data-bs-toggle="tooltip" title="Add to wishlist">
                                        <i class="fa-regular fa-heart"></i>
                                    </button>

                                    <div class="sm-content position-absolute d-md-none">
                                        <h3 class="service-title fw-medium fs-4"> 2023 Subaru Outback </h3>

                                        <div class="service-content justify-content-center">
                                            <p class="price mb-0 mb-md-1"> $31,000 </p>
                                            <p class="down-price text-start text-md-center mb-2"> <span> $3,000 </span> Downpayment <span> $270 </span> Weekly Rent </p>
                                            
                                            <ul class="feature-list">
                                                <li>5 Seats</li>
                                                <li>Standard AWD</li>
                                                <li>Off-road Capable</li>
                                                <li>EyeSight Safety</li>
                                                <li>4,000 Miles Monthly</li>
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
                                                <h3 class="service-title fw-medium fs-4"> 2023 Subaru Outback </h3>
                                                <ul class="feature-list">
                                                    <li>5 Seats</li>
                                                    <li>Standard AWD</li>
                                                    <li>Off-road Capable</li>
                                                    <li>EyeSight Safety</li>
                                                    <li>4,000 Miles Monthly</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="service-content ps-0 justify-content-center">
                                            <h4 class="price text-start text-md-center mb-2">$31,000 <sub> Was <del> $33,500 </del> </sub></h4>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6 w-100 mb-4"> Buy Now Price </a>
                                            <p class="down-price mb-1"> <span> $3,000 </span> Downpayment <span> $270 </span> Weekly Rent </p>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6"> Rent to Own  </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Item 08 -->
                <div class="col-12">
                    <div class="service-card">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="service-img-container" style="background-image: url('./assets/images/services-list/8.webp')">
                                    <a href="./vehicle-details.html" class="overlay-link"></a>

                                    <button class="bg-transparent border-0 wishlist-btn position-absolute theme-color"
                                        data-bs-toggle="tooltip" title="Add to wishlist">
                                        <i class="fa-regular fa-heart"></i>
                                    </button>

                                    <div class="sm-content position-absolute d-md-none">
                                        <h3 class="service-title fw-medium fs-4"> Volkswagen Jetta </h3>

                                        <div class="service-content justify-content-center">
                                            <p class="price mb-0 mb-md-1"> $22,800 </p>
                                            <p class="down-price text-start text-md-center mb-2"> <span> $2,000 </span> Downpayment <span> $170 </span> Weekly Rent </p>
                                            
                                            <ul class="feature-list">
                                                <li>5 Seats</li>
                                                <li>Turbo Diesel</li>
                                                <li>Leather Interior</li>
                                                <li>Digital Cockpit</li>
                                                <li>2,000 Miles Monthly</li>
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
                                                <h3 class="service-title fw-medium fs-4"> Volkswagen Jetta </h3>
                                                <ul class="feature-list">
                                                    <li>5 Seats</li>
                                                    <li>Turbo Diesel</li>
                                                    <li>Leather Interior</li>
                                                    <li>Digital Cockpit</li>
                                                    <li>2,000 Miles Monthly</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="service-content ps-0 justify-content-center">
                                            <h4 class="price text-start text-md-center mb-2">$22,800 <sub> Was <del> $24,300 </del> </sub></h4>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6 w-100 mb-4"> Buy Now Price </a>
                                            <p class="down-price mb-1"> <span> $2,000 </span> Downpayment <span> $170 </span> Weekly Rent </p>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6"> Rent to Own  </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Item 09 -->
                <div class="col-12">
                    <div class="service-card">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="service-img-container" style="background-image: url('./assets/images/services-list/9.webp')">
                                    <a href="./vehicle-details.html" class="overlay-link"></a>

                                    <button class="bg-transparent border-0 wishlist-btn position-absolute theme-color"
                                        data-bs-toggle="tooltip" title="Add to wishlist">
                                        <i class="fa-regular fa-heart"></i>
                                    </button>

                                    <div class="sm-content position-absolute d-md-none">
                                        <h3 class="service-title fw-medium fs-4"> 2024 Mazda CX-5 </h3>

                                        <div class="service-content justify-content-center">
                                            <p class="price mb-0 mb-md-1"> $27,500 </p>
                                            <p class="down-price text-start text-md-center mb-2"> <span> $2,600 </span> Downpayment <span> $230 </span> Weekly Rent </p>
                                            
                                            <ul class="feature-list">
                                                <li>5 Seats</li>
                                                <li>Skyactiv Technology</li>
                                                <li>Heads-up Display</li>
                                                <li>Bose Sound System</li>
                                                <li>2,800 Miles Monthly</li>
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
                                                <h3 class="service-title fw-medium fs-4"> 2024 Mazda CX-5 </h3>
                                                <ul class="feature-list">
                                                    <li>5 Seats</li>
                                                    <li>Skyactiv Technology</li>
                                                    <li>Heads-up Display</li>
                                                    <li>Bose Sound System</li>
                                                    <li>2,800 Miles Monthly</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="service-content ps-0 justify-content-center">
                                            <h4 class="price text-start text-md-center mb-2">$27,500 <sub> Was <del> $29,000 </del> </sub></h4>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6 w-100 mb-4"> Buy Now Price </a>
                                            <p class="down-price mb-1"> <span> $2,600 </span> Downpayment <span> $230 </span> Weekly Rent </p>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6"> Rent to Own  </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Item 10 -->
                <div class="col-12">
                    <div class="service-card">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="service-img-container" style="background-image: url('./assets/images/services-list/10.webp')">
                                    <a href="./vehicle-details.html" class="overlay-link"></a>

                                    <button class="bg-transparent border-0 wishlist-btn position-absolute theme-color"
                                        data-bs-toggle="tooltip" title="Add to wishlist">
                                        <i class="fa-regular fa-heart"></i>
                                    </button>

                                    <div class="sm-content position-absolute d-md-none">
                                        <h3 class="service-title fw-medium fs-4"> Nissan Rogue SV </h3>

                                        <div class="service-content justify-content-center">
                                            <p class="price mb-0 mb-md-1"> $28,300 </p>
                                            <p class="down-price text-start text-md-center mb-2"> <span> $2,700 </span> Downpayment <span> $235 </span> Weekly Rent </p>
                                            
                                            <ul class="feature-list">
                                                <li>5 Seats</li>
                                                <li>ProPILOT Assist</li>
                                                <li>Zero Gravity Seats</li>
                                                <li>Around View Monitor</li>
                                                <li>3,200 Miles Monthly</li>
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
                                                <h3 class="service-title fw-medium fs-4"> Nissan Rogue SV </h3>
                                                <ul class="feature-list">
                                                    <li>5 Seats</li>
                                                    <li>ProPILOT Assist</li>
                                                    <li>Zero Gravity Seats</li>
                                                    <li>Around View Monitor</li>
                                                    <li>3,200 Miles Monthly</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="service-content ps-0 justify-content-center">
                                            <h4 class="price text-start text-md-center mb-2">$28,300 <sub> Was <del> $30,200 </del> </sub></h4>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6 w-100 mb-4"> Buy Now Price </a>
                                            <p class="down-price mb-1"> <span> $2,700 </span> Downpayment <span> $235 </span> Weekly Rent </p>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6"> Rent to Own  </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Item 11 -->
                <div class="col-12">
                    <div class="service-card">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="service-img-container" style="background-image: url('./assets/images/services-list/11.webp')">
                                    <a href="./vehicle-details.html" class="overlay-link"></a>

                                    <button class="bg-transparent border-0 wishlist-btn position-absolute theme-color"
                                        data-bs-toggle="tooltip" title="Add to wishlist">
                                        <i class="fa-regular fa-heart"></i>
                                    </button>

                                    <div class="sm-content position-absolute d-md-none">
                                        <h3 class="service-title fw-medium fs-4"> Kia Sorento LX </h3>

                                        <div class="service-content justify-content-center">
                                            <p class="price mb-0 mb-md-1"> $29,200 </p>
                                            <p class="down-price text-start text-md-center mb-2"> <span> $2,900 </span> Downpayment <span> $250 </span> Weekly Rent </p>
                                            
                                            <ul class="feature-list">
                                                <li>7 Seats</li>
                                                <li>Third Row Seating</li>
                                                <li>Rear Entertainment</li>
                                                <li>360 Camera</li>
                                                <li>3,500 Miles Monthly</li>
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
                                                <h3 class="service-title fw-medium fs-4"> Kia Sorento LX </h3>
                                                <ul class="feature-list">
                                                    <li>7 Seats</li>
                                                    <li>Third Row Seating</li>
                                                    <li>Rear Entertainment</li>
                                                    <li>360 Camera</li>
                                                    <li>3,500 Miles Monthly</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="service-content ps-0 justify-content-center">
                                            <h4 class="price text-start text-md-center mb-2">$29,200 <sub> Was <del> $31,000 </del> </sub></h4>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6 w-100 mb-4"> Buy Now Price </a>
                                            <p class="down-price mb-1"> <span> $2,900 </span> Downpayment <span> $250 </span> Weekly Rent </p>
                                            <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6"> Rent to Own  </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>