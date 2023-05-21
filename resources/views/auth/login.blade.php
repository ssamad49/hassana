<x-guest-layout>

    <div class="span-auth" style=" color: #2b9bb8; font-size: 30px; height: 100%;padding-top: 20px; text-align: center; background: #eff6f7;">
        <span> Sign In </span>
    </div>

    <div class="class1 flex" style="justify-content: center; padding-top: 35px; background: #eff6f7; padding-bottom: 35px" >
    <div class="class4" style="background: white; padding-top: 30px">

        <x-authentication-card>


        <x-slot name="logo" class="image-logo">
            <img src="{{URL('images/logo.png')}}" alt="" style="height: 180px;  margin-top:30px; background: white;">
        </x-slot>


        <x-validation-errors class="mb-4" />



        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf




            <div>
                <x-label class="email-input" for="email" value="{{ __('Email') }}"/>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus style="border: 2px #c5d3d6 solid; border-radius: 6px; padding: 6px; color: black;"/>
            </div>


            <div class="mt-4">
                <x-label class="email-input" for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" style="border: 2px #c5d3d6 solid; border-radius: 6px; padding: 6px; color: black;"/>
            </div>



            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
                <div class="flex items-center justify-center mt-4" style="margin-top: 40px;">
                    <x-button class="ml-4" style=" color:white; background:#2b9bb8; width: 150px; justify-content:center;">
                        {{ __('Log in') }}
                    </x-button>
                </div>
                <div style="margin-top: 10px" class="flex items-center justify-center mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>





                <div class="flex items-center justify-center" style="margin-top: 50px;">
                    <span class="ml-2">{{ __('Do not have an account ?') }}</span>
                    <a href="/register">
                        <button type="button" class="flex-end btn btn-primary" style="background-color: #2b9bb8; width: 140px; height: 35px; margin-left: 30px; border-radius: .375rem; color: white; font-weight: 600; font-family: inherit; font-size: .77rem;">CREATE NEW</button>
                    </a>
                </div>

        </form>


</div>

    </x-authentication-card>


    <div class="class2" style="background: #2b9bb8; width: 400px; height: 110vh;" >
        <img src="{{asset('images/docc.png')}}" alt="" style="margin-top: 130px">
    </div>

    </div>
</x-guest-layout>

