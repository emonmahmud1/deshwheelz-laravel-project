<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="./assets/images/logo.png" alt="Logo" class="img-fluid logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-3 text-menu">
                <li class="nav-item">
                    <a class="nav-link active rounded-pill px-3" href="./index.html">Home</a>
                </li>
                <!-- <li class="nav-item">
                        <a class="nav-link rounded-pill px-3" href="#">Rent a Car</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill px-3" href="#">Book a Driver</a>
                    </li> -->
                <li class="nav-item">
                    <a class="nav-link rounded-pill px-3" href="#!">How it Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill px-3" href="./about-us.html">About US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill px-3" href="#">Services</a>
                </li>
                <!-- <li class="nav-item">
                        <a class="nav-link rounded-pill px-3" href="#">Our Fleet</a>
                    </li> -->
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ms-lg-3 icon-menu">
                <!-- <li class="nav-item me-2">
                        <a class="nav-link rounded-pill wishlist d-flex justify-content-center align-items-center"  data-bs-toggle="offcanvas" href="#navbarWishlist" role="button" aria-controls="navbarWishlist">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-headset-icon lucide-headset"><path d="M3 11h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5Zm0 0a9 9 0 1 1 18 0m0 0v5a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3Z"/><path d="M21 16v2a4 4 0 0 1-4 4h-5"/></svg>
                        </a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link rounded-pill wishlist d-flex justify-content-center align-items-center"  data-bs-toggle="offcanvas" href="#navbarWishlist" role="button" aria-controls="navbarWishlist">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-icon lucide-heart"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
                        </a>
                    </li> -->
                <li class="nav-item">
                    <a class="nav-link rounded-pill px-3 right-btns border d-flex align-items-center" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                        <div class="user-icon rounded-circle me-2 d-flex justify-content-center align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round-icon lucide-user-round">
                                <circle cx="12" cy="8" r="5" />
                                <path d="M20 21a8 8 0 0 0-16 0" />
                            </svg>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu">
                            <path d="M4 12h16" />
                            <path d="M4 18h16" />
                            <path d="M4 6h16" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Navbar Wishlist Offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="navbarWishlist" aria-labelledby="navbarWishlistLabel">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="navbarWishlistLabel">Favorites</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav nav-pills d-flex justify-content-between bg-body-secondary rounded-pill p-2 mb-3" id="pills-tab" role="tablist">
            <li class="nav-item w-50" role="presentation">
                <button class="nav-link h-32 fs-14 d-flex justify-content-center align-items-center rounded-pill w-100 active" id="pills-vehicles-tab" data-bs-toggle="pill" data-bs-target="#pills-vehicles"
                    type="button" role="tab" aria-controls="pills-vehicles" aria-selected="true">Vehicles</button>
            </li>
            <li class="nav-item w-50" role="presentation">
                <button class="nav-link h-32 fs-14 d-flex justify-content-center align-items-center rounded-pill w-100" id="pills-searches-tab" data-bs-toggle="pill" data-bs-target="#pills-searches"
                    type="button" role="tab" aria-controls="pills-searches" aria-selected="false">Searches</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-vehicles" role="tabpanel" aria-labelledby="pills-vehicles-tab" tabindex="0">
                <img src="./assets/images/vehicles.gif" alt="Vehicle GIF" class="img-fluid rounded mb-3">
                <h4 class="mb-2 fs-6 fw-semibold"> You haven’t favorited any vehicles </h4>
                <p class="mb-2 fs-6"> Find a vehicle you love and favorite it using the heart icon. </p>
                <a href="#!" class="btn btn-primary w-50 mb-3 rounded-pill"> Search Vehicles </a>
                <p class="fs-14 mb-0"> Already have an account? <a href="#"> Sign in </a> to see your favorites. </p>
            </div>
            <div class="tab-pane fade" id="pills-searches" role="tabpanel" aria-labelledby="pills-searches-tab" tabindex="0">
                <img src="./assets/images/searches.gif" alt="Searches GIF" class="img-fluid rounded mb-3">
                <h4 class="mb-2 fs-6 fw-semibold"> You haven’t saved any searches </h4>
                <p class="mb-2 fs-6"> Save a search and we’ll send you updates when new vehicle matches become available. </p>
                <a href="#!" class="btn btn-primary w-50 mb-3 rounded-pill"> Search Vehicles </a>
                <p class="fs-14 mb-0"> Already have an account? <a href="#"> Sign in </a> to see your favorites. </p>
            </div>
        </div>
    </div>
