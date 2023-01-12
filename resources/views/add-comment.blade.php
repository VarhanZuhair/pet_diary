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

    <!-- POST NYA -->
    <div class="container">
        <!-- POST -->
        
        <div class="row pt-4">
            <div class="card">
                <div class="card-body">
                    <!-- user -->
                    <div class="row">
                        <div class="col-6">
                            <h5>From : <a href="" style="text-decoration: none" class="text-dark"><span>@</span>{{ $forum->name }}</a></h5>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <div class="btn-group">
                                <button class="btn btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="material-symbols-outlined">menu</span>
                                </button>
                                @if( Auth::user()->name == $forum->name)
                                <ul class="dropdown-menu">
                                    <li class="py-2 text-center"><a href="{{ route('forumUpdate', $forumcat->post_id)}}" style="text-decoration: none" class="text-dark">Edit Post</a></li>
                                    <li class="py-2 text-center"><a href="" style="text-decoration: none" class="text-dark">Delete Post</a></li>
                                </ul>
                                @else
                                @endif
                                </div>
                            </div>
                        </div>
                    <!-- Komentar forumnya -->
                    <div class="row">
                        <h3 class="pt-3">{{ $forum->title }}</h3>
                        <p class="pt-3 fs-5">{{ $forum->description }}</p>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>

    <!-- FORM COMMENT -->
    <div class="container">
        <div class="row mt-5">
            <form action="{{ route('commentPost') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label fs-4">Add Comment : </label>
                    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                </div>
                <!-- button -->
                <div class="row d-flex justify-content-end">

                    <div class="col-3">
                        <div class="row">
                            <div class="row mx-1">
                                <button type="submit" class="btn warna-oren berubah-warna">COMMENT</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="invisible">User ID (automaticly)</label>
                    <input class="form-control invisible" id="user_id" name="user_id" type="text" aria-label="default input example" readonly value="{{ Auth::user()->id }}">
                </div>
                <div class="mb-3">
                    <label for="" class="invisible">Post ID (automaticly)</label>
                    <input class="form-control invisible" id="comment_on_post" name="comment_on_post" type="text" aria-label="default input example" readonly value="{{ $forum->post_id }}">
                </div>

                <!-- button -->
                <!-- <div class="row d-flex justify-content-end">

                    <div class="col-3">
                        <div class="row">
                            <div class="row mx-1">
                                <button type="submit" class="btn btn-primary">COMMENT</button>
                            </div>
                        </div>
                    </div>
                </div> -->
            </form>
        </div>
    </div>




    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>