<div class="  p-10 mx-auto">
    <style>
        .error {
            color: red;
            font-size: 12px;
            padding-left: 5px;

        }
    </style>
      <h1 class="  font-light text-3xl"> E waste Details</h1>
        <form wire:submit.prevent="submit" >
    <div class="flex flex-col md:flex-row mx-auto justify-start">
        <div   class="w-full md:w-2/3 ">
        <div  class="bg-white m-2 shadow-sm border border-gray-200 ml-0 mr-5 rounded-md md:p-10">

                    <div class=" flex flex-col">
                        <label for="Catagory" class="capitalize text-sm my-2"> choose e-waste Catagory </label>

                        <select type="text" class="w-1/2 border-gray-200 rounded-md" wire:model="formData.category">
                            <option value="" selected disabled> Select Catagory</option>
                            <option value="Electronics">Electronics</option>
                            <option value="laptops">Laptops & pc </option>
                            <option value="tablets">  tablets </option>
                            <option value="mobile">Mobile   </option>
                            <option value="appliance">Appliance  </option>
                            <option value="others"> Others</option>
                        </select>
                        @error('formData.category') <span class="error">{{ $message }}</span> @enderror

                        <div class="flex flex-row gap-4">
                            <div class="flex flex-col   w-1/2">
                                <label for="type" class="capitalize text-sm my-4"> choose e-waste type </label>

                                <select type="text" class="  border-gray-200 rounded-md" wire:model="formData.type">
                                    <option value="" selected disabled> Select type</option>
                                    <option value="small"> Small </option>
                                    <option value="medium">Medium </option>
                                    <option value="large"> Large </option>
                                </select>
                                @error('formData.type') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="flex flex-col   w-1/5" >
                                <label for="quantity" class="capitalize text-sm my-4"> quantity </label>
                                <select type="text" class="  border-gray-200 rounded-md" wire:model="formData.quantity">
                                    <option value="" selected disabled> Quantity</option>
                                    <option value="1"> 1</option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3</option>
                                </select>
                                @error('formData.quantity') <span class="error">{{ $message }}</span> @enderror
                            </div>

                        </div>
                        <div >
                           <div class="py-2 text-sm mt-2">Condition of device <br></div>
                            <input type="radio" name="condition" wire:model="formData.condition" value="working" class="mr-1 rounded-full dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-lime-600 shadow-sm focus:ring-lime-500 dark:focus:ring-lime-600 dark:focus:ring-offset-gray-800">
                            <label for="condition" class="capitalize text-sm my-4"> Working </label>
                            <input type="radio" name="condition"  wire:model="formData.condition"  value="partially" class="mx-1 rounded-full dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-lime-600 shadow-sm focus:ring-lime-500 dark:focus:ring-lime-600 dark:focus:ring-offset-gray-800">
                            <label for="condition" class="capitalize text-sm my-4">Partially Working </label>
                            <input type="radio" name="condition" wire:model="formData.condition"  value="not working" class="mx-1 rounded-full dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-lime-600 shadow-sm focus:ring-lime-500 dark:focus:ring-lime-600 dark:focus:ring-offset-gray-800">
                            <label for="condition" class="capitalize text-sm my-4">Not Working </label>
                        </div>
                        @error('formData.condition') <span class="error">{{ $message }}</span> @enderror
{{--                        <img src="Landing_Page/slider.svg" class="h-24 self-start mt-4">--}}
                        <label class="text-sm my-6" for="myRange"> Weights (in Kgs)</label>
                        <div class="flex items-center gap-4 -mt-2 px-2">
                            <input wire:model="formData.weight" type="range" min="1" max="10" value="2" class="w-full sm:w-1/2" style="background: #1f2937;" id="myRange">
                            <label for="myRange"> {{  $formData["weight"]  }} KG</label>
                        </div>
                        @error('formData.weight') <span class="error">{{ $message }}</span> @enderror
                    </div>


        </div>
            <h1 class="font-light text-2xl"> Additional Details</h1>
            <div class="bg-white m-2 shadow-sm border border-gray-200 ml-0 mr-5 rounded-md md:p-10">
                <div class=" flex flex-row gap-2 justify-evenly w-full">


                <div class=" flex flex-col w-1/3">
                    <label for="age_of_device" class="capitalize text-sm my-2">Age of device </label>
                    <select type="text" class="w-full border-gray-200 rounded-md" name="age_of_device" wire:model="formData.age_of_item">
                        <option value="" selected disabled> Select Age</option>
                        <option value="less than one"> <1 </option>
                        <option value="one"> 1  </option>
                        <option value="greater than one"> <1  </option>
                    </select>
                    @error('formData.age_of_item') <span class="error">{{ $message }}</span> @enderror
                </div>
                    <div class=" flex flex-col w-1/3">
                        <label for="brand" class="capitalize text-sm my-2"> Brand </label>

                        <select type="text" class="w-full border-gray-200 rounded-md"  wire:model="formData.brand">
                            <option value="" selected> Select Brand </option>
                            <option value="Apple"> Apple </option>
                            <option value="Samsung"> Samsung</option>
                            <option value="LG"> LG</option>
                            <option value="Hitachi"> Hitachi</option>
                            <option value="Xiomi"> Xiomi</option>
                            <option value="Lenovo"> Lenovo</option>
                            <option value="Other"> Other</option>
                        </select>
                        @error('formData.brand') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class=" flex flex-col w-1/3">
                        <label for="model" class="capitalize text-sm my-2" > Model </label>

                        <select type="text" class="w-full border-gray-200 rounded-md" wire:model="formData.model">
                            <option value="" selected disabled> Select model </option>
                            <option value="other"> other</option>

                        </select>
                        @error('formData.model') <span class="error">{{ $message }}</span> @enderror
                    </div>


                </div>

                <div class=" flex flex-row gap-2 justify-start w-full">


                    <div class=" flex flex-col w-1/3">
                        <label for="reason_for_selling" class="capitalize text-sm my-2"  >Reason for selling </label>
                        <select type="text" class="w-full border-gray-200 rounded-md" name="reason_for_selling" wire:model="formData.reason_for_selling">
                            <option value="" selected disabled> Select  </option>
                            <option value="upgrade"> Upgrading</option>
                            <option value="broken"> Not working </option>
                            <option value="other"> Other </option>
                        </select>
                        @error('formData.reason_for_selling') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div  class="px-4">
                        <div class="py-2 text-sm mt-2"> Method of disposal* <br></div>
                        <input type="radio" name="mode_of_disposal" wire:model="formData.mode_of_disposal"  value="recycle" class="mr-1 rounded-full dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-lime-600 shadow-sm focus:ring-lime-500 dark:focus:ring-lime-600 dark:focus:ring-offset-gray-800">
                        <label for="method" class="capitalize text-sm my-4"> Recycle </label>
                        <input type="radio" name="mode_of_disposal"   wire:model="formData.mode_of_disposal" value="donation" class="mx-1 rounded-full dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-lime-600 shadow-sm focus:ring-lime-500 dark:focus:ring-lime-600 dark:focus:ring-offset-gray-800">
                        <label for="method" class="capitalize text-sm my-4">Donation</label>

                    </div>
                    @error('formData.mode_of_disposal') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-col">
                    <label for="comments" class="py-1 mt-2 text-sm" >Upload picture of the item</label>
                    <input type="file" class="py-2" multiple wire:model="formData.file">
                    @error('formData.file') <span class="error">{{ $message }}</span> @enderror
                </div>
                    <div class="flex flex-col">
                        <label for="comments" class="py-1 text-sm" >Comments</label>
                        <textarea aria-multiline="3"  wire:model="formData.comment" class=" w-2/3 border-gray-200 shadow-sm" ></textarea>
                        @error('formData.comment') <span class="error">{{ $message }}</span> @enderror
                    </div>

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
