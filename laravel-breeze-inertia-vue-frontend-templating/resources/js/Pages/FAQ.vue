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
        <div class="inner-banner inner-bg6">
            <div class="container">
                <div class="inner-title">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>FAQ</li>
                    </ul>
                    <h3>FAQ</h3>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- FAQ Area -->
        <div class="faq-area pt-100 pb-70 section-bg-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq-content faq-content-bg2">
                            <div class="section-title">
                                <span class="sp-color">FREE OF QUESTION</span>
                                <h2>Let's Start a Free of Questions and Get a Quick Support</h2>
                                <p>We are the agency who always gives you a priority on the free of question and you can easily make a question on the bunch.</p>
                            </div>

                            <div class="faq-accordion">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-plus'></i>
                                            How I Will Book a Room or Resort?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p> 
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                                dignissim orci eget, viverra ante. Mauris ornare pellentesque augue. Curabitur leo nibh, ultrices 
                                                vel ultricies eu, vulputate at felis.
                                            </p>
                                        </div>
                                    </li>
    
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-plus'></i>
                                            How I Will Be Able to Add on the Admin Portal? 
                                        </a>
        
                                        <div class="accordion-content">
                                            <p> 
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                                dignissim orci eget, viverra ante. Mauris ornare pellentesque augue. Curabitur leo nibh, ultrices 
                                                vel ultricies eu, vulputate at felis.
                                            </p>
                                        </div>
                                    </li>
    
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-plus'></i>
                                            What are the Benefits of These Agencies?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p> 
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                                dignissim orci eget, viverra ante. Mauris ornare pellentesque augue. Curabitur leo nibh, ultrices 
                                                vel ultricies eu, vulputate at felis.
                                            </p>
                                        </div>
                                    </li>
    
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class='bx bx-plus'></i>
                                            How I Will Make Payment for Room Book?
                                        </a>
        
                                        <div class="accordion-content show">
                                            <p> 
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat,
                                                dignissim orci eget, viverra ante. Mauris ornare pellentesque augue. Curabitur leo nibh, ultrices 
                                                vel ultricies eu, vulputate at felis.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="faq-img-3">
                            <img src="assets/img/faq/faq-img3.jpg" alt="Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ Area End -->

        <!-- FAQ Another -->
        <div class="faq-another pt-100 pb-70">
            <div class="container">
                <div class="faq-form">
                    <div class="contact-form">
                        <div class="section-title text-center">
                            <h2>Ask Questions</h2>
                        </div>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group checkbox-option">
                                        <input type="checkbox" id="chb2">
                                        <p>
                                            Accept <a href="terms-condition.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn btn-bg-three">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ Another End -->
        </FrontendLayout>
    </div>
</template>
