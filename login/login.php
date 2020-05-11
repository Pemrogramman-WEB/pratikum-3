<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Sistem Informasi Akademik SMK Darussholihin</title>
  </head>
  <body class="body">
      <div class="container-login">
        <div class="wrap-login">
          <div class="img-size">
            <img src="img/logo.PNG" class="logo-size" alt="">
            <img src="img/as.png" alt="" class="img-size"></div>
          <form action="proses.php" method="post">
            <div class="wrap-input" >
              <input class="input" type="text" name="NISN" id="NISN" placeholder="NISN">
            </div>
            <div class="wrap-input">
              <input class="input" type="password" name="password" id="password" placeholder="Password">
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" style="color: white;" for="customCheck1">Ingat Saya</label>
            </div>
            <div class="pad-buttom">
              <button type="submit" name="login" class="buttom-size">Login</button>
            </div>
            
          </form>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>