<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GAnti Password</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background: #4e73df">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center" align="center">

            <div class="col-xl-6 col-lg-12 col-md-9">
                <br>
                <div class="card o-hidden border-0 shadow-lg my-2">
                    <br>
                    <div class="card-body p-0" style="background: white; width: 500px; height: 500px; align-items: center; border-radius: 2%">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           
                            <div class="col-lg-12">
                                <div class="p-5">
                                   
                                    <div class="text-center"><br><br>
                                        <h1 class="h4 text-gray-900 mb-4" style="font-family:  Arial, sans-serif;">RESET PASSWORD</h1><br><br>
                                    </div>

                                         @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                   <div class="card-body">
                                        <form method="POST" action="{{ route('password.update') }}">
                                            @csrf



                                            <input type="hidden" name="token" value="{{ $token }}">

                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right" style="font-family: Arial, sans-serif;">{{ __('E-Mail') }}</label>

                                                <div class="col-md-6">
                                                    <input style="height: 30px; width: 350px; border-radius: 5%" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div><br>

                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right" style="font-family: Arial, sans-serif;">{{ __('Password') }}</label>

                                                <div class="col-md-6">
                                                    <input style="height: 30px; width: 350px; border-radius: 5%" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div><br>

                                            <div class="form-group row">
                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="font-family: Arial, sans-serif;" >{{ __('Confirm Password') }}</label>

                                                <div class="col-md-6">
                                                    <input style="height: 30px; width: 350px; border-radius: 5%" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div><br>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary" style="border: 1px solid #cecece; border-radius: 5px; padding: 3px 10px; box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4); color: white; background-color:  #1F60B4; height: 40px" >
                                                        {{ __('Reset Password') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div><br>
                                   
                                    <hr><br>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div> -->
                                    <div class="text-center">
                                        
                                        <a class="small" href="{{ route('login') }}" style="font-family: Arial, sans-serif;">Kembali Ke Halaman Login !</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>


