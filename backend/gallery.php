
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="..\node_modules\bootstrap\dist\css\bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="..\styles\gallery.css" rel="stylesheet" >
    <script src="..\frontend\Main.ts"></script>
</head>

<header>
    <nav class="navbar fixed-top navbar-dark bg-dark">
    <div class="container-fluid">
        <img src="..\resources\images\Logo.png" alt="" width="68" height="56">
        <form class="d-inline">
          
                <ul class="navbar-nav me-3 flex-row">
                    <li class="nav-item me-3 ">
                        <a class="nav-link  fs-3" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link fs-3 active" href="gallery.php">Gallery</a>
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

<body>
<h1>Our works </h1>
<div class="container-xxl shadow-lg position-relative p-0" id="main">

    <?php 
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "gallery";

    $conn = new mysqli($servername, $username, $password,$dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql_request = "Select * from photos";
    $sql_response = $conn->query($sql_request);
    if ($sql_response->num_rows > 0) {

        while($row = $sql_response->fetch_assoc()) {
            if($row['Id']==1) 
            { 
                echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Photo']).'" class=" img-fluid rounded  mh-100 mw-100 h-100 w-100 object-fit-cover" name="image" alt="...">';
            }
            else 
            {
                echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Photo']).'" class=" img-fluid rounded  mh-100 mw-100 min-h-100 h-100 w-100 object-fit-cover d-none " name="image" alt="...">';
            }
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

    <div class="container-xxl  position-absolute d-flex justify-content-center bottom-50" role="group" aria-label="Basic example">
    <button type="button" onclick="Left_swipe()" class="btn btn-primary me-auto" id="button_left" ><i class="bi bi-arrow-left"></i></button>
    <button type="button" onclick="Right_swipe()"class="btn btn-primary" id="button_right"><i class="bi bi-arrow-right"></i></button>
    </div>       
</div>


<footer> 

<div class="container-fluid p-0  bg-dark h-25" id="foot">
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

</body>


</footer>

</html>