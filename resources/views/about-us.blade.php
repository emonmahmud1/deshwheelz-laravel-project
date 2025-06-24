@extends('layout.layout')
@section('content')
    <!-- Hero Section -->
    <section class="about-hero">
      <div class="container about-hero-content">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-4"> About Us </h1>
            <p class="lead">At Dashwheelz, we're revolutionizing the way people buy, sell, and experience vehicles.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h2 class="mb-3 fs-28 fw-semibold">Our Story</h2>
            <p class="lead">Founded in 2015, Dashwheelz began with a simple idea: make car buying and selling seamless, transparent, and enjoyable.</p>
            <p>What started as a small startup in a garage has grown into one of the most trusted names in the automotive industry. Our journey has been fueled by innovation, customer satisfaction, and a passion for vehicles.</p>
            <p>Today, we serve thousands of customers across the country with our unique approach to vehicle sales, financing, and services.</p>
          </div>
          <div class="col-lg-6">
            <img src="./assets/images/our-story.jpg" alt="Our Story" class="img-fluid rounded shadow">
          </div>
        </div>
      </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-5 bg-light">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="mb-3 fs-28 fw-semibold">Our Mission & Vision</h2>
          <p class="lead">Guiding principles that drive everything we do</p>
        </div>
        
        <div class="row g-4">
          <div class="col-md-6">
            <div class="mission-card">
              <div class="text-center mb-4">
                <i class="fas fa-bullseye fa-3x theme-color"></i>
              </div>
              <h3 class="text-center mb-3 fs-5">Our Mission</h3>
              <p class="text-center">To transform the automotive experience by providing exceptional service, transparent pricing, and innovative solutions that put our customers first.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mission-card">
              <div class="text-center mb-4">
                <i class="fas fa-eye fa-3x theme-color"></i>
              </div>
              <h3 class="text-center mb-3 fs-5">Our Vision</h3>
              <p class="text-center">To become the most trusted and customer-centric automotive platform, setting new standards for excellence in the industry.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Core Values Section -->
    <section class="values-section py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="mb-3 fs-28 fw-semibold">Our Core Values</h2>
          <p class="lead text-white">The foundation of our company culture</p>
        </div>
        
        <div class="row g-4">
          <div class="col-md-4">
            <div class="value-card">
              <div class="value-icon">
                <i class="fas fa-handshake"></i>
              </div>
              <h3 class="text-center">Integrity</h3>
              <p class="text-center">We believe in doing business with honesty and transparency, building trust with every interaction.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="value-card">
              <div class="value-icon">
                <i class="fas fa-lightbulb"></i>
              </div>
              <h3 class="text-center">Innovation</h3>
              <p class="text-center">We constantly seek new ways to improve and revolutionize the car buying experience.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="value-card">
              <div class="value-icon">
                <i class="fas fa-users"></i>
              </div>
              <h3 class="text-center">Customer Focus</h3>
              <p class="text-center">Our customers are at the heart of everything we do, and their satisfaction is our top priority.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="value-card">
              <div class="value-icon">
                <i class="fas fa-chart-line"></i>
              </div>
              <h3 class="text-center">Excellence</h3>
              <p class="text-center">We strive for excellence in every aspect of our business, from service to operations.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="value-card">
              <div class="value-icon">
                <i class="fas fa-heart"></i>
              </div>
              <h3 class="text-center">Passion</h3>
              <p class="text-center">We're passionate about cars and dedicated to sharing that passion with our customers.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="value-card">
              <div class="value-icon">
                <i class="fas fa-globe"></i>
              </div>
              <h3 class="text-center">Sustainability</h3>
              <p class="text-center">We're committed to environmentally responsible practices in all aspects of our business.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Team Section -->
    <!-- <section class="py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="mb-3 fs-28 fw-semibold">Meet Our Leadership Team</h2>
          <p class="lead">The driving force behind Dashwheelz</p>
        </div>
        
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="team-member">
              <img src="./assets/images/team/team1.jpg" alt="Team Member" class="img-fluid">
              <h4>John Smith</h4>
              <p class="text-muted">Founder & CEO</p>
              <div class="social-links">
                <a href="#" class="text-decoration-none me-2"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="text-decoration-none"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team-member">
              <img src="./assets/images/team/team2.jpg" alt="Team Member" class="img-fluid">
              <h4>Sarah Johnson</h4>
              <p class="text-muted">Chief Operating Officer</p>
              <div class="social-links">
                <a href="#" class="text-decoration-none me-2"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="text-decoration-none"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team-member">
              <img src="./assets/images/team/team3.jpg" alt="Team Member" class="img-fluid">
              <h4>Michael Chen</h4>
              <p class="text-muted">Chief Technology Officer</p>
              <div class="social-links">
                <a href="#" class="text-decoration-none me-2"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="text-decoration-none"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team-member">
              <img src="./assets/images/team/team4.jpg" alt="Team Member" class="img-fluid">
              <h4>Emily Rodriguez</h4>
              <p class="text-muted">Chief Marketing Officer</p>
              <div class="social-links">
                <a href="#" class="text-decoration-none me-2"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="text-decoration-none"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="text-center mt-4">
          <a href="#" class="btn theme-btn text-light px-4 py-2">View All Team Members</a>
        </div>
      </div>
    </section> -->

    <!-- Testimonials Section -->
    <section class="py-5">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="mb-3 fs-28 fw-semibold">What Our Customers Say</h2>
          <p class="lead">Hear from people who've experienced the Dashwheelz difference</p>
        </div>
        
        <div class="row">
          <div class="col-md-4">
            <div class="testimonial-card">
              <div class="rating mb-3">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
              </div>
              <p>"The entire process was so smooth and transparent. I got exactly the car I wanted at a fair price, without any of the usual dealership hassles."</p>
              <div class="testimonial-author">Robert Johnson</div>
              <div class="testimonial-role">Happy Customer Since 2018</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="testimonial-card">
              <div class="rating mb-3">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
              </div>
              <p>"Selling my car through Dashwheelz was the easiest transaction I've ever done. The offer was fair and the payment was immediate. Highly recommend!"</p>
              <div class="testimonial-author">Maria Garcia</div>
              <div class="testimonial-role">Happy Customer Since 2020</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="testimonial-card">
              <div class="rating mb-3">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star-half-alt text-warning"></i>
              </div>
              <p>"Their financing options made it possible for me to get my dream car with payments that fit my budget. The online approval process was incredibly fast."</p>
              <div class="testimonial-author">David Kim</div>
              <div class="testimonial-role">Happy Customer Since 2022</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 cta-section text-white">
      <div class="container text-center">
        <h2 class="fw-bold mb-4">Ready to Experience the Dashwheelz Difference?</h2>
        <p class="lead mb-4">Join thousands of satisfied customers who've transformed their car buying experience.</p>
        <div class="d-flex justify-content-center gap-3">
          <a href="#" class="btn btn-light btn-lg px-4">Browse Vehicles</a>
          <a href="#" class="btn btn-outline-light btn-lg px-4">Get Your Offer</a>
        </div>
      </div>
    </section>
@endsection