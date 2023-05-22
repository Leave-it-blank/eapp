<div class="sm:p-10 w-3/4 mx-auto p-2 mt-5 sm:mt-40">
    <style>
        .error {
            color: red;
            font-size: 12px;
            padding-left: 4px;
        }
    </style>
    <form wire:submit.prevent="submit" class="flex flex-col md:flex-row gap-5 bg-gray-50 p-4  rounded-md border border-gray-200 shadow-sm">
        <div class="md:w-2/3 md:border-r-2 px-4 py-5 border-gray-200">
            <h1 class=" mt-2 font-bold text-xl mb-1">Contact Details</h1>
            <div class="flex flex-col w-full">
                <div class="grid grid-cols-2 gap-4 my-4">
                    <label>
                        <input class="rounded-md w-full focus:ring-lime-500 border-gray-300 text-gray-500 focus:ring-2 focus:ring-offset-2"  type="text" placeholder="Name*" required name="name" wire:model="form.name"> <br>
                        @error('form.name') <span class="error">{{ $message }}</span> @enderror
                    </label>
                    <label>
                        <input  class="rounded-md w-full focus:ring-lime-500 border-gray-300 text-gray-500 focus:ring-2 focus:ring-offset-2" type="number" placeholder="Mobile Number*" required  wire:model="form.phone"   name="Phone Number" pattern="[7-9]{1}[0-9]{9}"  title="phone number">
                        @error('form.phone') <span class="error">{{ $message }}</span> @enderror
                    </label>
                    <label>
                        <input  class="rounded-md w-full focus:ring-lime-500 border-gray-300 text-gray-500 focus:ring-2 focus:ring-offset-2" type="email" placeholder="Email*"  required name="email" wire:model="form.email" >
                        @error('form.email') <span class="error">{{ $message }}</span> @enderror
                    </label>
                </div>
                <h2 class=" mt-2 font-bold text-xl mb-4">
                    Address
                </h2>
                <label>
                    <input  class="rounded-md w-full  focus:ring-lime-500 border-gray-300 text-gray-500 focus:ring-2 focus:ring-offset-2" type="text" placeholder="Address [home, house no..]*" required name="address" wire:model="form.address" >
                    @error('form.email') <span class="error">{{ $message }}</span> @enderror
                </label>
                <div class="grid grid-cols-2 gap-4 my-4">
                    <label>
                        <input  class="rounded-md w-full  focus:ring-lime-500 border-gray-300 text-gray-500 focus:ring-2 focus:ring-offset-2" type="text" placeholder="Locality" required name="locality" wire:model="form.locality" >

                        @error('form.email') <span class="error">{{ $message }}</span> @enderror
                    </label>
                    <label>
                        <input  class="rounded-md  w-full focus:ring-lime-500 border-gray-300 text-gray-500 focus:ring-2 focus:ring-offset-2" type="number" required  placeholder="Pin Code" required name="pincode" wire:model="form.pin_code">

                        @error('form.email') <span class="error">{{ $message }}</span> @enderror
                    </label>
                    <label>
                        <input  class="rounded-md w-full  focus:ring-lime-500 border-gray-300 text-gray-500 focus:ring-2 focus:ring-offset-2" type="text" required  placeholder="City" required name="city" wire:model="form.city">

                        @error('form.email') <span class="error">{{ $message }}</span> @enderror
                    </label>
                    <label>
                        <input class="rounded-md  w-full focus:ring-lime-500 border-gray-300 text-gray-500 focus:ring-2 focus:ring-offset-2"  type="text" required  placeholder="State" required name="State" wire:model="form.state">

                        @error('form.email') <span class="error">{{ $message }}</span> @enderror
                    </label>
                    <label>
                        <input class="rounded-md  w-full focus:ring-lime-500 border-gray-300 text-gray-500 focus:ring-2 focus:ring-offset-2"  type="text" required  placeholder="Country" required name="country" wire:model="form.country">
                        @error('form.email') <span class="error">{{ $message }}</span> @enderror
                    </label>
                </div>
            </div>
        </div>

        <div class="md:w-1/3 mt-5 flex flex-col justify-between  px-4">
            <div>


                <h2 class=" mt-2 font-bold text-xl mb-4">
                    Save Address As
                </h2>
                @error('form.address_type') <span class="error">{{ $message }}</span> @enderror
                @error('form.is_default') <span class="error">{{ $message }}</span> @enderror
                <div class="flex flex-row flex-wrap gap-4 items-center text-[#60BA8A]">
                    <label class="border-lime-400 rounded-full border px-3 py-2 flex items-center gap-2" >
                        <input wire:model="form.address_type" type="radio" name="address_type" value="home" checked class="bg-lime-50 checked:bg-[#60BA8A] checked:focus:bg-[#60BA8A] checked:focus:ring-[#60BA8A] checked:hover:bg-[#60BA8A]"> Home
                    </label>
                    <label  class="border-lime-400 rounded-full border px-3 py-2 flex items-center gap-2">
                        <input wire:model="form.address_type" type="radio" name="address_type" value="office" class="bg-lime-50 checked:bg-[#60BA8A] checked:focus:bg-[#60BA8A] checked:focus:ring-[#60BA8A] checked:hover:bg-[#60BA8A]"> Office
                    </label>
                    <label  class="border-lime-400 rounded-full border px-3 py-2 flex items-center gap-2">
                        <input wire:model="form.address_type" type="radio" name="address_type" value="family" class="bg-lime-50 checked:bg-[#60BA8A] checked:focus:bg-[#60BA8A] checked:focus:ring-[#60BA8A] checked:hover:bg-[#60BA8A]"> Friends & Family
                    </label>
                    <label  class="border-lime-400 rounded-full border px-3 py-2 flex items-center gap-2">
                        <input wire:model="form.address_type" type="radio" name="address_type" value="other"  class="bg-lime-50 checked:bg-[#60BA8A] checked:focus:bg-[#60BA8A] checked:focus:ring-[#60BA8A] checked:hover:bg-[#60BA8A]"> Other
                    </label>
                </div>
            </div>
            <div class="py-5 ">
                <label for="default" class="flex items-center">
                    <x-checkbox id="default" name="default" wire:model="form.is_default" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Make this the default address') }}</span>
                </label>
                <x-button class="mt-5 w-full md:w-2/3 mx-auto px-5 py-3 text-bold text-2xl">
                   Update Address
                </x-button>
            </div>

        </div>
    </form>
</div>
