<?php 
session_start();

include "./php/con_db.php";

$email = "";
$password = ""; 

$errors=[
    "emailError"=>"",
    "passwordError"=>""
];


if (isset($_POST["signin-btn"])){
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $password = sha1(mysqli_real_escape_string($conn,$_POST["password"]));

    if(empty($email)){$errors["emailError"]="The email should not be empty.";};

    if(empty($password)){$errors["passwordError"]="The password should not be empty.";};

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){$errors["emailError"].=" The email must be a valid one.";};
    
    if(!array_filter($errors)){

        $sql = "SELECT * FROM accounts WHERE email='$email' AND password='$password'";
        $res= mysqli_query($conn,$sql);
        $acc= mysqli_fetch_all($res,MYSQLI_ASSOC);
        if(!array_filter($acc)){
          echo "<script>alert('We have not find any account! Sign up now or correct your info.')</script>";
        }else{
          $_SESSION["fname"] = $acc[0]["fname"];
          $_SESSION["lname"] = $acc[0]["lname"];
          $_SESSION["email"] = $acc[0]["email"];
          $_SESSION["password"] = $acc[0]["password"];
          $_SESSION["date"] = $acc[0]["date"];

          header("location: home_user.php");
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
    <title>Sign in</title>
    <style> <?php include "./cdns/bootstrap.min.css"; ?> </style>
</head>
<body>
    
<div class="bg-dark d-flex vh-100 vw-100 overflow-auto">

  <main class="form-signin container-sm px-5  text-center my-auto" >
    <form action="./signin.php" method="Post" class="g-3 row row-cols-1 px-sm-5">
      <img class="mb-3" src="./imgs/hero3.svg" alt="logo" width="72" height="57">
      <h1 class="h3 m-0 mt-4 text-light fw-normal">Please sign in:</h1>


      <div class=" col p-0 form-floating">
        <input type="email" name="email" value="<?php echo htmlspecialchars($acc["email"]) ;?>" class="form-control" placeholder="name@example.com">
        <label for="floatingInput">Email:</label>
        <div class="text-light"><?php echo htmlspecialchars($errors["emailError"]);?></div>
      </div>
      <div class="col p-0 form-floating">
        <input type="password" name="password" value="<?php echo htmlspecialchars($acc["password"]) ;?>" class="form-control" placeholder="Password">
        <label for="floatingPassword">Password:</label>
        <div class="text-light"></div>
      </div>

      <button name="signin-btn" class="col w-100 btn btn-lg btn-warning" type="submit">Sign in</button>
      <h1 class="text-light mb-0">OR</h1>
      <a class="btn col btn-lg w-100 btn-outline-warning" href="./signup.php">Sign up</a>
      <p class="mt-5 text-muted">Copy Rights &copy; <?php echo date("Y");?></p>
    </form>
  </main>
</div>


</body>
</html>