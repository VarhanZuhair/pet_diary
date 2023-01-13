<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href=""> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/home.css">
    <title>Pet Diary</title>
    <link rel="website icon" type="png" href="/public/image/logo-p.png">
</head>
<body class="">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg warna-hijau fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('dashboard') }}">
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
                <a class="nav-link active" href="{{ url('review') }}">Review</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('forum') }}">Forum</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- KOLOM SEARCH -->
    <div class="container pt-5">
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
                    <div class="col-6"></div>
                    <div class="col-6">
                        
                        <button class="btn btn-outline-success" type="submit">
                            <a href="{{ url('login') }}" style="text-decoration: none" class="text-dark">Welcome! {{ Auth::user()->name }}</a>
                        </button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- END KOLOM SEARCH -->

    <!-- PRODUCT NYA -->
    <div class="row">
        <div class="col-4">
            <a href="" style="text-decoration: none" class="text-dark">
            <div class="card-group">
                    <div class="card">
                        <img src="/image/products/{{ $product->productImage}}" class="card-img-top" alt="Gambar Produk" widht="5px">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">{{ $product->brand_name }}</h5>
                            <!-- <div class="d-flex justify-content-center">Rating</div> -->
                            <div class="d-flex justify-content-center">{{ $product->product_name }}</div>
                            <div class="d-flex justify-content-center text-center">{{ $product->product_description }}</div>
                            <div class="d-flex justify-content-center">Rp. {{ $product->product_price }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>