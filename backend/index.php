<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="..\node_modules\bootstrap\dist\css\bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="..\styles\index.css" rel="stylesheet" >

</head>

<body>

<header>
    <nav class="navbar fixed-top navbar-dark bg-dark">
    <div class="container-fluid">
        <img src="..\resources\images\Logo.png" alt="" width="68" height="56">
        <form class="d-inline">
          
                <ul class="navbar-nav me-3 flex-row">
                    <li class="nav-item me-3 ">
                        <a class="nav-link active fs-3" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link fs-3" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link fs-3" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
    </nav>
</header>
    
<div class="container-fluid p-0 position-relative">
    <figure class="figure position-relative h-100">
        <img src="..\resources\images\front_image.jpg" class="figure-img img-fluid rounded opacity-75 h-100 object-fit-cover" alt="...">
        <figcaption class="figure-caption position-absolute text-black fs-1 fw-bold">Nature's Strength, Crafted for You</figcaption>
    </figure>
</div>


<footer> 
    <div class="container-fluid p-0  bg-dark h-25">
        <div class="row p-0 ms-0 me-0 border-bottom border-secondary text-center ">
            <div class="col text-white p-0  fs-2">
                Visit our socials:      
            </div>
            <div class="col text-white p-0   ">
                <a class="me-4   fs-2" href="https://www.facebook.com/profile.php?id=100004341108737">
                <i class="bi bi-facebook"></i>
                </a>
                <a class="me-4  fs-2" href="https://www.facebook.com/profile.php?id=100004341108737">
                <i class="bi bi-instagram"></i>
                </a>
            </div>
        </div>

            <div class="row p-0 ms-0 me-0">
            <div class="col text-white p-0 text-center fs-2">
                @ 2025 Woodworker a.s
            </div>

    
            </div>
        </div>
    </div>
</footer>

</body>

</html>