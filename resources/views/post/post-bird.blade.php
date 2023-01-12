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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                <a class="nav-link active" href="{{ url('forum') }}">Forum</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- KOLOM SEARCH -->
    <div class="container">
        <div class="row my-4">
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
                                <a href="" style="text-decoration: none" class="text-dark">Welcome! {{ Auth::user()->name }}</a>
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
        <form action="{{ url('forum/bird/store') }}" method="POST">
            @csrf
            <div class="row my-5">
                <h3>ADD TOPIC IN <span class="text-warning">BIRD</span></h3>
            </div>
            <div class="row">
                <div class="form-floating my-3">
                    <input type="text" class="form-control" id="title" name="title" placeholder="" required>
                    <label for="floatingInput" class="ps-4 fs-5">Title</label>
                </div>
                <div class="form-floating my-3">
                    <textarea type="text" class="form-control" id="description" name="description" placeholder="" style="height: 200px" required></textarea>
                    <label for="floatingPassword" class="ps-4 fs-5">Description</label>
                </div>

                <div class="form-floating my-3">
                    <input type="number" class="form-control" id="user_id" name="user_id" placeholder="" readonly value="{{ Auth::user()->id }}">
                    <label for="floatingInput" class="ps-4 fs-5">User ID</label>
                </div>
                <div class="form-floating my-3">
                    <input type="text" class="form-control" id="category" name="category" placeholder="" readonly value="bird">
                    <label for="floatingInput" class="ps-4 fs-5">Category</label>
                </div>

                <!-- BUTTON -->
                <div class="row d-flex justify-content-end">

                    <div class="col-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="row mx-1">
                                    <a href="{{ url('/forum/rabbit') }}" class="btn btn-secondary">BACK</a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row mx-1">
                                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>



    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>