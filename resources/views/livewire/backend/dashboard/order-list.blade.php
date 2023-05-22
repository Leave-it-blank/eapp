<div>
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 w-full">
    @foreach($orders as $odx)
    <div class="m-2 flex grow justify-center shadow-xl rounded-xl">
        <div class="w-full rounded-xl bg-white px-2 py-1 py-4  h-content w-content">
            <div class="flex w-full rounded-md">
                <div class="flex w-full flex-row rounded-md">
                    <a href="#">
                        <div class="relative backdrop:bg-yellow-400">
                            <div
                                class="mx-auto flex h-36 w-24 flex-1 select-none justify-center rounded-xl">
                                <img alt="be-careful-when-choosing-a-husband"
                                     referrerpolicy="no-referrer" width="500" height="715"
                                     decoding="async" data-nimg="1"
                                     class="h-36 w-24 min-w-full select-none overflow-hidden rounded-xl object-cover"
                                     style="color:transparent"
                                     src="Landing_Page/images/Pickup.svg">
                            </div>
                        </div>
                    </a>
                    <div class="relative w-full justify-end px-3">
                        <div
                            class="flex w-full flex-col px-4 text-zinc-600 font-roboto text-md md:px-1">
                            <a class="w-full flex-none cursor-pointer select-none text-left font-bold text-black min-h-5 text-md line-clamp-3 flex-0 hover:text-black sm:text-lg truncate dark:hover:text-sky-500"
                               href="#"> Pick Up order placed</a>

                            <div
                                class="w-full  flex flex-row gap-2  cursor-pointer select-none text-left text-xs font-bold text-black min-h-5 line-clamp-3 flex-0 hover:text-black dark:hover:text-sky-500"
                            >Arriving on 10th Mar
                                <span>     <svg xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="h-4 w-4">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                    </svg>
                                                 </span>

                                10-12 pm</div>
                            <div
                                class="absolute right-1 bottom-0 w-full cursor-pointer select-none text-right text-xs font-medium min-h-3 line-clamp-2 flex-0 md:line-clamp-1">
                                View Details >
                            </div>
                            <div class="absolute bottom-2/4 translate-y-2 left-0 text-sm mx-4  px-3  text-gray-400  flex items-center rounded-2xl bg-gray-200 ">
                                Order ID - #8934934
                            </div>
                            <div class="absolute bottom-6 left-0 mx-4 px-3 md:mx-1">
                                <a class="px-3 py-1 bg-[#D1EBD5] rounded-full" href="">PickUp</a>    <a class="px-3 py-1 bg-[#FFEAB5] rounded-full" href="">Progress</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
         @endforeach
</div>
</div>
