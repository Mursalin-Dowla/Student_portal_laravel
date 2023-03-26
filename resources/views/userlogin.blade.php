<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Portal Login</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
</head>

<body class="bg-secondary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mt-5">
                   <img style="width: 380px;" class="rounded-3" src="{{asset('frontend')}}/assets/img/university_cover_pic.jpg" alt="versity_cover_pic">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">                   
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4 mt-2 text-center fw-bold text-white">STUDENT <span class="my-color1">LOG IN</span></h3>
                                </div>                                
                            </div>
                            <form method="POST" action="{{route('login')}}" class="signin-form">
                                @csrf
                                <div class="form-group mt-3">
                                    <label class="form-control-placeholder text-white" for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-placeholder text-white" for="password">Password</label>
                                    <input id="password-field" name="password" id="password" type="password" class="form-control" placeholder="Password">
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a class="text-danger" href="#">Forgot Password?</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center text-white">New Student? <a data-toggle="tab" href="{{route('register')}}">Register</a></p>                                            
                </div>
            </div>
        </div>


    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/popper.js"></script>  
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
</body>

</html>
