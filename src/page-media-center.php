<?php get_header(); ?>
<?php /* Template Name: Page Media Center */ ?>

<!-- Header -->
<div class="w-full min-h-screen relative">
    <div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%] max-md:w-[150%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%] max-md:hidden"></div>
    </div>

    <div class="flex flex-row-reverse min-h-screen max-md:hidden">
        <div class="flex-1 flex items-center justify-center">
            <div class="flex flex-col flex-1 items-start gap-7 pl-[11.25rem] pr-[7.5rem] sticky top-[var(--header-menu-height)]">
                <h1 class="text-[#1C2126] text-[5rem] font-caudex itali">Media <span class="font-lato not-italic font-medium">Center</span></h1>

                <p class="text-[#1C2126] font-lato text-lg font-light leading-7 text-start max-w-[23.125rem]">
                    Our state-of-the-art media center offers a centralized hub for clients, partners, 
                    and curious minds to explore the latest company news, 
                    thought-provoking blog articles, and stay informed about industry innovations and updates.
                </p>
            </div>
        </div>

        <div class="flex-1">
            <img :src="require('@/Assets/Images/unsplash_GI10ZiPO_3w (1).png')" alt="image" draggable="false" class="h-full w-full object-cover select-none">
        </div>
    </div>

    <!-- mobile -->
    <div class="hidden max-md:flex flex-col">
        <div class="flex items-center min-h-screen bg-fixed bg-cover bg-center" id="paralax" :style="`background-image: url('${require('@/Assets/Images/unsplash_GI10ZiPO_3w (1).png')}')`">
            <div class="flex items-center justify-center">
                <div class="px-[2.1875rem]">
                    <h1 class="text-white text-[5rem] font-caudex italic text-start flex flex-col">Media <span class="font-lato not-italic font-medium">Center</span></h1>
                </div>
            </div>
        </div>

        <div class="px-[2.1875rem] pt-[6.25rem]">
            <p class="text-[#1C2126] font-lato text-lg font-light leading-7 text-start max-w-[23.125rem]">
                Our state-of-the-art media center offers a centralized hub for clients, partners, 
                and curious minds to explore the latest company news, 
                thought-provoking blog articles, and stay informed about industry innovations and updates.
            </p>
        </div>
    </div>
    <!-- end mobile -->
</div>
<!-- Header end -->

