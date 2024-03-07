<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <!-- Top Header -->
    <header class="top-header top-header-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-2 pr-0">
                    <div class="language-list">
                        <select class="language-list-item">
                            <option>English</option>
                            <option>العربيّة</option>
                            <option>Deutsch</option>
                            <option>Português</option>
                            <option>简体中文</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-9 col-md-10">
                    <div class="header-right">
                        <ul>
                            <li>
                                <i class="bx bx-home-alt"></i>
                                <a href="#"
                                    >DIT Road 2/1 East Rampura Lift 10 AlKaderia
                                    Restaurant Building, 1219 Dhaka</a
                                >
                            </li>
                            <li>
                                <i class="bx bx-phone-call"></i>
                                <a href="tel: 0924887766">+8801723-835125</a>
                            </li>
                            <li>
                                <i class="bx bx-envelope"></i>
                                <a href="mailto:rosegarden.bd@gmail.com"
                                    >rosegarden.bd@gmail.com</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Top Header -->

    <!-- Navbar -->
    <div>
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img
                        src="assets/img/logos/logo-1.png"
                        class="logo-one"
                        alt="Logo"
                    />
                    <img
                        src="assets/img/logos/footer-logo1.png"
                        class="logo-two"
                        alt="Logo"
                    />
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img
                                src="assets/img/logos/logo-1.png"
                                class="logo-one"
                                alt="Logo"
                            />
                            <img
                                src="assets/img/logos/footer-logo1.png"
                                class="logo-two"
                                alt="Logo"
                            />
                        </a>

                        <div
                            class="collapse navbar-collapse mean-menu"
                            id="navbarSupportedContent"
                        >
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <Link href="/" class="nav-link active">
                                        Home
                                        <!-- <i class='bx bx-chevron-down'></i> -->
                                    </Link>
                                    <!-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link active">
                                                Home One  
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link">
                                                Home Two
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3.html" class="nav-link">
                                                Home Three
                                            </a>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="nav-item">
                                    <Link
                                        :href="route('about')"
                                        class="nav-link"
                                    >
                                        About
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Pages
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <Link
                                                :href="route('book')"
                                                class="nav-link"
                                            >
                                                Booking
                                            </Link>
                                        </li>

                                        <li class="nav-item">
                                            <Link
                                                :href="route('team')"
                                                class="nav-link"
                                            >
                                                Team
                                            </Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link
                                                :href="route('faq')"
                                                class="nav-link"
                                            >
                                                FAQ
                                            </Link>
                                        </li>

                                        <li class="nav-item">
                                            <Link
                                                :href="route('restaurant')"
                                                class="nav-link"
                                            >
                                                Restaurant
                                            </Link>
                                        </li>

                                        <li class="nav-item">
                                            <Link
                                                :href="route('reservation')"
                                                class="nav-link"
                                            >
                                                Reservation
                                            </Link>
                                        </li>

                                        <li class="nav-item">
                                            <Link
                                                :href="route('gallery')"
                                                class="nav-link"
                                            >
                                                Gallery
                                            </Link>
                                        </li>

                                        <li class="nav-item">
                                            <Link
                                                :href="route('testimonials')"
                                                class="nav-link"
                                            >
                                                Testimonials
                                            </Link>
                                        </li>

                                        <li class="nav-item">
                                            <Link
                                                :href="route('checkout')"
                                                class="nav-link"
                                            >
                                                Check out
                                            </Link>
                                        </li>

                                        <li class="nav-item">
                                            <Link
                                                :href="route('sign-in')"
                                                class="nav-link"
                                            >
                                                Sign In
                                            </Link>
                                        </li>

                                        <li class="nav-item">
                                            <Link
                                                :href="route('sign-up')"
                                                class="nav-link"
                                            >
                                                Sign Up
                                            </Link>
                                        </li>

                                        <li class="nav-item">
                                            <Link
                                                :href="route('terms-condition')"
                                                class="nav-link"
                                            >
                                                Terms & Conditions
                                            </Link>
                                        </li>

                                        <li class="nav-item">
                                            <Link
                                                :href="route('privacy-policy')"
                                                class="nav-link"
                                            >
                                                Privacy Policy
                                            </Link>
                                        </li>

                                        <li class="nav-item">
                                            <Link
                                                :href="route('404')"
                                                class="nav-link"
                                            >
                                                404 page
                                            </Link>
                                        </li>

                                        <li class="nav-item">
                                            <Link
                                                :href="route('coming-soon')"
                                                class="nav-link"
                                            >
                                                Coming Soon
                                            </Link>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Services
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <Link
                                                :href="route('services-1')"
                                                class="nav-link"
                                            >
                                                Services Style One
                                            </Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link
                                                :href="route('services-2')"
                                                class="nav-link"
                                            >
                                                Services Style Two
                                            </Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link
                                                :href="route('service-details')"
                                                class="nav-link"
                                            >
                                                Service Details
                                            </Link>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <Link
                                                :href="route('blog-1')"
                                                class="nav-link"
                                            >
                                                Blog Style One
                                            </Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link
                                                :href="route('blog-2')"
                                                class="nav-link"
                                            >
                                                Blog Style Two
                                            </Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link
                                                :href="route('blog-details')"
                                                class="nav-link"
                                            >
                                                Blog Details
                                            </Link>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Rooms
                                        <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <Link
                                                :href="route('room')"
                                                class="nav-link"
                                            >
                                                Rooms
                                            </Link>
                                        </li>
                                        <li class="nav-item">
                                            <Link
                                                :href="route('room-details')"
                                                class="nav-link"
                                            >
                                                Room Details
                                            </Link>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <Link
                                        :href="route('contact')"
                                        class="nav-link"
                                    >
                                        Contact
                                    </Link>
                                </li>

                                <li class="nav-item-btn">
                                    <a
                                        href="#"
                                        class="default-btn btn-bg-one border-radius-5"
                                        >Book Now</a
                                    >
                                </li>
                            </ul>

                            <div class="nav-btn">
                                <a
                                    href="#"
                                    class="default-btn btn-bg-one border-radius-5"
                                    >Book Now</a
                                >
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar -->
    <slot />

    <!-- Footer -->
    <footer class="footer-area footer-bg">
        <div class="container">
            <div class="footer-top pt-100 pb-70">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img
                                        src="assets/img/logos/footer-logo1.png"
                                        alt="Images"
                                    />
                                </a>
                            </div>
                            <p>
                                Hotel Rose Garden is one of the best hotel located in dhaka which offer best service based on its reasonable price.
                            </p>
                            <ul class="footer-list-contact">
                                <li>
                                    <i class="bx bx-home-alt"></i>
                                    <a href="#"
                                        >>DIT Road 2/1 East Rampura Lift 10
                                        AlKaderia Restaurant Building,
                                        Dhaka 1219</a
                                    >
                                </li>
                                <li>
                                    <i class="bx bx-phone-call"></i>
                                    <a href="tel:+880 1723-835125">+8801723-835125</a>
                                </li>
                                <li>
                                    <i class="bx bx-envelope"></i>
                                    <a href="mailto:rosegarden@gmail.com"
                                        >rosegarden@gmail.com</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget pl-5">
                            <h3>Links</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="about.html" target="_blank">
                                        <i class="bx bx-caret-right"></i>
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="services-1.html" target="_blank">
                                        <i class="bx bx-caret-right"></i>
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="team.html" target="_blank">
                                        <i class="bx bx-caret-right"></i>
                                        Team
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.html" target="_blank">
                                        <i class="bx bx-caret-right"></i>
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="terms-condition.html"
                                        target="_blank"
                                    >
                                        <i class="bx bx-caret-right"></i>
                                        Terms
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="privacy-policy.html"
                                        target="_blank"
                                    >
                                        <i class="bx bx-caret-right"></i>
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Useful Links</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="index.html" target="_blank">
                                        <i class="bx bx-caret-right"></i>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-1.html" target="_blank">
                                        <i class="bx bx-caret-right"></i>
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html" target="_blank">
                                        <i class="bx bx-caret-right"></i>
                                        FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href="testimonials.html" target="_blank">
                                        <i class="bx bx-caret-right"></i>
                                        Testimonials
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.html" target="_blank">
                                        <i class="bx bx-caret-right"></i>
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html" target="_blank">
                                        <i class="bx bx-caret-right"></i>
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Newsletter</h3>
                            <p>
                                Overall, email newsletters are a powerful tool
                                for connecting with your target audience,
                                building your brand, and achieving your
                                marketing goals.
                            </p>
                            <div class="footer-form">
                                <form
                                    class="newsletter-form"
                                    data-toggle="validator"
                                    method="POST"
                                >
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    placeholder="Your Email*"
                                                    name="EMAIL"
                                                    required
                                                    autocomplete="off"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <button
                                                type="submit"
                                                class="default-btn btn-bg-one"
                                            >
                                                Subscribe Now
                                            </button>
                                            <div
                                                id="validator-newsletter"
                                                class="form-result"
                                            ></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copy-right-area">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="copy-right-text text-align1">
                            <p>
                                Copyright Atoli. All Rights Reserved by
                                <a
                                    href="https://hibootstrap.com/"
                                    target="_blank"
                                    >HiBootstrap</a
                                >
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="social-icon text-align2">
                            <ul class="social-link">
                                <li>
                                    <a href="#" target="_blank"
                                        ><i class="bx bxl-facebook"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"
                                        ><i class="bx bxl-twitter"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"
                                        ><i class="bx bxl-instagram"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"
                                        ><i class="bx bxl-pinterest-alt"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"
                                        ><i class="bx bxl-youtube"></i
                                    ></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
</template>

<script>
export default {};
</script>

<style></style>
