<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">
            	<br>
                <div class="card o-hidden border-0 shadow-lg my-2">
                	<br>
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           
                            <div class="col-lg-12">
                                <div class="p-5">
                                	<div class="text-center" >
                                	  	<span class="avatar">
                                            <img src="../img/brilliant_logo.png" alt="image" width="150px" height="150px">
                                        </span><br>
                                    </div><br>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                                    </div>

                                    <form action="{{route('proses-login')}}" method="post">
										{{csrf_field()}}
										<div class="form-group">
											<input type="username" class="form-control" name="username" placeholder="username" required="" >
										</div>

										<div class="form-group">
											<input type="password"  class="form-control" name="password" placeholder="password" required="">
										</div>
										  @include('sweet::alert')
										<div class="form-group">
											<input type="checkbox" name="remember"> Ingat Saya?
										</div>
										<!-- <input type="checkbox" name="remember"> Ingat? -->
										<div class="text-center">
										<button type="submit" class="btn btn-primary" style="width: 150px">login</button>
										</div>
									</form>
                                   
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div> -->
                                    <div class="text-center">
                                        <p><a class="small" href="{{ route('lupa_password') }}">Lupa Password Anda?</a></p>
                                       <!--  <p><a class="small" href="{{ route('password.request') }}">Lupa Password ?</a></p> -->
                                        <a class="small" href="{{ route('register') }}">Belum Punya Akun? Register!</a>
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


