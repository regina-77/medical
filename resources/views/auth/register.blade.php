<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rhythm-admin-template.multipurposethemes.com/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 May 2023 09:25:54 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://rhythm-admin-template.multipurposethemes.com/images/favicon.ico">

    <title>Rhythm Admin - Log in </title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('dashboard/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/skin_color.css') }}">

</head>

<body class="hold-transition theme-primary bg-img"
    style="background-image: url(https://rhythm-admin-template.multipurposethemes.com/images/auth-bg/bg-1.jpg)">

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary">Let's Get Started</h2>
                                <p class="mb-0"><a href="{{ url('/') }}">Return Home</a></p>
                            </div>
                            <div class="p-40">
                                <form action="{{ route('register') }}" method="post" autocomplete="off">
                                    <div class="form-group">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                            <input type="text" name="name"
                                                class="form-control ps-15 bg-transparent" placeholder="full name" value="{{ old('name') }}">

                                        </div>
                                        @error('name')
                                            <span>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                            <input type="text" name="email"
                                                class="form-control ps-15 bg-transparent" placeholder="email" value="{{ old('email') }}">

                                        </div>
                                        @error('email')
                                            <span>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text  bg-transparent"><i
                                                    class="ti-lock"></i></span>
                                            <input type="password" name="password"
                                                class="form-control ps-15 bg-transparent" placeholder="Password" value="{{ old('password') }}">

                                        </div>
                                        @error('password')
                                            <span>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text  bg-transparent"><i
                                                    class="ti-lock"></i></span>
                                            <input type="password" name="password_confirmation"
                                                class="form-control ps-15 bg-transparent" placeholder="Confirm Password">

                                        </div>
                                        @error('password')
                                            <span>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-danger mt-10">SIGN UP</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>
                                <div class="text-center">
                                    <p class="mt-15 mb-0">Already have an account? <a href="{{ route('login') }}"
                                            class="text-warning ms-5">Sign IN</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Vendor JS -->
    <script src="{{ asset('dashboard/js/vendors.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/pages/chat-popup.js') }}"></script>
    <script src="https://rhythm-admin-template.multipurposethemes.com/assets/icons/feather-icons/feather.min.js"></script>

</body>

<!-- Mirrored from rhythm-admin-template.multipurposethemes.com/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 May 2023 09:25:54 GMT -->

</html>
