<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  include './_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];

  
  $sql = "Select * from users where username='$username' ";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);

  if ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
      if (password_verify($password, $row['password'])) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $SESSION['username'] = $username;
        header("location: ../index.php");
      }
    }
  } else {
    $showError = "Invalid Credentials";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login </title>
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
              <p class="login-card-description">Log-In into your account</p>
              <form method="post">
                <div class="form-group">
                  <label for="text" class="sr-only">Enter Your Name</label>
                  <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group mb-4">
                  <label for="password" class="sr-only">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                </div>
                <button class="btn btn-block login-btn mb-4" name="userlogin" type="submit">Log-In</button>
                <?php
                if ($login) {
                  echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">You have successfully logged in.</div>';
                }

                if ($showError) {
                  echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error !! </strong>' . $showError . '</div>';
                }
                ?>
              </form>
              <p class="login-card-footer-text">Don't have an account? <a href="signup.php" class="text-reset">Register here</a></p>

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