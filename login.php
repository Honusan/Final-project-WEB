<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <title>SignIn</title>
</head>

<body>
    <div class="login__slider swiper">
      <div class="swiper-wrapper ">
        <div class="swiper-slide">
          <div class="swiper-slide__container">
            <img src="img/1.jpg" alt="">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-slide__container">
            <img src="img/2.jpg" alt="">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-slide__container">
            <img src="img/3.jpg" alt="">
          </div>
        </div>
      </div>
    </div>


    <div>
      <a class="btn btn-light" href="index.html" role="button">Home page</a>
    </div>
  <div class="main-content">
      <div class="row no-gutters align-items-center justify-content-center text-center h-100">
        <div class="col-md-6">
          <form method="post" class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
            <div class="form-group">
              <label for="inputEmail" class="sr-only">Login</label>
              <input id="inputEmail" autocomplete="off" type="text" name="login" placeholder="Login" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputPassword" class="sr-only">Password</label>
              <input id="inputPassword" autocomplete="off" type="password" name="password" placeholder="password"
                class="form-control">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
        </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="login_script.js"></script>
</body>

</html>