<!-- Content -->
<div class="w-full min-h-screen relative">
    <div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%] max-md:w-[150%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%] max-md:hidden"></div>
    </div>

    <div class="flex flex-col items-start gap-16 pl-[11.25rem] py-[11.25rem] max-md:pl-0">
        <div class="flex flex-col w-full">
            <div class="flex max-h-[18.75rem] h-full max-md:flex-col max-md:max-h-max">
                <div class="flex-1">
                    <img :src="require('@/Assets/Images/unsplash_Q8_-Cc-IXRY (1).png')" alt="image" class="h-full w-full object-cover">
                </div>

                <div class="flex-[3] border-b border-solid border-[#1c212633]">
                    <div class="flex flex-col pl-[3.25rem] py-10 items-start justify-between h-full max-w-[46.125rem] max-md:gap-8 max-md:px-[2.1875rem]">
                        <div class="flex gap-2">
                            
                        </div>

                        <div class="flex flex-col gap-4">
                            <h2 class="font-lato text-[#1C2126] text-2xl font-medium leading-7 text-start">In cursus mauris sem sem mattis vestibulum in non dictum</h2>
                            <p class="font-lato text-[#1C2126] text-base font-light leading-7 text-start">Sodales at vitae interdum habitant bibendum phasellus purus. Egestas tellus, morbi augue amet, sit duis sit vitae. Duis id lorem mi mattis tristique pharetra, hac at purus...</p>
                        </div>

                        <div class="flex justify-between w-full items-center">
                            <router-link :to="{ name: 'BlogPage' }">
                            <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                                <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300">Read More</span>
                                <img :src="require('@/Assets/Icons/arrow_rigth2_black.svg')" alt="" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 group-hover:invert">
                            </button>
                                </router-link>

                                <span class="text-[#1C2126]/70 font-lato text-[0.625rem] font-medium text-center">12/12/2021</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex max-h-[18.75rem] h-full max-md:flex-col max-md:max-h-max">
                    <div class="flex-1">
                        <img :src="require('@/Assets/Images/unsplash_PhYq704ffdA (1).png')" alt="image" class="h-full w-full object-cover">
                    </div>

                    <div class="flex-[3] border-b border-solid border-[#1c212633]">
                        <div class="flex flex-col pl-[3.25rem] py-10 items-start justify-between h-full max-w-[46.125rem] max-md:gap-8 max-md:px-[2.1875rem]">
                            <div class="flex gap-2">
                               
                            </div>

                            <div class="flex flex-col gap-4">
                                <h2 class="font-lato text-[#1C2126] text-2xl font-medium leading-7 text-start">Nibh sed arcu luctus viverra egestas varius nulla</h2>
                                <p class="font-lato text-[#1C2126] text-base font-light leading-7 text-start">Sodales at vitae interdum habitant bibendum phasellus purus. Egestas tellus, morbi augue amet, sit duis sit vitae. Duis id lorem mi mattis tristique pharetra, hac at purus...</p>
                            </div>

                            <div class="flex justify-between w-full items-center">
                                <router-link :to="{ name: 'BlogPage' }">
                                <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                                    <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300">Read More</span>
                                    <img :src="require('@/Assets/Icons/arrow_rigth2_black.svg')" alt="" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 group-hover:invert">
                                </button>
                                </router-link>

                                <span class="text-[#1C2126]/70 font-lato text-[0.625rem] font-medium text-center">12/12/2021</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex max-h-[18.75rem] h-full max-md:flex-col max-md:max-h-max">
                    <div class="flex-1">
                        <img :src="require('@/Assets/Images/radek-kilijanek-WFQxXtgh79E-unsplash 2 (1).png')" alt="image" class="h-full w-full object-cover">
                    </div>

                    <div class="flex-[3] border-b border-solid border-[#1c212633]">
                        <div class="flex flex-col pl-[3.25rem] py-10 items-start justify-between h-full max-w-[46.125rem] max-md:gap-8 max-md:px-[2.1875rem]">
                            <div class="flex gap-2">
                               
                            </div>

                            <div class="flex flex-col gap-4">
                                <h2 class="font-lato text-[#1C2126] text-2xl font-medium leading-7 text-start">Morbi erat ut arcu adipiscing nulla</h2>
                                <p class="font-lato text-[#1C2126] text-base font-light leading-7 text-start">Sodales at vitae interdum habitant bibendum phasellus purus. Egestas tellus, morbi augue amet, sit duis sit vitae. Duis id lorem mi mattis tristique pharetra, hac at purus...</p>
                            </div>

                            <div class="flex justify-between w-full items-center">
                                <router-link :to="{ name: 'BlogPage' }">
                                <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                                    <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300">Read More</span>
                                    <img :src="require('@/Assets/Icons/arrow_rigth2_black.svg')" alt="" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 group-hover:invert">
                                </button>
                                </router-link>

                                <span class="text-[#1C2126]/70 font-lato text-[0.625rem] font-medium text-center">12/12/2021</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex max-h-[18.75rem] h-full max-md:flex-col max-md:max-h-max">
                    <div class="flex-1">
                        <img :src="require('@/Assets/Images/unsplash_dcL8ESbsGis.png')" alt="image" class="h-full w-full object-cover">
                    </div>

                    <div class="flex-[3] border-b border-solid border-[#1c212633]">
                        <div class="flex flex-col pl-[3.25rem] py-10 items-start justify-between h-full max-w-[46.125rem] max-md:gap-8 max-md:px-[2.1875rem]">
                            <div class="flex gap-2">
                               
                            </div>

                            <div class="flex flex-col gap-4">
                                <h2 class="font-lato text-[#1C2126] text-2xl font-medium leading-7 text-start">Morbi erat ut arcu adipiscing nulla</h2>
                                <p class="font-lato text-[#1C2126] text-base font-light leading-7 text-start">Sodales at vitae interdum habitant bibendum phasellus purus. Egestas tellus, morbi augue amet, sit duis sit vitae. Duis id lorem mi mattis tristique pharetra, hac at purus...</p>
                            </div>

                            <div class="flex justify-between w-full items-center">
                                <router-link :to="{ name: 'BlogPage' }">
                                <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                                    <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300">Read More</span>
                                    <img :src="require('@/Assets/Icons/arrow_rigth2_black.svg')" alt="" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 group-hover:invert">
                                </button>
                                </router-link>

                                <span class="text-[#1C2126]/70 font-lato text-[0.625rem] font-medium text-center">12/12/2021</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex max-h-[18.75rem] h-full max-md:flex-col max-md:max-h-max">
                    <div class="flex-1">
                        <img :src="require('@/Assets/Images/pawel-czerwinski-HKHwdinroSo-unsplash 2.png')" alt="image" class="h-full w-full object-cover">
                    </div>

                    <div class="flex-[3] border-b border-solid border-[#1c212633] max-md:border-b-0">
                        <div class="flex flex-col pl-[3.25rem] py-10 items-start justify-between h-full max-w-[46.125rem] max-md:gap-8 max-md:px-[2.1875rem]">
                            <div class="flex gap-2">
                               
                            </div>

                            <div class="flex flex-col gap-4">
                                <h2 class="font-lato text-[#1C2126] text-2xl font-medium leading-7 text-start">Purus tellus tellus vestibulum molestie</h2>
                                <p class="font-lato text-[#1C2126] text-base font-light leading-7 text-start">Sodales at vitae interdum habitant bibendum phasellus purus. Egestas tellus, morbi augue amet, sit duis sit vitae. Duis id lorem mi mattis tristique pharetra, hac at purus...</p>
                            </div>

                            <div class="flex justify-between w-full items-center">
                                <router-link :to="{ name: 'BlogPage' }">
                                <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                                    <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300">Read More</span>
                                    <img :src="require('@/Assets/Icons/arrow_rigth2_black.svg')" alt="" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3 group-hover:invert">
                                </button>
                                </router-link>

                                <span class="text-[#1C2126]/70 font-lato text-[0.625rem] font-medium text-center">12/12/2021</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex max-h-[18.75rem] h-full max-md:flex-col max-md:max-h-max max-md:hidden">
                    <div class="flex-1">
                        <img :src="require('@/Assets/Images/unsplash_IT6aov1ScW0.png')" alt="image" class="h-full w-full object-cover">
                    </div>

                    <div class="flex-[3] border-b border-solid border-[#1c212633]">
                        <div class="flex flex-col pl-[3.25rem] py-10 items-start justify-between h-full max-w-[46.125rem] max-md:gap-8 max-md:px-[2.1875rem]">
                            <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                                <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300">Load More</span>
                                <img :src="require('@/Assets/Icons/simple-line-icons_reload.svg')" alt="" class="transition duration-300 group-hover:animate-rotateEnd group-hover:invert">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- mobile -->
            <div class="hidden w-full pb-16 max-md:flex">
                <div class="flex-1"></div>
                <div class="flex-[3] pl-[3.25rem]">
                    <button class="relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-[#1c212633] rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                        <span class="text-[#1C2126] text-sm font-medium font-lato group-hover:text-white transition duration-300">Load More</span>
                        <img :src="require('@/Assets/Icons/simple-line-icons_reload.svg')" alt="" class="transition duration-300 group-hover:animate-rotateEnd group-hover:invert">
                    </button>
                </div>
            </div>
            <!-- end mobile -->
        </div>
    </div>
<!-- Content end -->

<!-- Subscribe -->
<div class="min-h-screen w-full relative bg-black">
    <img :src="require('@/Assets/Images/Home2 5 (4).png')" alt="" class="absolute w-full h-full top-0 left-0 sele" id="view-anim" draggable="false" data-animation="animate-fadeInLeft" data-duration="1s">
        
    <div class="absolute top-0 left-0 w-full h-full grid grid-cols-3 select-none z-0" gragable="false">
        <div class="border-r border-solid border-[#c4c4c45e] w-[60%]"></div>
        <div class="border-r border-solid border-[#c4c4c45e] w-[80%]"></div>
    </div>

    <div class="flex h-screen items-center justify-center max-md:px-[2.1875rem]">
        <div class="flex flex-col gap-12 items-center">
            <div class="flex flex-col items-center gap-4 z-0">
                <h2 class="text-white font-caudex font-normal text-[4rem] leading-[4rem] italic">Subscribe <span class="font-medium not-italic font-lato">to our</span> newsletter</h2>
                <span class="text-white font-lato text-center text-lg font-light max-w-[30.625rem]">Stay informed about industry innovations and updates by subscribing to our newsletter.</span>
            </div>

            <div class="flex flex-col gap-12 w-[25.3125rem] z-0">
                <div class="w-full">
                    <div class="flex flex-col gap-8">
                        <input type="text" placeholder="Full Name" class="border-0 border-b border-solid border-white bg-transparent py-3 text-white outline-0">
                        <input type="text" placeholder="Full Name" class="border-0 border-b border-solid border-white bg-transparent py-3 text-white outline-0">
                    </div>
                </div>

                <div class="flex-1 flex justify-center items-center z-0">
                    <button class="w-full relative flex gap-2 justify-between items-center pl-11 pr-9 py-3 border border-solid border-white rounded-3xl transition duration-300 group hover:bg-[#1c2126] hover:border-transparent hover:after:opacity-100 cursor-pointer after:absolute after:transition after:duration-500 after:place-content-center after:pointer-events-none after:w-full after:h-full after:blur-[3.4375rem] after:bg-[#057eed] after:left-0 after:right-0 after:top-0 after:bottom-0 after:opacity-0">
                        <span class="text-white text-sm font-medium font-lato group-hover:text-white transition duration-300 text-center w-full">Subscribe</span>
                        <div class="group-hover:animate-bounce">
                            <img :src="require('@/Assets/Icons/arrow_rigth2.svg')" alt="" class="transition duration-300 group-hover:scale-x-150 group-hover:translate-x-3">
                        </div>
                    </button>
                </div>
            </div>
        
        </div>
    </div>
</div>
<!-- Subscribe end -->

<?php get_footer(); ?>