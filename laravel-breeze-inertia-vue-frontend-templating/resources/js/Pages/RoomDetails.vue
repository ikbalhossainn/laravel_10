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
            <div class="inner-banner inner-bg10">
                <div class="container">
                    <div class="inner-title">
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i></li>
                            <li>Room Details</li>
                        </ul>
                        <h3>Room Details</h3>
                    </div>
                </div>
            </div>
            <!-- Inner Banner End -->

            <!-- Room Details Area End -->
            <div class="room-details-area pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="room-details-side">
                                <div class="side-bar-form">
                                    <h3>Booking Sheet</h3>
                                    <form>
                                        <div class="row align-items-center">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Check in</label>
                                                    <div class="input-group">
                                                        <input
                                                            id="datetimepicker"
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="09/29/2020"
                                                        />
                                                        <span
                                                            class="input-group-addon"
                                                        ></span>
                                                    </div>
                                                    <i
                                                        class="bx bxs-calendar"
                                                    ></i>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Check Out</label>
                                                    <div class="input-group">
                                                        <input
                                                            id="datetimepicker-check"
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="09/29/2020"
                                                        />
                                                        <span
                                                            class="input-group-addon"
                                                        ></span>
                                                    </div>
                                                    <i
                                                        class="bx bxs-calendar"
                                                    ></i>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label
                                                        >Numbers of
                                                        Persons</label
                                                    >
                                                    <select
                                                        class="form-control"
                                                    >
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                        <option>05</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label
                                                        >Numbers of Rooms</label
                                                    >
                                                    <select
                                                        class="form-control"
                                                    >
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                        <option>04</option>
                                                        <option>05</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <button
                                                    type="submit"
                                                    class="default-btn btn-bg-three border-radius-5"
                                                >
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="side-bar-plan">
                                    <h3>Basic Plan Facilities</h3>
                                    <ul>
                                        <li><a href="#">Lunch Facility</a></li>
                                        <li>
                                            <a href="#">Breakfast Facility</a>
                                        </li>
                                        <li><a href="#">Outdoor Kitchen</a></li>
                                        <li>
                                            <a href="#">Shampoo and Soap</a>
                                        </li>
                                        <li><a href="#">Dinner Facility</a></li>
                                        <li>
                                            <a href="#"
                                                >Wireless Connectivity</a
                                            >
                                        </li>
                                        <li><a href="#">Double Bed</a></li>
                                        <li>
                                            <a href="#">5 Star Food Favor</a>
                                        </li>
                                    </ul>

                                    <h3>Premium Plan Facilities</h3>
                                    <ul>
                                        <li><a href="#">Double Bed</a></li>
                                        <li><a href="#">Lunch Facility</a></li>
                                        <li><a href="#">Dinner Facility</a></li>
                                        <li>
                                            <a href="#">Breakfast Facility</a>
                                        </li>
                                        <li><a href="#">Outdoor Kitchen</a></li>
                                        <li>
                                            <a href="#">Shampoo and Soap</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                >Wireless Connectivity</a
                                            >
                                        </li>
                                        <li><a href="#">Mini-Bar</a></li>
                                        <li>
                                            <a href="#">5 Star Food Favor</a>
                                        </li>
                                        <li><a href="#">Buffet Dinner</a></li>
                                        <li><a href="#">Satellite Tv</a></li>
                                        <li>
                                            <a href="#"
                                                >Air Condition Facility</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="room-details-article">
                                <div
                                    class="room-details-slider owl-carousel owl-theme"
                                >
                                    <div class="room-details-item">
                                        <img
                                            src="assets/img/room/room-details-img1.jpg"
                                            alt="Images"
                                        />
                                    </div>
                                    <div class="room-details-item">
                                        <img
                                            src="assets/img/room/room-details-img2.jpg"
                                            alt="Images"
                                        />
                                    </div>
                                    <div class="room-details-item">
                                        <img
                                            src="assets/img/room/room-details-img3.jpg"
                                            alt="Images"
                                        />
                                    </div>
                                </div>

                                <div class="room-details-title">
                                    <h2>
                                        Double Bed Suits With Royal Express and
                                        Super Duplex Feelings
                                    </h2>
                                    <ul>
                                        <li>Basic : $120/Night/Room</li>

                                        <li>Premium : $140/Night/Room</li>
                                    </ul>
                                </div>

                                <div class="room-details-content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore
                                    </p>
                                    <p>
                                        Ecespiciatis unde omnis iste natus error
                                        sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque
                                        ipsa quae ab illo inventore veritatis et
                                        quasi architecto beatae vitae dicta sunt
                                        explicabo. Nemo enim ipsam voluptatem
                                        quia voluptas sit aspernatur aut odit
                                        aut fugit, sed quia consequuntur magni
                                        dolores eos qui ratione voluptatem sequi
                                        nesciunt. Neque porro quisquam est, qui
                                        dolorem ipsum quci velit modi tempora
                                        incidunt ut labore et dolore magnam
                                        aliquam quaerat .
                                    </p>
                                </div>

                                <div class="room-details-review">
                                    <h2>Clients Review and Retting's</h2>
                                    <div class="review-ratting">
                                        <h3>Your retting:</h3>
                                        <i class="bx bx-star"></i>
                                        <i class="bx bx-star"></i>
                                        <i class="bx bx-star"></i>
                                        <i class="bx bx-star"></i>
                                        <i class="bx bx-star"></i>
                                    </div>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <textarea
                                                        name="message"
                                                        class="form-control"
                                                        cols="30"
                                                        rows="8"
                                                        required
                                                        data-error="Write your message"
                                                        placeholder="Write your review here.... "
                                                    ></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <button
                                                    type="submit"
                                                    class="default-btn btn-bg-three"
                                                >
                                                    Submit Review
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Room Details Area End -->

            <!-- Room Details Other -->
            <div class="room-details-other pb-70">
                <div class="container">
                    <div class="room-details-text">
                        <h2>Our Related Offer</h2>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="room-card-two">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-md-4 p-0">
                                        <div class="room-card-img">
                                            <a href="room-details.html">
                                                <img
                                                    src="assets/img/room/room-style-img1.jpg"
                                                    alt="Images"
                                                />
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-8 p-0">
                                        <div class="room-card-content">
                                            <h3>
                                                <a href="room-details.html"
                                                    >Luxury Room</a
                                                >
                                            </h3>
                                            <span>320 / Per Night </span>
                                            <div class="rating">
                                                <i class="bx bxs-star"></i>
                                                <i class="bx bxs-star"></i>
                                                <i class="bx bxs-star"></i>
                                                <i class="bx bxs-star"></i>
                                                <i class="bx bxs-star"></i>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet,
                                                adipiscing elit. Suspendisse et
                                                faucibus felis, sed pulvinar
                                                purus.
                                            </p>
                                            <ul>
                                                <li>
                                                    <i class="bx bx-user"></i> 4
                                                    Person
                                                </li>
                                                <li>
                                                    <i class="bx bx-expand"></i>
                                                    35m2 / 376ft2
                                                </li>
                                            </ul>

                                            <ul>
                                                <li>
                                                    <i
                                                        class="bx bx-show-alt"
                                                    ></i>
                                                    Sea Balcony
                                                </li>
                                                <li>
                                                    <i class="bx bxs-hotel"></i>
                                                    Kingsize / Twin
                                                </li>
                                            </ul>

                                            <a
                                                href="room-details.html"
                                                class="book-more-btn"
                                            >
                                                Book Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="room-card-two">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-md-4 p-0">
                                        <div class="room-card-img">
                                            <a href="room-details.html">
                                                <img
                                                    src="assets/img/room/room-style-img2.jpg"
                                                    alt="Images"
                                                />
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-8 p-0">
                                        <div class="room-card-content">
                                            <h3>
                                                <a href="room-details.html"
                                                    >Single Room</a
                                                >
                                            </h3>
                                            <span>300 / Per Night </span>
                                            <div class="rating">
                                                <i class="bx bxs-star"></i>
                                                <i class="bx bxs-star"></i>
                                                <i class="bx bxs-star"></i>
                                                <i class="bx bxs-star"></i>
                                                <i class="bx bxs-star"></i>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet,
                                                adipiscing elit. Suspendisse et
                                                faucibus felis, sed pulvinar
                                                purus.
                                            </p>
                                            <ul>
                                                <li>
                                                    <i class="bx bx-user"></i> 1
                                                    Person
                                                </li>
                                                <li>
                                                    <i class="bx bx-expand"></i>
                                                    25m2 / 276ft2
                                                </li>
                                            </ul>

                                            <ul>
                                                <li>
                                                    <i
                                                        class="bx bx-show-alt"
                                                    ></i>
                                                    Sea Balcony
                                                </li>
                                                <li>
                                                    <i class="bx bxs-hotel"></i>
                                                    Smallsize / Twin
                                                </li>
                                            </ul>

                                            <a
                                                href="room-details.html"
                                                class="book-more-btn"
                                            >
                                                Book Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Room Details Other End -->
        </FrontendLayout>
    </div>
</template>
