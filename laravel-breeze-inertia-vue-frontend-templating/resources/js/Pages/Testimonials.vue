<script setup>
import TopHeader from "@/Components/TopHeader.vue";
import Navbar from "@/Components/Navbar.vue";
import Banner from "@/Components/Banner.vue";
import About from "@/Components/About.vue";
import Services from "@/Components/Services.vue";
import Reservation from "@/Components/Reservation.vue";
import Specialty from "@/Components/Specialty.vue";
import Room from "@/Components/Room.vue";
import Testimonials from "@/Components/Testimonials.vue";
import FAQ from "@/Components/FAQ.vue";
import Team from "@/Components/Team.vue";
import Blog from "@/Components/Blog.vue";
import Footer from "@/Components/Footer.vue";
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
</script>
<template>
    <div>
        <FrontendLayout>
                    <!-- Inner Banner -->
        <div class="inner-banner inner-bg4">
            <div class="container">
                <div class="inner-title">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>Testimonials</li>
                    </ul>
                    <h3>Testimonials</h3>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Testimonials Area Three -->
        <div class="testimonials-area-three pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color">TESTIMONIAL</span>
                    <h2>Our Latest Testimonials and What Our Client Says</h2>
                </div>
                <div class="row align-items-center pt-45">
                    <div class="col-lg-6 col-md-6">
                        <div class="testimonials-img-two">
                            <img src="assets/img/testimonials/testimonials-img5.jpg" alt="Images">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="testimonials-slider-area owl-carousel owl-theme">
                            <div class="testimonials-slider-content">
                                <i class="flaticon-left-quote"></i>
                                <p>
                                    You can easily make a good and easily the best service on 
                                    this agency. This is one of the best and crucial service into
                                    the global world. We will start to make a communications
                                    with this agency and saw that, this has made our all of the
                                    problems in an easiest way.
                                </p>
                                <ul>
                                    <li>
                                        <img src="assets/img/testimonials/testimonials-img1.jpg" alt="Images">
                                        <h3>Mary Marden</h3>
                                        <span>New York City</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="testimonials-slider-content">
                                <i class="flaticon-left-quote"></i>
                                <p>
                                    You can easily make a good and easily the best service on 
                                    this agency. This is one of the best and crucial service into
                                    the global world. We will start to make a communications
                                    with this agency and saw that, this has made our all of the
                                    problems in an easiest way.
                                </p>
                                <ul>
                                    <li>
                                        <img src="assets/img/testimonials/testimonials-img2.jpg" alt="Images">
                                        <h3>Harriet Johnson</h3>
                                        <span>London City</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials Area Three End -->

        <!-- Testimonials Inner Area -->
        <div class="testimonials-inner-area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonials-item">
                            <i class="flaticon-left-quote text-color"></i>
                            <p>
                                You can easily make a good and easily the best service from this agency. This is one 
                                of the best and crucial service for us. 
                            </p>
                            <ul>
                                <li>
                                    <img src="assets/img/testimonials/testimonials-img1.jpg" alt="Images">
                                    <h3>Mary Marden</h3>
                                    <span>New York City</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="testimonials-item">
                            <i class="flaticon-left-quote text-color"></i>
                            <p>
                                You can easily make a good and easily the best service from this agency. This is one 
                                of the best and crucial service for us. 
                            </p>
                            <ul>
                                <li>
                                    <img src="assets/img/testimonials/testimonials-img2.jpg" alt="Images">
                                    <h3>Harriet Johnson</h3>
                                    <span>London City</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="testimonials-item">
                            <i class="flaticon-left-quote text-color"></i>
                            <p>
                                You can easily make a good and easily the best service from this agency. This is one 
                                of the best and crucial service for us. 
                            </p>
                            <ul>
                                <li>
                                    <img src="assets/img/testimonials/testimonials-img3.jpg" alt="Images">
                                    <h3>Tyrone Morgan</h3>
                                    <span>New Jersey</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials Inner Area End -->
        </FrontendLayout>
    </div>
</template>
