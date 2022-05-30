<div id="portfolio" class="w-100 bg-light px-4 px-sm-0 py-5">
    <div class="container">
        <h1 class=" text-center mb-3 bg-dark text-light py-3">SOME OF MY WORKS:</h1>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-5">

            <?php for($i=1;$i<10;$i++): ?>
                <div class="col">
                    <div class="bg-dark  text-light d-grid h-100 overflow-hidden shadow">
                        <img loading="lazy" style="height: 200px;" alt="a work" class="port w-100">
                        <div class="container py-sm-3 p-4">
                            <h1>Work number <?php echo $i ?></h1>
                            <p class="h-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad omnis mollitia architecto quis repudiandae reprehenderit odit tempore doloribus enim. Dolores?</p>
                        </div>
                        <button aria-label="Close" class="btn btn-warning bg-gradient text-dark rounded-0 fw-bold py-3">See more!</button>
                    </div>
                </div>
            <?php endfor; ?>

        </div>
    </div>
</div>
