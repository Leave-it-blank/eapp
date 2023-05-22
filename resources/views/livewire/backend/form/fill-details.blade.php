<div>
    <style>
        .error{
            color: red;
            font-size: 12px;
            padding-left: 4px;
        }
    </style>
    <form wire:submit.prevent="submit" >


        <div class="flex flex-row gap-5 mt-10">

            <div class="w-2/3  sm:px-10">
                <div>
                    <h1 class="text-2xl py-5">
                       Choose Date And Time
                    </h1>
                    <div class="bg-white p-4 rounded-md flex justify-between">
                        <label>
                            <input type="date" name="pick_up_date" wire:model="formData.pick_up_date" class="w-full border-gray-200 text-gray-500 rounded-md">
                            @error('formData.pick_up_date') <span class="error">{{ $message }}</span> @enderror

                        </label>
                        <label>
                            <input type="time" name="pick_up_time" wire:model="formData.pick_up_time" class="w-full border-gray-200 text-gray-500 rounded-md">
                            @error('formData.pick_up_time') <span class="error">{{ $message }}</span> @enderror

                        </label>
                       </div>
                </div>

                <div class="my-5">
                    <div class="flex justify-between">
                        <h2 class="text-xl">     Select Pickup Address </h2>
                       <a href="{{route('address.create')}}"> <div class="bg-transparent border border-lime-500 px-4 py-2  rounded-md"> Add New Address</div>
                       </a>
                    </div>
                    <div class="my-4">
                            @foreach($this->address as $adx)
                                <label class=" p-5 bg-white rounded-md w-full flex flex-col">
                                    <div class="flex flex-row gap-2 items-center ">
                                    <input type="radio" wire:model="formData.address_id" value={{$adx["id"]}}  >
                                    <div class="flex flex-row justify-between w-full">
                                     <div> {{$adx["full_name"]}} <button  class="mx-3 rounded-full bg-green-50 px-3 py-0 border border-lime-500"> {{$adx['address_type']}}</button> </div>
                                        <a href="{{route('address.edit' , $adx['id'])}}"> <button class="text-lime-500"> Edit</button> </a>
                                    </div>
                                    </div>
                                    <div class="flex flex-col px-6 mx-4 text-sm my-2">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                            </svg>
                                            <div class="text-gray-500"> {{$adx["address_lane"]}}, {{$adx['city']}}, {{$adx['state']}}, {{$adx['country']}}  </div>

                                        </div>
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                                            </svg>

                                            <div class=" my-2">
                                                {{$adx["mobile_number"]}}
                                            </div>

                                        </div>

                                    </div>
                                </label>

                            @endforeach
                    </div>

                </div>
            </div>
            <div class="w-full md:mt-16 md:w-1/3 p-3 bg-[#F2F7F4] bg-opacity-50 m-2 shadow-sm border border-gray-200 ml-0 mr-5 rounded-md sm:p-5 h-[400px]">
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
