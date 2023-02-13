<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<body>
    <x-guest-layout>
        <div class="container">
            <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="info">
                    <h2>¡Bienvenido a tu nuevo equipo de trabajo! </h2>
                 
                </div>


    
                <form class="form">
                    <x-jet-authentication-card>
                        <h2>Login </h2>
                        <x-slot name="logo">
                            <x-jet-authentication-card-logo />
                        </x-slot>

                        <x-jet-validation-errors class="mb-4" />

                        @if (session('status'))
                        <div class="mb-4 font-short text-sm text-blue-1000">
                            {{ session('status') }}
                        </div>
                        @endif



                        <div>
                            <x-jet-label for="username" value="{{ __('Usuario') }}" />
                            <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username"
                                :value="old('username')" required autofocus autocomplete="username" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="current-password" />
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Recordar Usuario') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif

                            <x-jet-button class="ml-4">
                                {{ __('Log in') }}
                            </x-jet-button>
                        </div>
                    </x-jet-authentication-card>
                </form>



            </form>


        </div>
    </x-guest-layout>
</body>