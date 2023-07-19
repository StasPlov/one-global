</main>
<footer class="flex flex-col bg-black border-t border-solid border-[#c4c4c44d] relative">
    <img :src="require('@/Assets/Images/bg_footer.png')" alt="" class="absolute w-full h-full top-0 left-0 select-none" draggable="false">

    <div class="flex flex-1 min-h-[426px] z-0">
        <div class="flex flex-1 max-w-[35%] border-r border-solid border-[#c4c4c44d]">
            <div class="px-6 py-5">
                <img :src="require('@/Assets/logo.png')" alt="ONE GLOBAL HOLDING" class="max-h-16">
            </div>
        </div>

        <div class="flex flex-1">
            <div class="flex-1 border-r border-solid border-[#c4c4c44d]">
                <div class="flex flex-col gap-6 items-start px-6 py-5">
                    <h3 class="text-sm text-white/40 font-lato font-normal uppercase">Our subsidiaries</h3>

                    <div class="flex flex-col gap-5 items-start">
                        <img :src="require('@/Assets/Icons/og_innovation1.png')" alt="ONE GLOBAL HOLDING" class="max-h-12">
                        <img :src="require('@/Assets/Icons/og_hub1.png')" alt="ONE GLOBAL HOLDING" class="max-h-12">
                        <img :src="require('@/Assets/Icons/og_capital1.png')" alt="ONE GLOBAL HOLDING" class="max-h-10">
                    </div>
                </div>
            </div>

            <div class="flex-1 border-r border-solid border-[#c4c4c44d]">
                <div class="flex flex-col gap-6 items-start px-6 py-5">
                    <h3 class="text-sm text-white/40 font-lato font-normal uppercase">for investors</h3>

                    <div class="flex flex-col gap-5 items-start">
                        <span class="text-sm text-white/40 font-lato font-normal">Invested Ventures</span>
                        <span class="text-sm text-white/40 font-lato font-normal">Stay Connected</span>
                    </div>
                </div>
            </div>

            <div class="flex-1 border-r border-solid border-[#c4c4c44d]">
                <div class="flex flex-col gap-6 items-start px-6 py-5">
                    <h3 class="text-sm text-white/40 font-lato font-normal uppercase">Media center</h3>

                    <div class="flex flex-col gap-5 items-start">
                        <span class="text-sm text-white/40 font-lato font-normal text-start">PUBLICATIONS & REPORTS</span>
                        <span class="text-sm text-white/40 font-lato font-normal text-start">CAREERS</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex max-w-[20%] flex-1">
            <div class="flex flex-col w-full">
                <button class="flex items-center gap-[10px] border-b border-solid border-[#c4c4c44d] px-6 py-5 w-full transition hover:bg-white/10 cursor-pointer">
                    <img :src="require('@/Assets/Icons/arrow_right_3.svg')" alt="contact us" class="w-5">
                    <span class="text-sm text-white/40 font-lato font-medium uppercase">Contact Us</span>
                </button>

                <button class="flex items-center gap-[10px] border-b border-solid border-[#c4c4c44d] px-6 py-5 w-full transition hover:bg-white/10 cursor-pointer">
                    <img :src="require('@/Assets/Icons/bi_key-fill.svg')" alt="login" class="w-5">
                    <span class="text-sm text-white/40 font-lato font-medium uppercase">Contact Us</span>
                </button>
            </div>
        </div>
    </div>
    
    <div class="flex border-t border-solid border-[#c4c4c44d] z-0">
        <div class="flex items-start flex-1 border-r border-solid border-[#c4c4c44d]">
            <span class="text-[10px] font-lato py-6 px-[70px] text-white/60">Copyright © 2023 One Global Holding. All rights reserved.</span>
        </div>

        <div class="flex max-w-[20%] flex-1"></div>
    </div>
</footer>