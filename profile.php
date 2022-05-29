<?php 

session_start();
include "./php/con_db.php";
$email = $_SESSION["email"];
$sql = "SELECT * FROM accounts WHERE email = '$email'";
$res = mysqli_query($conn,$sql);
$account = mysqli_fetch_all($res,MYSQLI_ASSOC);
include "./php/close.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#eeeeee">
    <meta rel="apple-touch-icon" href="./imgs/my-icon.png">
    <meta rel="icon" href="./imgs/my-icon.png">
    <link rel="manifest" href="manifest.json">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Profile</title>
    <style> <?php include "./cdns/bootstrap.min.css"; ?> </style>
</head>
<body>
    <div class="w-100 bg-light py-5 text-dark">
        <div class="container text-center">
            <div class="rounded-circle border-dark border border-3 p-2 mx-auto mb-4" style="max-height:250px; max-width:250px">
                <img src="./imgs/my-icon-sm.png" class="w-100 h-100 rounded-circle img-fluid">
            </div>
            <div class="text-dark h1 fw-bold"><?php echo htmlspecialchars($account[0]["fname"] ." " . $account[0]["lname"])?></div>
            <div class="text-muted"><?php echo htmlspecialchars($account[0]["email"])?></div>
            <hr class="m-0 p-0">
            <div class="text-muted">Registred in: <?php echo htmlspecialchars($account[0]["date"])?></div>
        </div>
    </div>   

        <div class="card text-center w-100 pt-3 text-light">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs justify-content-center">
                    <li class="nav-item"><a class="nav-link active" href="#">Posts</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Media</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Info</a></li>
                </ul>
            </div>
            <div class="card-body bg-dark">
                <div class="w-50 m-auto">
                    <div class="card rounded-3 overflow-hidden mb-5">
                        <div class="card-header mb-2 w-100 text-dark p-3 d-flex justify-content-between align-content-center">
                            <div class="d-flex align-self-center align-items-center">
                                <img src="./imgs/my-icon-sm.png" class="rounded-circle me-1 me-sm-4 w-25" alt="test">
                                <div class="display-block text-start">
                                <h1 class="card-title fw-bold">User Name</h1>
                                <p class="card-text"><small class="text-muted"><?php echo date("Y/m/d H:i")?></small></p>
                                </div>
                            </div>
                            <div class="fs-5 bi bi-three-dots-vertical d-inline-block  align-self-center "></div>
                        </div>
                        <div class="card-body text-dark">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam laudantium corrupti ipsam accusantium tempora repellat cupiditate minima fugiat ullam consequuntur dolorem ipsum ut ad, illum tenetur error sint a. Repudiandae.</p>
                            
                        </div>
                        <img src="./imgs/img1.webp" class="card-img-bottom h-75" alt="test">
                    </div>
                    <div class="card rounded-3 overflow-hidden mb-5">
                        <div class="card-header mb-2 w-100 text-dark p-3 d-flex justify-content-between align-content-center">
                            <div class="d-flex align-self-center align-items-center">
                                <img src="./imgs/my-icon-sm.png" class="rounded-circle me-1 me-sm-4 w-25" alt="test">
                                <div class="display-block text-start">
                                <h1 class="card-title fw-bold">User Name</h1>
                                <p class="card-text"><small class="text-muted"><?php echo date("Y/m/d H:i")?></small></p>
                                </div>
                            </div>
                            <div class="fs-5 bi bi-three-dots-vertical d-inline-block  align-self-center "></div>
                        </div>
                        <div class="card-body text-dark">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam laudantium corrupti ipsam accusantium tempora repellat cupiditate minima fugiat ullam consequuntur dolorem ipsum ut ad, illum tenetur error sint a. Repudiandae.</p>
                            
                        </div>
                        <img src="./imgs/img1.webp" class="card-img-bottom h-75" alt="test">
                    </div>
                    <div class="card rounded-3 overflow-hidden mb-5">
                        <div class="card-header mb-2 w-100 text-dark p-3 d-flex justify-content-between align-content-center">
                            <div class="d-flex align-self-center align-items-center">
                                <img src="./imgs/my-icon-sm.png" class="rounded-circle me-1 me-sm-4 w-25" alt="test">
                                <div class="display-block text-start">
                                <h1 class="card-title fw-bold">User Name</h1>
                                <p class="card-text"><small class="text-muted"><?php echo date("Y/m/d H:i")?></small></p>
                                </div>
                            </div>
                            <div class="fs-5 bi bi-three-dots-vertical d-inline-block  align-self-center "></div>
                        </div>
                        <div class="card-body text-dark">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam laudantium corrupti ipsam accusantium tempora repellat cupiditate minima fugiat ullam consequuntur dolorem ipsum ut ad, illum tenetur error sint a. Repudiandae.</p>
                            
                        </div>
                        <img src="./imgs/img1.webp" class="card-img-bottom h-75" alt="test">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="bg-dark text-light text-center">
        <h1 class="py-4 m-0">Copy rights &copy; <?php echo date("Y")?></h1>
    </div>

<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>