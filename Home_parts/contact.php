<div id="contact" class="w-100 bg-dark pt-5 px-sm-0 px-4">
    <div class="container ">
        <div class=" "></div>
            <h1 class="text-light text-center ">Order now:</h1>
            
            <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST" class="m-0 row row-cols-1 g-3">
                <div class="col p-0 input-group">
                    
                        <input type="text" name="fname" value="<?php echo $fname; ?>" aria-label="First name" placeholder="First name:" class="form-control ">
                
                        <input type="text" name="lname" value="<?php echo $lname; ?>" aria-label="Last name" placeholder="Last name:" class="form-control">
                    
                </div>
                <div class="p-0 m-0 text-light error">
                    <?php echo $errors["fnameError"] . $errors["lnameError"] ?> 
                </div>

                <div class="col p-0">
                    <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Email:" class="form-control">

                    <div class="p-0 text-light error">
                        <?php echo $errors["emailError"]?> 
                    </div>
                </div>
                

                <div class="col p-0 input-group">
                    <select class="form-select" name="the_order" aria-label="Default select example">
                        <option value="Web site">Web site</option>
                        <option value="Mangement app">Mangement app</option>
                        <option value="Custom service">Custom service</option>
                    </select>

                    <div class="p-0 text-light error">
                        <?php echo $errors["the_orderError"]?>     
                    </div>
                </div>
                
        
                <div class="col p-0">
                    <label for="message" class="visually-hidden form-label">Write what you want here...</label>
                    <textarea class="form-control" name="message" id="message" placeholder="Your message" rows="6"><?php echo $message; ?></textarea>

                    <div class="p-0 text-light error"> 
                        <?php echo $errors["messageError"]?> 
                    </div>
                </div>
        
                <button aria-label="Close" type="submit" name="send-btn"  class="col btn btn-warning fw-bold fs-4 text-dark w-100 py-3">SEND</button>
            </form>
        </div>
    </div>

</div>