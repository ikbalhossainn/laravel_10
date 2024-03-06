<script setup>
    import TopHeader from '@/Components/TopHeader.vue';
    import Navbar from '@/Components/Navbar.vue';
    import Banner from '@/Components/Banner.vue';
    import About from '@/Components/About.vue';
    import Services from '@/Components/Services.vue';
    import Reservation from '@/Components/Reservation.vue';
    import Specialty from '@/Components/Specialty.vue';
    import Room from '@/Components/Room.vue';
    import Testimonials from '@/Components/Testimonials.vue';
    import FAQ from '@/Components/FAQ.vue';
    import Team from '@/Components/Team.vue';
    import Blog from '@/Components/Blog.vue';
    import Footer from '@/Components/Footer.vue';
    import FrontendLayout from '@/Layouts/FrontendLayout.vue';

</script>
<template>
    <div>
        <!-- Top Header Start -->
                <!-- <TopHeader /> -->
        <!-- Top Header End -->
        <FrontendLayout>
         <!-- PreLoader Start -->
 
        <!-- PreLoader End -->


        <!-- Start Navbar Area -->
                <!-- <Navbar /> -->
        <!-- End Navbar Area -->

        <!-- Banner Area -->
                <Banner />
        <!-- Banner Area End -->

        <!-- Banner Form Area -->
     
        <!-- Banner Form Area End -->

        <!-- About Area -->
                <About />
        <!-- About Area End -->

        <!-- Services Area -->
                <Services />
        <!-- Services Area End -->

        <!-- Reservation Area -->
              <Reservation />
        <!-- Reservation Area End -->

        <!-- Specialty Area End -->
              <Specialty />
        <!-- Specialty Area End -->

        <!-- Room Area -->
             <Room />
        <!-- Room Area End -->

        <!-- Testimonials Area -->
            <Testimonials />
        <!-- Testimonials Area End -->

        <!-- FAQ Area -->
             <FAQ />
        <!-- FAQ Area End -->

        <!-- Team Area -->
            <Team />
        <!-- Team Area End -->

        <!-- Blog Area -->
            <Blog />
        <!-- Blog Area End -->

        <!-- Footer Area -->
            <!-- <Footer /> -->
        <!-- Footer Area End -->
    </FrontendLayout>
    </div>
</template>
