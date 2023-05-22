<x-guest-layout>
{{--    <x-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">--}}
{{--            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--        </div>--}}

{{--        @if (session('status'))--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <x-validation-errors class="mb-4" />--}}

{{--        <form method="POST" action="{{ route('password.email') }}">--}}
{{--            @csrf--}}

{{--            <div class="block">--}}
{{--                <x-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <x-button>--}}
{{--                    {{ __('Email Password Reset Link') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-authentication-card>--}}
    <section class=" px-5 py-14 md:p-14 mx-auto max-w-screen-2xl">
        <div class="flex flex-row justify-center mx-auto w-full border border-gray-200 rounded-2xl">
            <div class="h-[860px] relative w-full max-w-xl mx-auto md:w-2/3 xl:w-1/2   bg-white -500 rounded-l-2xl flex flex-col justify-center items-center">
                <div class="absolute top-0 -left-2 p-10">
                    <img src="Landing_Page/Logo.png">
                </div>
                <div  class="py-10 ">
                    <div class="text-4xl  font-extrabold text-center mx-auto">
                        Forgot Password?

                    </div>
                    <div class="w-full">  <div class="w-full   text-sm text-center ">Don't Have an account? <a class="text-lime-600 capitalize" href="{{ route('register') }}"> Signup</a></div></div>
                </div>
                <x-validation-errors class="mb-4 text-left w-full px-5 sm:px-10" />
                <div class=" flex flex-row w-full px-4 ">



                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="w-full px-4" method="POST"  action="{{ route('password.email') }}">
                        @csrf

                        <div class="mt-4">

                            <x-input placeholder="Email Address" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        </div>



                        <div class="flex flex-col items-center justify-center mt-4">

                            <x-button class="  w-full py-3  " style="background: linear-gradient(198.89deg, #6ACB7A 5.79%, #5EB797 93.04%); border-radius: 5px;">
                                {{ __('Email Password Reset Link') }}
                            </x-button>

                        </div>

                    </form>

                </div>
            </div>
            <div class="h-[860px] bg-lime-500 hidden md:block md:w-2/3 xl:w-1/2 rounded-r-2xl" style="background-image: url('Landing_Page/login.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">

            </div>
        </div>
    </section>
</x-guest-layout>
