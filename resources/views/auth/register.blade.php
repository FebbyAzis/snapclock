<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('Assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Assets/img/logo_transparent1.png')}}">
    <!-- Custom styles for this template-->
    <link href="{{asset('Assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-secondary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{asset('logo4.jpg')}}" width="500px" class="p-5 my-3">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center mb-3">
                                <img src="{{asset('Assets/img/logo_transparent1.png')}}" width="15%">
                                <h3 class="text-secondary"><b>SnapCLOCK</b></h3>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" placeholder="Full Name" name="name">
                                     @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Address">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                                             @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password-confirm" placeholder="Repeat Password" name="password_confirmation">
                                    </div>
                                </div>
                                <input type="hidden" name="role" value="2">
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                                
                            </form>
                       
                            
                            <div class="text-center mb-5">
                                <a class="small" href="{{route('login')}}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('Assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('Assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('Assets/js/sb-admin-2.min.js')}}"></script>

</body>

</html>