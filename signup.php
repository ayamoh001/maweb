<?php 
session_start();

include "./php/con_db.php";

if (isset($_POST["signup-btn"])){

  $fname = mysqli_real_escape_string($conn,$_POST["fname"]);
  $lname = mysqli_real_escape_string($conn,$_POST["lname"]);
  $email = mysqli_real_escape_string($conn,$_POST["email"]);
  $password = mysqli_real_escape_string($conn,$_POST["password"]);
  $date = mysqli_real_escape_string($conn,date("Y/m/d H:i"));

  $errors=[
      "fnameError"=>"",
      "lnameError"=>"",
      "emailError"=>"",
      "passwordError"=>""
  ];

  if(empty($fname)){$errors["fnameError"]="The first name should not be empty.";};

  if(empty($lname)){$errors["lnameError"]="The last name should not be empty.";};

  if(empty($email)){$errors["emailError"]="The email should not be empty.";};

  if(empty($password)){$errors["passwordError"]="The password should not be empty.";};

  if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors["emailError"].=" The email must be a valid one.";
  }else{
    $sql = "SELECT * FROM accounts WHERE email='$email'";
    $res= mysqli_query($conn,$sql);
    $acc= mysqli_fetch_all($res,MYSQLI_ASSOC);
    if(array_filter($acc)){
      $errors["emailError"].="This email is used.";
    };
  };
  

  if(!array_filter($errors)){

      $sql = "INSERT INTO accounts(fname,lname,email,password,date) 
          VALUES('$fname','$lname','$email','$password','$date')";
          
      if(mysqli_query($conn,$sql)){
          $_SESSION["fname"] = $fname;
          $_SESSION["lname"] = $lname;
          $_SESSION["email"] = $email;
          $_SESSION["password"] = $password;
          $_SESSION["date"] = $date;
          
          header("Location: home_user.php" );
      }else{
          echo "Error: " . mysqli_error($conn);
      };
    };
};



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
    <link rel="manifest" href="manifest.json">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Sign up</title>
    <style> <?php include "./cdns/bootstrap.min.css"; ?> </style>
    
</head>
<body>
    
<div class="bg-dark d-flex vh-100 vw-100 overflow-auto">
      <main class="form-signin container-sm px-5  text-center p-0 my-auto" >
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="Post" class="row g-3 px-sm-5">
          <img class="mt-5" src="./imgs/undraw_personal_finance_tqcd (1).svg" alt="logo" width="72" height="57">
          <h1 class="h3 m-0 mt-4 text-light fw-normal">Please sign up:</h1>



          <div class="p-0 form-floating">
            <input type="text" value="<?php echo htmlspecialchars($fname) ;?>" name="fname" class="form-control" placeholder="First name">
            <label for="floatingInput">First name:</label>
          </div>

          <div class="p-0 form-floating">
            <input type="text" name="lname" value="<?php echo htmlspecialchars($lname) ;?>" class="form-control" placeholder="Last name">
            <label for="floatingInput">Last name:</label>
          </div>
          <div class="text-light m-0 p-0"><?php echo htmlspecialchars($errors["fnameError"]) . htmlspecialchars($errors["lnameError"]) ;?></div>

          <div class="p-0 form-floating">
            <input type="email" name="email" value="<?php echo htmlspecialchars($email) ;?>" class="form-control" placeholder="name@example.com">
            <label for="floatingInput">Email:</label>
            <div class="text-light"><?php echo htmlspecialchars($errors["emailError"]);?></div>
          </div>
          <div class="p-0 form-floating">
            <input type="password" name="password" value="<?php echo htmlspecialchars($password) ;?>" class="form-control" placeholder="Password">
            <label for="floatingPassword">Password:</label>
            <div class="text-light"><?php echo htmlspecialchars($errors["passwordError"]);?></div>
          </div>
    
          <button name="signup-btn" class="w-100 btn btn-lg btn-warning" type="submit">Sign up</button>

          <p class="mt-5 text-muted">Copy Rights &copy; <?php echo date("Y");?></p>
        </form>
      </main>
    </div>
</body>
</html>