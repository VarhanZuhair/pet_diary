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

    <!-- FORM -->
    <div class="container my-5">
        <form action="" method="post">
            <div class="mb-3">
                <label for="productImage" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="productImage" name="productImage">
            </div>
            <!-- Product Category -->
            <div class="mb-3">
                <label for="productCategory" class="my-3">Product Category</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Product Category</option>
                    <option value="pet-foods">Pet Foods</option>
                    <option value="pet-medicine">Pet Medicine</option>
                    <option value="pet-grooming">Pet Grooming</option>
                    <option value="pet-tools">Pet Tools</option>
                </select>
            </div>
            <!-- Sub Category -->
            <div class="mb-3">
                <label for="productCategory" class="my-3">Sub Category</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Pet Type</option>
                    <option value="cat">Cat</option>
                    <option value="dog">Dog</option>
                    <option value="rabbit">Rabbit</option>
                    <option value="hamster">Hamster</option>
                    <option value="bird">Bird</option>
                </select>
            </div>

            <!-- Brand Name -->
            <div class="my-3">
                <label for="inputPassword5" class="form-label my-3">Brand Name <span class="text-danger">*</span></label>
                <input type="text" id="brand-name" name="brand-name" class="form-control" required placeholder="Enter Brand Name" >
            </div>

            <!-- Product Name -->
            <div class="my-3">
                <label for="inputPassword5" class="form-label my-3">Product Name <span class="text-danger">*</span></label>
                <input type="text" id="product-name" name="product-name" class="form-control" required placeholder="Enter product name (do not include brand name)">
            </div>
            
            <!-- Product Name -->
            <div class="my-3">
                <label for="inputPassword5" class="form-label my-3">Product Price <span class="text-danger">*</span></label>
                <input type="number" id="product-price" name="product-price" class="form-control" required placeholder="IDR (Ex : 50000">
            </div>

            <!-- Button -->
            <div class="row mb-3">
                <div class="col-2 mt-3 ms-auto">
                    <div class="row g-5">
                        <div class="col-6">
                            <div class="row">
                                <button type="submit" class="btn btn-outline-dark">Back</button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <button type="submit" class="btn btn-primary">Submit</button>
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