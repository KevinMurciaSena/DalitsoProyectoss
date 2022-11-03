{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    
                @endif

                <x-button class="ml-3">
                    {{ __('Login') }}
                </x-button>
            </div>
            <div class="mt-4">
                ¿No esta registrado?
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Registrese') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Iniciar sesion</title>
</head>
<body class="body">
        {{-- container --}}
        <div class="container-fluid w-75 mt-5 rounded-3 shadow bg-dark">
            <div class="row align-items-center">
                <div class="foto col d-flex d-lg-block rounded-3">
                    <img class="f" src="{{ asset('images/tiendaimg.jpg')}}" width="100%", height="100%">
                </div>
                <div class="col">
                    <div class="text-center mt-4 d-lg-block">
                        <img src="{{ asset('images/dalitsoshop.png') }}" width="100">
                    </div>
    
                    <h2 class="ms-4 mt-2 fw-bold text-center py-3">Bienvenido de vuelta</h2>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
            
                        <!-- Email Address -->
                        <div class="mb-4">
                            <x-label for="email" class="form-label" :value="__('Email')" />
                            <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mb-5">
                            <x-label for="password" class="form-label" :value="__('Password')"/>
                            <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <div class="d-grid">
                                <x-button class="ml-3 btn btn-primary">
                                    {{ __('Iniciar sesion') }}
                                </x-button>
                            </div>   
                        </div>
                        <div class="my-3">
                            ¿No estas registrado?
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                                {{ __('Registrate aquí') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
            integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="./css/bootstrap/js/bootstrap.min.js">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>
</html>


