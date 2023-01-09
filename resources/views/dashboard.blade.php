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
</head>
<body class="">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg warna-hijau fixed-top">
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
                <a class="nav-link active" aria-current="page" href="{{ url('dashboard') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('review') }}">Review</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Forum</a>
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
                            <a href="{{ url('login') }}" style="text-decoration: none" class="text-dark">Welcome! {{ Auth::user()->first_name }}</a>
                        </button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- END KOLOM SEARCH -->
    <hr>


    <!-- ADA GAMBAR -->
    <div class="container">
        <div class="row my-4 py-4">
            <div class="col-2"></div>
            <div class="col-8">
                <img src="/image/poster.svg" alt="">
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <!-- MOST REVIEW -->
    <div class="container">
        <div class="row">
            <h5 class="text-center">MOST REVIEW</h5>
        </div>
        
        <div class="row my-4 py-4">
            
            <div class="col-4">
                <a href="" style="text-decoration: none" class="text-dark">
                    <div class="card-group">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="Gambar Produk">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">Nama Produk</h5>
                                <div class="d-flex justify-content-center">Rating</div>
                                <div class="d-flex justify-content-center">Nama Produk</div>
                                <div class="d-flex justify-content-center">Deskripsi Produk</div>
                                <div class="d-flex justify-content-center">Harga Produk</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="" style="text-decoration: none" class="text-dark">
                    <div class="card-group">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="Gambar Produk">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">Nama Produk</h5>
                                <div class="d-flex justify-content-center">Rating</div>
                                <div class="d-flex justify-content-center">Nama Produk</div>
                                <div class="d-flex justify-content-center">Deskripsi Produk</div>
                                <div class="d-flex justify-content-center">Harga Produk</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="" style="text-decoration: none" class="text-dark">
                    <div class="card-group">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="Gambar Produk">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">Nama Produk</h5>
                                <div class="d-flex justify-content-center">Rating</div>
                                <div class="d-flex justify-content-center">Nama Produk</div>
                                <div class="d-flex justify-content-center">Deskripsi Produk</div>
                                <div class="d-flex justify-content-center">Harga Produk</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
            </div>
        </div>
    </div>
    <!-- END MOST REVIEW -->


    <!-- Review -->
    <div class="container my-5 bg-secondary bg-opacity-10 py-5">
        <a href="{{ url('review') }}" style="text-decoration: none" class="text-dark">
        <div class="row ">
            <div class="col-5">
                <h1>Review</h1>
            </div>
            <div class="col-7">
                <p>Kamu bisa temukan review produk untuk hewan peliharaan terbaik
                    buat review kamu sendiri dan tambah produk yang kamu mau
                    untuk di review sesama Pet Lovers lain</p>
            </div>
        </div>
        <a href="{{ url('review') }}" style="text-decoration: none" class="text-dark">
            <div class="row">
                <div class="col-10"></div>
                <div class="col-2">
                    Go to Review Page >>
                </div>
            </div>
        </a>
        </a>
    </div>


    <!-- Forum -->
    <div class="container my-5 bg-secondary bg-opacity-10 py-5">
        <a href="" style="text-decoration: none" class="text-dark">
            <div class="row" >
                <div class="col-5">
                    <h1>Forum</h1>
                </div>
                <div class="col-7">
                    <p>Kamu bisa berdiskusi, mengajukan pertanyaan, dan berinteraksi
                    dengan sesama Pet Lovers lainnya di Forum. Temukan jawaban atas
                    permasalahan hewan peliharaan kamu dari sesama Pet Lovers</p>
                </div>
            </div>
            <a href="" style="text-decoration: none" class="text-dark">
                <div class="row">
                    <div class="col-10"></div>
                    <div class="col-2">
                        Go to Forum Page >>
                    </div>
                </div>
            </a>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>