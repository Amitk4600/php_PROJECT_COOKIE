<?php
session_start();
include '../displayPassword.php';
// include '../changeMode.php';
if (isset($_SESSION['error'])) {
  echo '<div  style="
  color: red;
  background: none;
  position: relative;
  top: 57%;
  left: 29rem;
  padding: 5px;
  width: 210px;
  border-radius: 5px;
  text-align: center;
  font-size: 15px;
       ">' . $_SESSION['error'] . '</div>';

  unset($_SESSION['error']);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,700;1,700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css" />

 
  <title>Login</title>
</head>

<body>
  <div class="header" >
    <?php include '../changeMode.php';
    ?>
  </div>
  <div class="container m-4 p-5">
    <div class="row">
      <div class="col">
        <div class="double d-flex justify-content-center align-items-center" style="position: relative;right: 48rem;">
          <div class="left-side">
            <div class="top-left">
              <div class="discovery-gift d-flex flex-row align-items-center justify-content-start px-3">
                <img src="./assets/gift.png" class="" />
                <span class="">Discovery Gift</span>
              </div>
              <div class="login-para">
                <h3 class="fw-bold my-3">Log in.</h3>
                <p class="fw-light">
                  Log in with your data that you entered during your
                  registration
                </p>
              </div>
            </div>
            <div class="login-area">
              <div class="form-group d-flex flex-column form-area py-3">
                <form action="./login.php" method="post">

                  <label for="name">Enter your email address</label>
                  <input class="form-control" type="email" name="email" id="" placeholder="name@examle.com" required />

                  <label class="mt-4" for="name">Enter your password</label>
                  <input class="form-control" type="password" name="password" id="password" placeholder="atleast 8 characters" required />

                  <div class="password-bottom d-flex flex-column align-items-end justify-content-center ms-4" style="position: relative;left: -1rem;bottom: 26px;gap: 22px;">
                    <img src="./assets/eye.svg" id="eye" onclick="display('password')"/>
                    <p class="fs-6 fw-light">Forget password?</p>
                  </div>
                  
                  <div class="login-btn d-flex flex-column" style="gap: 20px;padding: 5px;">
                    <button class="btn rounded-pill login" type="submit" name="submit">
                      Log in
                    </button>
                    <button class="btn rounded-pill login-google" type="submit">
                      <img src="./assets/google (1).png" />Sign in with Google
                    </button>
                  </div>
                </form>
                <div class="bottom d-flex fw-light">
                  <p>Don't have an account?</p>
                  <a href="../registration//registration_index.php">Register</a>
                </div>
              </div>
            </div>
          </div>

          <div class="right">
            <div class="right-side">
              <div class="right-top-text">

                <p>NICE TO SEE YOU AGAIN</p>
                <h2>WELCOME BACK</h2>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>