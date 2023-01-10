<!-- Halaman Forum -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href=""> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/auth.css">
    <title>Pet Diary</title>
</head>
<body class="">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg warna-hijau">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/image/logo-p.png" style="width:100px; height:50px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('dashboard') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('review') }}">Review</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="">Forum</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- KOLOM SEARCH -->
    <div class="container">
        <div class="row my-5">
            <div class="col-3">
                <img src="/image/logo-p.png" style="width:100px; height:50px" alt="">
            </div>
            <div class="col-6">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="col-8">
                        <div class="row">
                            <button class="btn btn-outline-success" type="submit">
                                <a href="" style="text-decoration: none" class="text-dark">Welcome! {{ Auth::user()->first_name }}</a>
                            </button>
                        </div>
                    </div>
                    <div class="col-4 ps-4">
                        <div class="row">
                            <!-- <button class="btn btn-outline-success" type="submit">
                                <a href="{{ url('logout') }}" style="text-decoration: none" class="text-dark">Logout {{ Auth::user()->first_name }}</a>
                            </button> -->
                            <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-4 d-flex justify-content-end">
                <div class="card" style="width: 15rem;">
                    <img src="/image//forum/dog.svg" class="card-img-top" alt="Dog" width="100px">
                    <div class="card-body">
                        <h4 class="text-center">DOG</h4>
                        <div class="row">
                            <a href="" class="btn berubah-warna warna-oren">JOIN</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-center">
                <div class="card" style="width: 15rem;">
                    <img src="/image//forum/cat.svg" class="card-img-top" alt="Dog" width="100px">
                    <div class="card-body">
                        <h4 class="text-center">CAT</h4>
                        <div class="row">
                            <a href="" class="btn berubah-warna warna-oren">JOIN</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-start">
                <div class="card" style="width: 15rem;">
                    <img src="/image//forum/hamster.svg" class="card-img-top" alt="Dog" width="100px">
                    <div class="card-body">
                        <h4 class="text-center">HAMPTER</h4>
                        <div class="row">
                            <a href="" class="btn berubah-warna warna-oren">JOIN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-4 d-flex justify-content-end">
                <div class="card" style="width: 15rem;">
                    <img src="/image//forum/fish.svg" class="card-img-top" alt="Dog" width="100px">
                    <div class="card-body">
                        <h4 class="text-center">FISH</h4>
                        <div class="row">
                            <a href="" class="btn berubah-warna warna-oren">JOIN</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-center">
                <div class="card" style="width: 15rem;">
                    <img src="/image//forum/rabbit.svg" class="card-img-top" alt="Dog" width="100px">
                    <div class="card-body">
                        <h4 class="text-center">RABBIT</h4>
                        <div class="row">
                            <a href="" class="btn berubah-warna warna-oren">JOIN</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-start">
                <div class="card" style="width: 15rem;">
                    <img src="/image//forum/bird.svg" class="card-img-top" alt="Dog" width="100px">
                    <div class="card-body">
                        <h4 class="text-center">BIRD</h4>
                        <div class="row">
                            <a href="" class="btn berubah-warna warna-oren">JOIN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>