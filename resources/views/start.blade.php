<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Technology blog</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>
        body {
            background-image: url("{{URL::asset('/images/light-bulbs-5488573_1280.jpg')}}");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        /* body {
            background-color: #000;
        } */
        .card {
            width: 400px;
            border:none;
        }
        .btr {
            border-top-right-radius: 5px !important;
        }
        .btl {
            border-top-left-radius: 5px !important;
        }
        .btn-dark {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        .btn-dark:hover {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        .nav-pills {
            display:table !important;
            width:100%;
        }
        .nav-pills .nav-link {
            border-radius: 0px;
            border-bottom: 1px solid #0d6efd40;
        }
        .nav-item {
            display: table-cell;
            background: #0d6efd2e;
        }
        .form {
            padding: 10px;
            height: 270px;
        }
        /* .form input {
            margin-bottom: 12px;
            border-radius: 3px;
        } */
        .form input:focus {
            box-shadow: none;
        }
        .form button {
            margin-top: 20px;
        }

    </style>
    
</head>

<body>
    <div class="register-login-area">
        {{-- <div>
            <h2 style="color: white;">Register</h2>
            <form action="/register" method="POST">
                @csrf
                <input type="text" name="name" placeholder="name"><br>
                <input type="email" name="email" placeholder="email"><br>
                <input type="password" name="password" placeholder="password"><br>
                <button>Register</button>
            </form>

            <h2 style="color: white;">Log in</h2>
            <form action="/login" method="POST">
                @csrf
                <input type="text" name="login_name" placeholder="name"><br>
                <input type="password" name="login_password" placeholder="password"><br>
                <button>Log in</button>
            </form>
        </div> --}}


        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="card">
    
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item text-center">
                        <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        {{-- <div class="form px-4 pt-5">
                            <input type="text" name="" class="form-control" placeholder="Name">
                            <input type="text" name="" class="form-control" placeholder="Password">
                            <button class="btn btn-dark btn-block">Login</button>
                        </div> --}}
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form px-4 pt-5">
                                <input type="text" name="login_name" class="form-control" placeholder="Name"><br>
                                <input type="password" name="login_password" class="form-control" placeholder="Password"><br>
                                <button class="btn btn-dark btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        {{-- <div class="form px-4">
                            <input type="text" name="" class="form-control" placeholder="Name">
                            <input type="text" name="" class="form-control" placeholder="Email">
                            <input type="text" name="" class="form-control" placeholder="Password">
                            <button class="btn btn-dark btn-block">Signup</button>
                        </div> --}}
                        <form action="/register" method="POST">
                            @csrf
                            <div class="form px-4">
                                <input type="text" name="name" class="form-control" placeholder="Name"><br>
                                <input type="email" name="email" class="form-control" placeholder="Email"><br>
                                <input type="password" name="password" class="form-control" placeholder="Password"><br>
                                <button class="btn btn-dark btn-block">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>