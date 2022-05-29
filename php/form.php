<?php 

if (isset($_POST["send-btn"])){
    $fname = mysqli_real_escape_string($conn,$_POST["fname"]);
    $lname = mysqli_real_escape_string($conn,$_POST["lname"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $the_order = mysqli_real_escape_string($conn,$_POST["the_order"]);
    $message = mysqli_real_escape_string($conn,$_POST["message"]);
    $date = mysqli_real_escape_string($conn,date("Y/m/d H:i"));
    

    $errors=[
        "fnameError"=>"",
        "lnameError"=>"",
        "emailError"=>"",
        "messageError"=>""
    ];

    if(empty($fname)){$errors["fnameError"]="The first name should not be empty.";};

    if(empty($lname)){$errors["lnameError"]="The last name should not be empty.";};

    if(empty($email)){$errors["emailError"]="The email should not be empty.";};

    if(empty($message)){$errors["messageError"]="The message should not be empty.";};

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){$errors["emailError"].=" The email must be a valid one.";};
    
    if(!array_filter($errors)){
        
        $sql = "INSERT INTO orders(fname,lname,email,the_order,message,date) 
            VALUES('$fname','$lname','$email','$the_order','$message','$date')";
            
        if(mysqli_query($conn,$sql)){
            $command=`python ./py/sender.py $email $fname $lname $the_order`;
            echo $command;
            header("location: " . $_SERVER["PHP_SELF"]);
        }else{
            echo "Error: " . mysqli_error($conn);
        };
    };
};

