<div id="show" class="w-100 bg-dark px-4 px-sm-0 pt-5">
    <div class="container">
        <div class="g-3 row row-cols-1 row-cols-md-3 row-cols-sm-2 ">
            <?php foreach($the_orders as $order): ?>
                <div class="col">
                    <div class="card text-start h-100">
                        <div class="card-header text-uppercase"><?php echo $order["the_order"] ?> </div>

                        <div class="card-body">
                            <h1 class="card-title h5 text-uppercase m-0"><?php echo $order["fname"] . " " . $order["lname"] ?></h1>
                            <div class="text-muted mb-2"> <?php echo $order["email"] ?></div>
                            <p class="card-text"><?php echo $order["message"] ?></p>
                        </div>

                        <div class="d-flex card-footer justify-content-between"> 
                            <h1 class="text-muted h5 m-0 fs-6 fw-normal align-self-center"><?php echo $order["date"] ?></h1>
                            <a href="./index.php" class="btn btn-primary d-grid">See it</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div> 
</div>