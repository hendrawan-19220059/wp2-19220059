<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>

    <!-- Import Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">

    <style>
        body{
            background-color: #e9ece6;
        }
        .container{
            width: 400px;
            background-color: #e9ece6;
            height: 600px;
            margin-top: 57px;
        }
        h1{
            padding-top: 15px;
        }
        form .perangkat{
            width: 510px;
            margin: 10px auto;
        }
    </style>


  </head>
  <body>

    <div class="container">
        <h1 class="text-center fw-semibold">Login</h1>


        <form action="" method="post" class="">
            <div class="mb-3 mt-5">
                <label for="username" class="form-label ">Username</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
                <div class="form-text">Belum daftar? <a href="registrasi_petugas.php">Buat akun baru</a>. </div>
            </div>
        
            <button type="submit" class="btn btn-primary mb-5" name="login">Login</button>
        </form>
        

    </div>







    <!-- Import Boostrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
    crossorigin="anonymous"></script>

  </body>
</html>