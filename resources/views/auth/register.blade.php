<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/auth.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Sign Up/Sign In</title>
</head>
<body>
    <div class="row">
        <div class="col-6 split left">
            <!-- <p>Register</p> -->
            <div class="row">
                <div class="col-3"></div>
                    <div class="col-6 position-absolute top-50 start-50 translate-middle">
                    <div class="row">
                        <h2 class="text-center mb-5">CREATE AN ACCOUNT</h2>
                    </div>
                    <!-- FORM -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- First name -->
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-1 d-flex align-items-center">
                                        <span class="material-symbols-outlined">person</span>
                                    </div>
                                    <div class="col-11">
                                        <input type="text" class="form-control" id="first_name" name="first_name" :value="old('first_name')" placeholder="First Name" required autofocus>
                                    </div>
                                </div>
                            </div>
                            
                                <!-- Last Name -->
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-1 d-flex align-items-center">
                                        <span class="material-symbols-outlined">person</span>
                                    </div>
                                    <div class="col-11">
                                        <input type="text" class="form-control" id="last_name" name="last_name" :value="old('last_name')" placeholder="Last Name" required autofocus>
                                    </div>
                                </div>
                            </div>
                            
                                <!-- Email -->
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-1 d-flex align-items-center">
                                        <span class="material-symbols-outlined align-middle">mail</span>
                                    </div>
                                    <div class="col-11">
                                        <input type="email" class="form-control" id="email" name="email" :value="old('email')" aria-describedby="emailHelp" placeholder="Email" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-1 d-flex align-items-center">
                                        <span class="material-symbols-outlined ">key</span>
                                    </div>
                                    <div class="col-11">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <!-- Password Confirm -->
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-1 d-flex align-items-center">
                                        <span class="material-symbols-outlined ">key</span>
                                    </div>
                                    <div class="col-11">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col-6">
                                    <div class="row">
                                        <button type="submit" class="btn warna-oren rounded-button border-success text-white"><b>Register</b></button>
                                    </div>
                                </div>
                                <div class="col-3"></div>                       
                            </div>
                        </form>
                        
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
           
        <div class="col-6  warna-oren split right">
            <!-- <p>Login</p> -->
            <div class="row position-absolute top-50 start-50 translate-middle">
                <h2 class="text-center text-white">Hello, Pet Lovers!</h2>
                <p class="text-center text-white">Enter your profile details and start journey with fellow pet lovers!</p>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <div class="row">
                            <a href="{{ route('login') }}" class="btn rounded-button border-white text-white">
                                <b>Login</b>
                            </a>
                        </div>
                        <div class="row">
                            <a href="/" class="btn warna-oren rounded-button border-white mt-3 text-white"><b>Back to Main Page</b></a>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>