</div>

<!-- Navbar User Offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvas" aria-labelledby="navbarOffcanvasLabel">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="navbarOffcanvasLabel">Welcome to Dashwheelz</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p class="text-muted mb-2">Personalize your experience</p>
        <a href="#!" class="btn btn-outline-primary w-100 mb-4">Sign in</a>

        <h4 class="mb-2 fs-6 fw-semibold">Finance with Dashwheelz</h4>
        <div class="card mb-4">
            <div class="card-body">
                <p class="fs-14 mb-2">Get pre-qualified and shop with real terms. <strong>No hit to your credit.</strong></p>
                <button class="btn btn-light w-100 mt-2">Get Pre-qualified</button>
            </div>
        </div>

        <h4 class="mb-2 fs-6 fw-semibold">Sell/Trade Offer</h4>
        <div class="card mb-4">
            <div class="card-body">
                <p class="fs-14 mb-2">Get a real offer in less than 2 minutes — sell, trade or track your value.</p>
                <button class="btn btn-light w-100 mt-2">Get Your Offer</button>
            </div>
        </div>

        <hr>

        <div class="mb-2">
            <a href="#" class="btn btn-light w-100 mt-2 text-start"> <i class="fa-solid fa-circle-info me-2"></i> Support and Contact </a>
        </div>

        <div class="mb-2">
            <a class="btn btn-light w-100 mt-2 text-start" data-bs-toggle="collapse" href="#howitWorks" role="button" aria-expanded="false" aria-controls="howitWorks"> <i class="fa-solid fa-building-columns me-2"></i> How it Works <i class="fa-solid fa-angle-down ms-2"></i> </a>
        </div>
        <div class="collapse" id="howitWorks">
            <div class="card card-body">
                <a href="#" class="btn btn-light w-100 mt-2 text-start d-inline-block text-decoration-none"> Buying from Dashwheelz </a>
                <a href="#" class="btn btn-light w-100 mt-2 text-start d-inline-block text-decoration-none"> Selling or Trading-In </a>
                <a href="#" class="btn btn-light w-100 mt-2 text-start d-inline-block text-decoration-none"> Finance with Carvana </a>
                <a href="#" class="btn btn-light w-100 mt-2 text-start d-inline-block text-decoration-none"> Auto Loan Calculator </a>
                <a href="#" class="btn btn-light w-100 mt-2 text-start d-inline-block text-decoration-none"> Carvana Value Tracker </a>
                <a href="#" class="btn btn-light w-100 mt-2 text-start d-inline-block text-decoration-none"> Our Protection Plans </a>
                <a href="#" class="btn btn-light w-100 mt-2 text-start d-inline-block text-decoration-none"> Repairs with Carvana </a>
                <a href="#" class="btn btn-light w-100 mt-2 text-start d-inline-block text-decoration-none"> Certified Cars </a>
                <a href="#" class="btn btn-light w-100 mt-2 text-start d-inline-block text-decoration-none"> Carvana Insurance </a>
                <a href="#" class="btn btn-light w-100 mt-2 text-start d-inline-block text-decoration-none"> Clean Vehicle Tax Credit </a>
                <a href="#" class="btn btn-light w-100 mt-2 text-start d-inline-block text-decoration-none"> Guide to Buying a Used EV </a>
                <a href="#" class="btn btn-light w-100 mt-2 text-start d-inline-block text-decoration-none"> Your First EV </a>
            </div>
        </div>

        <div class="mb-3">
            <a class="btn btn-light w-100 mt-2 text-start" data-bs-toggle="collapse" href="#about" role="button" aria-expanded="false" aria-controls="collapseExample"> <i class="fa-solid fa-book me-2"></i> About Dashwheelz <i class="fa-solid fa-angle-down ms-2"></i> </a>
        </div>
        <div class="collapse" id="about">
            <div class="card card-body">
                <a href="#" class="btn btn-light w-100 mt-2 text-start d-inline-block text-decoration-none"> About Us </a>
                <a href="#" class="btn btn-light w-100 mt-2 text-start d-inline-block text-decoration-none"> Customer Reviews </a>
                <a href="#" class="btn btn-light w-100 mt-2 text-start d-inline-block text-decoration-none"> Customer Reviews </a>
            </div>
        </div>
    </div>
</div>