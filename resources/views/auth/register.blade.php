{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
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
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>Iniciar sesion</title>
</head>

<body class="body">
    {{-- container --}}
    <div class="container w-75 rounded-3 shadow bg-dark">
        <div class="row align-items-center">
            <div class="foto col d-flex d-lg-block rounded-3">
                <img class="f" src="{{ asset('images/tiendaimg.jpg') }}" width="100%", height="100%">
            </div>
            <div class="col">
                <div class="text-center mt-4 d-lg-block">
                    <img src="{{ asset('images/dalitsoshop.png') }}" width="100">
                </div>

                <h2 class="ms-4 mt-2 fw-bold text-white text-center py-3">Bienvenido de vuelta</h2>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" class="rollwhell" action="{{ route('register') }}">
                    @csrf
                    
                    <div class="mb-2">
                        <x-label for="name" class="form-label text-white" :value="__('Name')" />

                        <x-input id="name" class="form-control" type="text" name="name"
                            :value="old('name')" required autofocus />
                    </div>

                    <!-- Email Address -->
                    <div class="mb-2">
                        <x-label for="email" class="form-label text-white" :value="__('Email')" />
                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                            required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mb-2">
                        <x-label for="password" class="form-label text-white" :value="__('Password')" />
                        <x-input id="password" class="form-control" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>
                    <!-- Confirm Password -->
                    <div class="mt-2">
                        <x-label for="password_confirmation" class="form-label text-white" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="form-control" type="password"
                            name="password_confirmation" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button class="btn btn-primary ml-4 w-100 mb-2">
                            {{ __('Register') }}
                        </x-button>
                        <div class="d-grid">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 mb-3" href="{{ route('login') }}">
                                {{ __('¿Ya estas registrado?') }}
                            </a>
                        </div>
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
