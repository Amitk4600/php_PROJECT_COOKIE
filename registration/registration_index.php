<?php
session_start();
include '../displayPassword.php';

if (isset($_SESSION['registration_alert'])) {
  echo '<div  style="
  color: white;
  background: red;
  position: absolute;
  top: 8rem;
  left: 17rem;
  padding: 5px;
  border-radius: 5px;
   ">' . $_SESSION['registration_alert'] . '</div>';

  unset($_SESSION['registration_alert']);
} elseif (isset($_SESSION['error'])) {
  echo '<div  style="
      color: red;
      background: none;
      position: absolute;
      top: 53%;
    
      padding: 5px;
      border-radius: 5px;
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
  <title>Registration</title>

  <style>
    .discovery-gift img {
      width: 40px;
    }

    .discovery-gift {
      gap: 20px;
    }

    .right {
      width: 40vw;
      height: 90vh;
    }

    .right-side {
      width: 100%;
      background-image: url(assets/bubble.png);
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;

    }

    .form-group span {
      position: relative;
      left: 32rem;
      bottom: 1.7rem;
      display: flex;
      justify-content: flex-start;
      align-items: center;
    }

    .signup {
      background-color: #5b13d8;
      color: white;
      margin-top: 10px;
      padding: 10px;
    }

    .bottom p {
      color: gray;
    }

    .bottom a {
      text-decoration: none;
      color: #5b13d8;
      font-weight: 700;
    }

    .right-top-text {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      position: relative;
      margin: auto;
      padding: 10px;
      top: 12%;
      right: 0;
    }

    .right-top-text p {
      color: black;
      font-size: medium;
      line-height: 1.6rem;
      padding: 13px 7px;
    }

    .right-top-text h2 {
      color: #5b13d8;
      font-size: 29px;
      font-weight: 700;
      padding: 1px 4px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="double d-flex justify-content-center align-items-center">
          <div class="left-side">
            <div class="top-left">
              <div class="discovery-gift d-flex flex-row align-items-center justify-content-start px-3">
                <img src="./assets/gift.png" class="" />
                <span class="">Discovery Gift</span>
              </div>
              <div class="login-para">
                <h3 class="fw-bold my-3">Registration.</h3>
                <p class="fw-light">
                  Welcome to our registration process! Please enter your details to create your account.
                </p>
              </div>
            </div>
            <div class="login-area">
              <div class="form-group d-flex flex-column form-area py-3">
                <form action="registration.php" method="post">
                  <label for="name">Name</label>
                  <input class="form-control" type="text" name="name" id="" placeholder="Name" required />

                  <label for="name" class="mt-4">Enter your email address</label>
                  <input class="form-control" type="email" name="email" id="" placeholder="name@examle.com" required />

                  <label class="mt-4" for="name">Enter your Mobile</label>
                  <input class="form-control" type="tel" name="mobile" id="" placeholder="Mobile" required maxlength="10" />

                  <label class="mt-4" for="name">Enter your password</label>
                  <input class="form-control" type="password" name="password" id="password" placeholder="atleast 8 characters" required />
                  <span><img src="./assets/eye.svg" id="eye" onclick="display('password')" /></span>

                  <label class="mt-4" for="name">Confirm password</label>
                  <input class="form-control" type="password" name="Confirm_password" id="Confirm_password" placeholder="atleast 8 characters" required />
                  <span><img src="./assets/eye.svg" id="eye" onclick="display('Confirm_password')" /></span>

                  <label class="mt-4" for="name">Date of Birth</label>
                  <input class="form-control" type="date" name="date" id="" placeholder="date" required />

                  <div class="d-flex flex-column ">
                    <input class="btn rounded-pill signup" type="submit" name="submit" value=" Sign up">
                  </div>
                  <div class="bottom d-flex fw-light justify-content-end align-items-center">
                    <p class="mt-3 "> Already have an account?</p>
                    <a class="mx-4" href="../login/login_index.php" name="login">Login</a>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="right-side">
            <div class="right-top-text">

              <p class="fw-bold">Welcome! It's great to have you here.</p>
              <h2>WELCOME </h2>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>