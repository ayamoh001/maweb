<?php 
session_start();
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
    <link rel="manifest" href="manifest.json">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Profile</title>
    <style> <?php include "./cdns/bootstrap.min.css"; ?> </style>
</head>
<body>

<div class="d-flex g-0">
 
    <div class="d-flex flex-column flex-shrink-0 bg-dark vh-100 overflow-auto" style="width: 4rem;">
        <a href="#" class="d-block p-3 link-light m-0 border-light border-bottom text-center h3 text-decoration-none bi bi-house-door-fill"></a>
        </a>

        <ul class="nav nav-flush flex-column mb-auto text-center">
            <li class="nav-item">
                <a href="#" class="nav-link active py-3 border-warning text-warning border-bottom bi bi-bag-check-fill"></a>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link active py-3 border-warning text-warning border-bottom bi bi-calendar-check-fill"></a>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link active py-3 border-warning text-warning border-bottom bi bi-chat-dots-fill"></a>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link active py-3 border-warning text-warning border-bottom bi bi-cloud-plus-fill"></a>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link active py-3 border-warning text-warning border-bottom bi bi-diagram-3-fill"></a>
                </a>
            </li>
        </ul>

        <div class="dropdown border-warning border-top">
        <a href="#" class="d-flex align-items-center text-light justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="./imgs/my-icon-sm.png" alt="profile image" width="24" height="24" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small shadow position-fixed" aria-labelledby="dropdownUser3">
            <li><a class="dropdown-item" href="./profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="#">Sign out</a></li>
        </ul>
        </div>
    </div>

    <div class="overflow-auto d-flex bg-light vh-100 w-100">
        <div class="px-4 py-5 m-auto text-center">
            <img class="d-block mx-auto mb-4" src="./imgs/hero1.svg" alt="" width="72" height="57">
            <h1 class="display-5 text-uppercase fw-bold">You have no content yet!</h1>
            <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis incidunt facilis molestiae voluptate explicabo.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Add content</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Order</button>
            </div>
            </div>
        </div>
    </div>
</div>

<script src="./js/bootstrap.bundle.min.js"></script>

</body>
</html>