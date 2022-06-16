<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sign Up E-Dosen</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
  </head>
  <body>
    <!--Main Navigation-->
    <style>
      #intro {
        background-image: url(https://p4.wallpaperbetter.com/wallpaper/590/223/706/design-flower-line-wallpaper-preview.jpg);
        height: 100vh;
      }
    </style>

    <!-- Background image -->
    <div id="intro" class="bg-image">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(84, 88, 94, 0.8)">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
             
              <form class="bg-white rounded shadow-5-strong p-5" action="/register/store" method="post">
                @csrf 
                <img src="img/logo.png" alt="Logo" style="width: 50px; height: 50px;">
                <h3 class="text-center font-weight-light my-4">Register</h3> 
                <div class="form-floating mb-3">
                  <input name="username" class="form-control"  id="username" type="text" placeholder="Name" >
                  <label for="username">Username</label>
                </div>               
                <div class="form-floating mb-3">
                  <input name="email" class="form-control"  id="email" type="email" placeholder="name@example.com" >
                  <label for="email">E-mail</label>
                </div> 
                <div class="form-floating mb-3">
                  <input name="password" class="form-control"  id="password" type="password" placeholder="Password">
                  <label for="password">Password</label>
                </div> 

                <!-- Submit button -->
                <div class="d-grid">
                  <input class="btn btn-primary btn-lg mb-3" type="submit" value="Register">
                </div>
                <div class="text-center">
                  <p>Sudah memiliki akun? <a href="/login">Login</a></p>
                  <div class="row">
                    <div class="col">
                      <hr>
                    </div>
                    <div class="col-2">
                      <p>atau</p>
                    </div>
                    <div class="col">
                      <hr>
                    </div>               
                  </div>                    
                </div>
                <div class="d-grid">
                  <a class="btn btn-lg" href="/dashboard" >
                    <div class="row row-cols-auto justify-content-center" >
                      <div class="col-3">
                        <img src="img/google.png" alt="" style="width: 20px; height: 20px;">
                      </div>
                      <div class="col">
                        Login dengan Google
                      </div>
                    </div>
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
  </body>
</html>
