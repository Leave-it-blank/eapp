<x-guest-layout>

    <main style="background-image: url('Landing_Page/Bg.svg'); background-repeat: repeat-y;">
        <section>
            <nav>
                <div class="flex flex-row items-center justify-between px-3 py-5 sm:px-10">
                    <div>
                        <img
                            src="Landing_Page/images/Logo.svg" height="43px" width="107px"
                            alt="Company Logo">
                    </div>
                    <div class="flex hidden flex-row items-center self-center w-[350px] md:flex">
                        <div class="flex w-full flex-col items-center justify-center gap-1">
                            <a href="#" class="font-bold"><span>Home</span></a>
                            <div class="border-b-4 border-lime-500 w-[42px]">
                            </div>
                        </div>
                        <div class="flex w-full flex-col items-center justify-center gap-1">
                            <div class="hover:border-b-4  border-lime-500  "> <a href="#about" class="font-bold"> <span> About us </span></a>

                            </div>
                        </div>
                        <div class="flex w-full flex-col items-center justify-center gap-1">
                            <div class="hover:border-b-4  border-lime-500  "> <a href="#services" class="font-bold"> <span> Services</span></a>

                            </div>
                        </div>
                        <div class="flex w-full flex-col items-center justify-center gap-1">
                            <div class="hover:border-b-4  border-lime-500  ">
                                <a href="#contact"  class="font-bold "> Contact us </a>

                            </div>
                        </div>

                    </div>
                    @if (Route::has('login'))
                        @auth
                            <a href="/dashboard">

                                <button class="  text-white py-1 font-bold px-6 rounded-md" style="background: linear-gradient(198.89deg, #6ACB7A 5.79%, #5EB797 93.04%); border-radius: 5px;">
                                    Dashboard
                                </button>
                            </a>
                        @else
                            <a href="/login">
                                <button class="  text-white py-1 font-bold px-6 rounded-md" style="background: linear-gradient(198.89deg, #6ACB7A 5.79%, #5EB797 93.04%); border-radius: 5px;">
                                    Sign in
                                </button>
                            </a>
                        @endauth
                    @endif

                </div>
            </nav>
        </section>
        <section>
            <div class="mx-auto flex w-3/4 flex-col items-center justify-center gap-3 font-bold">
                <h1 class="px-5 text-3xl font-extrabold sm:text-5xl md:text-6xl">E-Waste Solutions</h1>
                <div class="border-b-4 border-lime-500 w-[260px]">

                </div>
            </div>

            <div
                id="carouselExampleCaptions"
                class="relative bg-opacity-25 bg-gradient-to-t from-lime-50 to-transparent p-16 bg-gradient-from-b from-1 to-0"
                data-te-carousel-init
                data-te-carousel-slide>
                <!--Carousel indicators-->
                <div
                    class="absolute right-0 bottom-0 left-0 mb-4 flex list-none justify-center p-0 z-[2] mx-[15%]"
                    data-te-carousel-indicators>
                    <button
                        type="button"
                        data-te-target="#carouselExampleCaptions"
                        data-te-slide-to="0"
                        data-te-carousel-active
                        class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-gray-900 bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                        aria-current="true"
                        aria-label="Slide 1"></button>
                    <button
                        type="button"
                        data-te-target="#carouselExampleCaptions"
                        data-te-slide-to="1"
                        class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-gray-400 bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                        aria-label="Slide 2"></button>
                    <button
                        type="button"
                        data-te-target="#carouselExampleCaptions"
                        data-te-slide-to="2"
                        class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-gray-400 bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                        aria-label="Slide 3"></button>
                </div>

                <!--Carousel items-->
                <div
                    class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                    <!--First item-->
                    <div
                        class="relative float-left w-full motion-reduce:transition-none transition-transform ease-in-out -mr-[100%] duration-[600ms]"
                        data-te-carousel-active
                        data-te-carousel-item
                        style="backface-visibility: hidden">
                        <img
                            src="Landing_Page/images/BannerBackground.svg"
                            class="block w-full pt-14"
                            alt="..."/>
                        <div
                            class="absolute top-5 py-5 text-center text-black inset-x-[15%]">

                            <p class="text-xs stoke sm:text-xl md:text-3xl 2xl:text-4xl">
                                Delivering comprehensive and sustainable e-waste solutions
                                to meet your needs.
                            </p>
                        </div>
                    </div>
                    <!--Second item-->
                    <div
                        class="relative float-left hidden w-full motion-reduce:transition-none transition-transform ease-in-out -mr-[100%] duration-[600ms]"
                        data-te-carousel-item
                        style="backface-visibility: hidden">
                        <img
                            src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(22).jpg"
                            class="block w-full"
                            alt="..."/>
                        <div
                            class="absolute bottom-5 hidden py-5 text-center text-white inset-x-[15%] md:block">

                            <p>
                                Delivering comprehensive and sustainable e-waste solutions
                                to meet your needs.
                            </p>
                        </div>
                    </div>
                    <!--Third item-->
                    <div
                        class="relative float-left hidden w-full motion-reduce:transition-none transition-transform ease-in-out -mr-[100%] duration-[600ms]"
                        data-te-carousel-item
                        style="backface-visibility: hidden">
                        <img
                            src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(23).jpg"
                            class="block w-full"
                            alt="..."/>
                        <div
                            class="absolute bottom-5 hidden py-5 text-center text-white inset-x-[15%] md:block">


                        </div>
                    </div>
                </div>


            </div>
        </section>
        <section class="bg-lime-50 bg-opacity-30" id="about">
            <div class="flex w-full flex-col items-center justify-center gap-3 pt-20">
                <h1 class="px-5 text-4xl font-bold md:text-5xl">
                    About Us
                </h1>
                <div class="border-b-4 border-lime-500 w-[160px]">

                </div>
            </div>

            <div
                class="mx-auto flex w-full max-w-screen-2xl flex-col items-center justify-center gap-20 px-5 py-5 min-h-[225px] sm:flex-row sm:justify-between sm:px-20">
                <div class="flex w-full flex-wrap text-justify sm:w-2/3 sm:text-xl md:text-2xl xl:text-3xl">
                    E-waste Solutions provides comprehensive and sustainable solutions for managing electronic waste.
                    Our experienced team offers secure data destruction, certified e-waste recycling, and asset recovery
                    services for a variety of electronic devices. We're committed to protecting the environment and
                    delivering tailored solutions to meet our clients' unique needs.
                </div>
                <div>
                    <img
                        class="h-56 w-56 -translate-y-10 translate-x-[25px] sm:translate-x-0 sm:translate-y-0 md:h-full md:w-full"
                        src="Landing_Page/recycle.svg">
                </div>


            </div>
        </section>

        <section class="bg-lime-50 bg-opacity-30" id="services" >
            <div class="flex w-full flex-col items-center justify-center gap-3 pt-20" >
                <h1 class="px-5 text-4xl font-bold md:text-5xl">
                    Our Services
                </h1>
                <div class="border-b-4 border-lime-500 w-[160px]">

                </div>
            </div>

            <div
                class="mx-auto flex w-full max-w-screen-2xl flex-col items-center justify-center px-5 py-5 py-10 min-h-[225px] sm:flex-row sm:justify-between sm:px-20 md:py-28">
                <div
                    class=" w-full  mx-auto  rounded-md flex justify-center items-center py-5 sm:py-10 px-5 sm:px-20 bg-[#EBFBEE]">
                    <img class="translate-y-1 sm:translate-y-3" src="Landing_Page/images/Ourservices.svg">
                </div>
            </div>

            </div>
        </section>
        <section class="bg-lime-50 bg-opacity-30">
            <div class="flex w-full flex-col items-center justify-center gap-3 pt-10">
                <h1 class="px-5 text-4xl font-bold capitalize md:text-5xl">
                    Featured Posts
                </h1>
                <div class="border-b-4 border-lime-500 w-[190px]">

                </div>
            </div>

            <div
                class="mx-auto flex w-full max-w-screen-2xl flex-col items-center justify-center px-5 py-5 min-h-[225px] sm:flex-row sm:justify-between sm:px-20 md:py-10">

                <div
                    class="grid w-full flex-1 shrink-0 grid-cols-1 justify-items-center gap-3 overflow-visible md:grid-cols-2 xl:grid-cols-4">
                    <div
                        class="flex w-80 flex-col items-center justify-center gap-5 rounded-xl bg-white px-4 py-4 shadow-md">
                        <img src="Landing_Page/Feature/b1.png" class="h-40 w-80 n">
                        <h3 class="px-5 text-green-600">Recycling E-waste into Clipboards</h3>
                    </div>
                    <div
                        class="flex w-80 flex-col items-center justify-center gap-5 rounded-xl bg-white px-4 py-4 shadow-md">
                        <img src="Landing_Page/Feature/b1.png" class="h-40 w-80">
                        <h3 class="px-5 text-green-600">Data Storage upcycling - Floppy Disc</h3>
                    </div>
                    <div
                        class="flex w-80 flex-col items-center justify-center gap-5 rounded-xl bg-white px-4 py-4 shadow-md">
                        <img src="Landing_Page/Feature/b1.png" class="h-40 w-80">
                        <h3 class="px-5 text-green-600">Incredible PCB Found Art Sculptures by Steven Rodrig |
                            Gadgetsin</h3>
                    </div>
                    <div
                        class="flex w-80 flex-col items-center justify-center gap-5 rounded-xl bg-white px-4 py-4 shadow-md">
                        <img src="Landing_Page/Feature/b1.png" class="h-40 w-80">
                        <h3 class="px-5 text-green-600">Australia Post launches e-waste post back service</h3>
                    </div>
                </div>

            </div>

            </div>
        </section>

        <section class="bg-lime-50 bg-opacity-30" id="process">
            <div class="flex w-full flex-col items-center justify-center gap-3 pt-10">
                <h1 class="px-5 text-4xl font-bold capitalize md:text-5xl">
                    Our E-waste management proccess
                </h1>
                <div class="border-b-4 border-lime-500 w-[200px] md:w-[460px]">

                </div>
            </div>

            <div style="background-image: url('Landing_Page/Bg.svg'); background-repeat: no-repeat; background-size: inherit; background-position-x: left"
                class="mx-auto flex w-full max-w-screen-2xl flex-col items-center justify-center px-5 py-5 min-h-[225px] sm:flex-row sm:justify-between sm:px-20 md:py-10">
                <div class="mx-auto flex w-full items-center justify-center rounded-md px-5 py-5 sm:px-20 sm:py-10">
                    <img class="translate-y-1 sm:translate-y-3" src="Landing_Page/images/ManagementProcess.svg">
                </div>
            </div>

            </div>
        </section>
        <section class="bg-lime-50 bg-opacity-30 pb-10">
            <div class="flex w-full flex-col items-center justify-center gap-3 pt-10">
                <h1 class="px-5 text-4xl font-bold capitalize md:text-5xl">
                    Blogs
                </h1>
                <div class="border-b-4 border-lime-500 w-[190px]">

                </div>
            </div>

            <div
                class="mx-auto flex w-full max-w-screen-2xl flex-col items-center justify-center px-5 py-5 min-h-[225px] sm:flex-row sm:justify-between sm:px-20 md:py-10">

                <div
                    class="grid w-full flex-1 shrink-0 grid-cols-1 justify-items-center gap-3 overflow-visible md:grid-cols-2 xl:grid-cols-4">

                    <div class="relative h-60 w-full rounded-xl bg-center shadow-md md:w-80"
                         style="background-image: url('Landing_Page/blog/blog1.png')">
                        <div
                            class="px-5 text-white absolute bottom-0 py-6 bg-[#3F987E] rounded-b-xl bg-opacity-50 w-full">
                            <h3>10 Things You Should Know About Recycling Electronics</h3>
                        </div>
                    </div>
                    <div class="relative h-60 w-full rounded-xl bg-center shadow-md md:w-80"
                         style="background-image: url('Landing_Page/blog/blog1.png')">
                        <div
                            class="px-5 text-white absolute bottom-0 py-6 bg-[#3F987E] rounded-b-xl bg-opacity-50 w-full">
                            <h3>45 Times People Did Something Clever About Saving The World Instead Of Just Talking</h3>
                        </div>
                    </div>
                    <div class="relative h-60 w-full rounded-xl bg-center shadow-md md:w-80"
                         style="background-image: url('Landing_Page/blog/blog1.png')">
                        <div
                            class="px-5 text-white absolute bottom-0 py-6 bg-[#3F987E] rounded-b-xl bg-opacity-50 w-full">
                            <h3>10 Things You Should Know About Recycling Electronics</h3>
                        </div>
                    </div>
                    <div class="relative h-60 w-full rounded-xl bg-center shadow-md md:w-80"
                         style="background-image: url('Landing_Page/blog/blog1.png')">
                        <div
                            class="px-5 text-white absolute bottom-0 py-6 bg-[#3F987E] rounded-b-xl bg-opacity-50 w-full">
                            <h3>20 Ways to Upcycle Computer Parts / Hardware</h3>
                        </div>
                    </div>

                </div>

            </div>

            </div>
        </section>
        <section class="bg-lime-50 bg-opacity-30 pb-20" id="hub">
            <div class="flex w-full flex-col items-center justify-center gap-3 pt-10">
                <h1 class="px-5 text-4xl font-bold capitalize md:text-5xl">
                    Our Exclusive Hubse
                </h1>
                <div class="border-b-4 border-lime-500 w-[190px]">

                </div>
            </div>

            <div
                class="mx-auto flex w-full max-w-screen-2xl flex-col items-center justify-center px-5 py-5 min-h-[225px] sm:flex-row sm:justify-between sm:px-20 md:py-10">

                <div
                    class="grid w-full flex-1 shrink-0 grid-cols-1 justify-items-center gap-3 overflow-visible md:grid-cols-2 xl:grid-cols-4">

                    <div class="relative h-60 w-full rounded-xl bg-center shadow-md md:w-80"
                         style="background-image: url('Landing_Page/exclusive/2.png');  ">
                        <div
                            class="px-5 text-white absolute bottom-0 py-6 bg-[#3F987E] rounded-b-xl bg-opacity-60 w-full">
                            <h3> Apple, New York City</h3>
                            <h4 class="text-xs">View Details</h4>
                        </div>
                    </div>
                    <div class="relative h-60 w-full rounded-xl bg-center shadow-md md:w-80"
                         style="background-image: url('Landing_Page/exclusive/2.png')">
                        <div
                            class="px-5 text-white absolute bottom-0 py-6 bg-[#3F987E] rounded-b-xl bg-opacity-60 w-full">
                            <h3>Peenya, Bangalore</h3>
                            <h4 class="text-xs">View Details</h4>
                        </div>
                    </div>
                    <div class="relative h-60 w-full rounded-xl bg-center shadow-md md:w-80"
                         style="background-image: url('Landing_Page/exclusive/2.png')">
                        <div
                            class="px-5 text-white absolute bottom-0 py-6 bg-[#3F987E] rounded-b-xl bg-opacity-60 w-full">
                            <h3>Dehu Road, Pune</h3>
                            <h4 class="text-xs">View Details</h4>
                        </div>
                    </div>
                    <div class="relative h-60 w-full rounded-xl bg-center shadow-md md:w-80"
                         style="background-image: url('Landing_Page/exclusive/2.png')">
                        <div
                            class="px-5 text-white absolute bottom-0 py-6 bg-[#3F987E] rounded-b-xl bg-opacity-60 w-full">
                            <h3>Hardware, London</h3>
                            <h4 class="text-xs">View Details</h4>
                        </div>
                    </div>

                </div>

            </div>

            </div>
        </section>
        <section>
            <div class="relative h-full"  id="contact">

                <div class="relative h-64">
                    <div class="absolute inset-0 h-full bg-cover bg-center"
                         style="background-image: url('Landing_Page/Pickup.jpg');"></div>
                    <div class="absolute top-1/3 left-1/4 flex flex-row font-bold text-white">

                        <div class="flex flex-col gap-4">
                            <div class="text-xl sm:text-3xl">


                                <span
                                    style="  font-style: normal !important;font-weight: 700 !important;  display: flex;align-items: center; color: #FFFFFF; ">Schedule pick up</span>
                                <span
                                    style="  font-style: normal;font-weight: 700; display: flex;align-items: center; color: #FFFFFF; ">Request now</span>
                            </div>
                            <a href="{{route('eWasteForm')}}">  <button class="px-2 py-1 py-2 text-sm sm:px-4 sm:text-xl md:text-2xl"
                                    style="background: linear-gradient(198.89deg, #6ACB7A 5.79%, #5EB797 93.04%); border-radius: 5px;">
                                Schedule Pickup
                                </button> </a>
                        </div>
                        <img class="w-20" src="Landing_Page/arrow.svg" alt="svg">


                    </div>

                </div>
            </div>

        </section>

        <!-- Footer container -->
        <section>

            <footer
                class="px-16 text-center text-white sm:px-28 lg:text-left" style="background: #131313 !important;">

                <!-- Main container div: holds the entire content of the footer, including four sections (Tailwind Elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
                <div class="py-10 text-center md:text-left">
                    <div class="grid gap-12 grid-1 md:grid-cols-2 lg:grid-cols-4">
                        <!-- Tailwind Elements section -->

                        <!-- Products section -->
                        <div class="">
                            <h6
                                class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                                Our Company
                            </h6>
                            <p class="mb-4">
                                <a href="#!" class="dark:text-neutral-200"
                                >Home</a
                                >
                            </p>
                            <p class="mb-4">
                                <a href="#!" class="dark:text-neutral-200"
                                >About us</a
                                >
                            </p>
                            <p class="mb-4">
                                <a href="#!" class="dark:text-neutral-200"
                                >Services</a
                                >
                            </p>

                            <p>
                                <a href="#!" class="dark:text-neutral-200"
                                >Contact us</a
                                >
                            </p>
                        </div>
                        <div class="pr-5">
                            <h6
                                class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                                Our Office
                            </h6>
                            <p class="mb-4 flex flex-row gap-2 text-justify text-xs">
                                <span class="mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
  <path stroke-linecap="round" stroke-linejoin="round"
        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
</svg>

                                </span>
                                Lorem ipsum dolor sit amet consectetur. Adipiscing eget mattis feugiat felis ac turpis
                                fringilla laoreet. Eu quisque sociis sed id tellus. Lobortis euismod er.
                            </p>
                            <p class="mb-4 flex flex-row gap-2 text-justify text-xs">
                                      <span class="mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
  <path stroke-linecap="round" stroke-linejoin="round"
        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
</svg>

                                </span>
                                Lorem ipsum dolor sit amet consectetur. Adipiscing eget mattis feugiat felis ac turpis
                            </p>

                        </div>
                        <!-- Useful links section -->
                        <div class="">
                            <h6
                                class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                                Follow us
                            </h6>
                            <div class="mb-6 flex justify-center text-xs md:justify-start">
                                <a
                                    href="#!"
                                    type="button"
                                    class="m-1 h-6 w-6 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                                    data-te-ripple-init
                                    data-te-ripple-color="light">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="mx-auto h-full w-4"
                                        fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                    </svg>
                                </a>

                                <a
                                    href="#!"
                                    type="button"
                                    class="m-1 h-6 w-6 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                                    data-te-ripple-init
                                    data-te-ripple-color="light">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="mx-auto h-full w-4"
                                        fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                    </svg>
                                </a>

                                <a
                                    href="#!"
                                    type="button"
                                    class="m-1 h-6 w-6 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                                    data-te-ripple-init
                                    data-te-ripple-color="light">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="mx-auto h-full w-4"
                                        fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"/>
                                    </svg>
                                </a>

                                <a
                                    href="#!"
                                    type="button"
                                    class="m-1 h-6 w-6 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                                    data-te-ripple-init
                                    data-te-ripple-color="light">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="mx-auto h-full w-4"
                                        fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                    </svg>
                                </a>

                                <a
                                    href="#!"
                                    type="button"
                                    class="m-1 h-6 w-6 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                                    data-te-ripple-init
                                    data-te-ripple-color="light">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="mx-auto h-full w-4"
                                        fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
                                    </svg>
                                </a>

                                <a
                                    href="#!"
                                    type="button"
                                    class="m-1 h-6 w-6 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                                    data-te-ripple-init
                                    data-te-ripple-color="light">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="mx-auto h-full w-4"
                                        fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- Contact section -->
                        <div>
                            <h6
                                class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
                                Connect
                            </h6>
                            <p class="mb-4 flex items-center justify-center md:justify-start">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="mr-3 h-5 w-5">
                                    <path
                                        d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z"/>
                                    <path
                                        d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z"/>
                                </svg>
                                New York, NY 10012, US
                            </p>
                            <p class="mb-4 flex items-center justify-center md:justify-start">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="mr-3 h-5 w-5">
                                    <path
                                        d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z"/>
                                    <path
                                        d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z"/>
                                </svg>
                                info@example.com
                            </p>
                            <p class="mb-4 flex items-center justify-center md:justify-start">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="mr-3 h-5 w-5">
                                    <path
                                        fill-rule="evenodd"
                                        d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                        clip-rule="evenodd"/>
                                </svg>
                                + 01 234 567 88
                            </p>
                            <p class="flex items-center justify-center md:justify-start">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="mr-3 h-5 w-5">
                                    <path
                                        fill-rule="evenodd"
                                        d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                                        clip-rule="evenodd"/>
                                </svg>
                                + 01 234 567 89
                            </p>
                        </div>
                    </div>
                </div>


            </footer>
        </section>
    </main>
</x-guest-layout>



