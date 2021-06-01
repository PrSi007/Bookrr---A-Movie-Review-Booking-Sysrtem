<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  include './_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $repassword = $_POST["repassword"];
  //$exists = false;

  //Check whether this username exists
  $existSql = "SELECT * FROM `users` WHERE username = '$username' ";
  $result = mysqli_query($conn, $existSql);
  $numExistRows = mysqli_num_rows($result);

  if ($numExistRows > 0) {
    //$exists = true;
    $showError = "Username Already Exists";
  } else {
    //$exists = false;
    if (($password == $repassword)) {
      $hash = password_hash($password , PASSWORD_DEFAULT);
      $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $showAlert = true;
      }
    } else {

      $showError = "Passwords do not match .";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign-up </title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
</head>

<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/dUyCkp.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <i class="fa fa-film" aria-hidden="true"></i>
                <p class="bookrr"> BOOKRR</p>
              </div>
              <p class="login-card-description">Sign-Up into your account</p>
              <form method="post">
                <div class="form-group">
                  <label for="text" class="sr-only">Enter Your Name</label>
                  <input type="text" name="username" maxlength = "25" id="name" class="form-control" placeholder="Username">
                </div>
                <div class="form-group mb-4">
                  <label for="password" class="sr-only">Password</label>
                  <input type="password" name="password" maxlength = "25" id="password" class="form-control" placeholder="Password:***********">
                </div>
                <div class="form-group mb-4">
                  <label for="password" class="sr-only">Password</label>
                  <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Re-Password:***********">
                </div>
                <button class="btn btn-block login-btn mb-4" type="submit">Sign-Up</button>
                <?php
                if ($showAlert) {
                  echo ' <div class="alert alert-success alert-dismissible fade show" role="alert"><strong>You have successfully created an account !!</strong><br/>Login To : <a href="login.php" class="text-reset">Login</div>';
                }

                if ($showError) {
                  echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert"> Error !! ' . $showError . ' </div>';
                }
                ?>
              </form>


            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>