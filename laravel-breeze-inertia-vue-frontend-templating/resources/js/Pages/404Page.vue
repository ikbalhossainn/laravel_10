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
        <div class="inner-banner inner-bg9">
            <div class="container">
                <div class="inner-title">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>404 Error page!</li>
                    </ul>
                    <h3>404 Error page!</h3>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Start 404 Error -->
		<div class="error-area">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="error-content">
						<h1>4 <span>0</span> 4</h1>
						<h3>Oops! Page Not Found</h3>
						<p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
						<a href="index.html" class="default-btn btn-bg-three">
							Return To Home Page
						</a>
					</div>
				</div>
			</div>
		</div>
        <!-- End 404 Error -->
        </FrontendLayout>
    </div>
</template>
