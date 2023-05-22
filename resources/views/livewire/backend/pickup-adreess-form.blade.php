<div class="  p-10 mx-auto">
    <style>
        .error {
            color: red;
            font-size: 12px;
            padding-left: 5px;

        }
    </style>
    <h1 class="  font-bold text-xl capitalize"> Choose Date and time</h1>
    <form wire:submit.prevent="submit" >
        <div class="flex flex-col md:flex-row mx-auto justify-start">
            <div   class="w-full md:w-2/3 ">
                <div  class="bg-white m-2 shadow-sm border border-gray-200 ml-0 mr-5 rounded-md md:p-10">




                </div>
                <div class="flex flex-row justify-between pr-4 mr-2 mt-2 items-center">
                    <h1 class="font-bold text-xl capitalize"> Select Pickup Address</h1>
                    <button  class="bg-transparent border-gray-200 border px-4 py-2 rounded-md">
                        Add New Address

                    </button>
                </div>

                <div class="bg-white m-2 shadow-sm border border-gray-200 ml-0 mr-5 rounded-md md:p-10">



                </div>
            </div>
            <div class="w-full md:w-1/3 p-3 bg-[#F2F7F4] bg-opacity-50 m-2 shadow-sm border border-gray-200 ml-0 mr-5 rounded-md sm:p-5 h-[400px]">
                <h1 class="text-2xl font-bold my-3 capitalize">Pick Up summary</h1>
                <div class="flex flex-col mb-3">

                    <div class="flex flex-row justify-between">
                        <div class="w-1/2">Category </div>
                        <div class="w-1/2 capitalize"> {{$formData["category"]}} </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="w-1/2">Type </div>
                        <div class="w-1/2 capitalize" >{{$formData["type"]}}  </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="w-1/2">quantity </div>
                        <div class="w-1/2 capitalize" > {{$formData["quantity"]}}  </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="w-1/2">weight </div>
                        <div class="w-1/2 capitalize"> {{$formData["weight"]}}  KG </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="w-1/2">Condition </div>
                        <div class="w-1/2 capitalize">{{$formData["condition"]}}  </div>
                    </div>

                </div>
                <div class="border-gray-200 border-b-2 w-full">

                </div>
                <h1 class="text-xl font-bold my-3 capitalize">additional Details</h1>
                <div class="flex flex-col mb-3">

                    <div class="flex flex-row justify-between">
                        <div class="w-1/2">Method of disposal  </div>
                        <div class="w-1/2 capitalize">{{$formData["mode_of_disposal"]}}  </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="w-1/2">Reason of disposal </div>
                        <div class="w-1/2 capitalize">{{$formData["reason_for_selling"]}}  </div>
                    </div>
                    <button type="submit" class="px-2 py-1 py-2 text-sm sm:px-4 sm:text-xl   text-white my-5 mx-4"
                            style="background: linear-gradient(198.89deg, #6ACB7A 5.79%, #5EB797 93.04%); border-radius: 5px;">
                        Continue
                    </button>
                </div>
            </div>

        </div>
    </form>
</div>
