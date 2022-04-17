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

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
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
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{url('dashapp/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{url('dashapp/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('dashapp/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('dashapp/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{url('dashapp/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

     <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Vendor CSS-->
    <link href="{{url('dashapp/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('dashapp/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('dashapp/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{url('dashapp/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('dashapp/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{url('dashapp/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('dashapp/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('dashapp/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="{{url('index')}}">
                                <img src="{{url('frontapp/images/logo/carsvlogo.png')}}" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                  <input  id="name"  :value="old('name')" required autofocus class="au-input au-input--full" type="text" name="name" placeholder="{{__('Name')}}">
                                  @error('name')
                                  <span style="color: red">{{$message}}</span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <input id="email" :value="old('email')" required class="au-input au-input--full" type="email" name="email" placeholder="{{__('Email')}}"/>
                                    @error('email')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input  id="password" required autocomplete="new-password" class="au-input au-input--full" type="password" name="password" placeholder="{{__('Password')}}">
                                    @error('password')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password_confirmation" type="password" name="password_confirmation" required   class="au-input au-input--full" type="password"  placeholder="{{__('Confirm Password')}}">
                                    @error('password')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Register') }}</button>
                            </form>

                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="{{ route('login') }}">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<!-- Jquery JS-->
<script src="{{url('dashapp/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{url('dashapp/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{url('dashapp/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{url('dashapp/vendor/slick/slick.min.js')}}">
</script>
<script src="{{url('dashapp/vendor/wow/wow.min.js')}}"></script>
<script src={{url('dashapp/vendor/animsition/animsition.min.js')}}></script>
<script src="{{url('dashapp/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{url('dashapp/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{url('dashapp/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{url('dashapp/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{url('dashapp/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{url('dashapp/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{url('dashapp/vendor/select2/select2.min.js')}}">
</script>

<!-- Main JS-->
<script src="{{url('dashapp/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
