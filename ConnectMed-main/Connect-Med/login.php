<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <style>
        *{
        box-sizing: border-box;
    }
    
    body{
        font-family: Arial;
        margin : 0;
        background: #038ade;
    }
    
    .container{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .login-box{
        margin-top: 150px;
        flex-basis: 400px;
        background: #fff;
        padding: 20px;
    }
    
    .login-box h2{
        border-bottom: 1px solid #ccc;
        color: #555;
        text-align: center;
        padding-bottom: 20px;
        margin: 0 0 20px;
    }
    
    input, select{
        width: 100%;
        padding: 15px 20px;
        margin: 8px 0;
        border: 1px solid #ccc;
    }
    
    input [type=submit] {
        background-color: #038ade;
        border: none;
        color: #fff;
        text-decoration: none;
        cursor: pointed;
    }
    </style>
    
    <title>Login</title>
</head>
<body>
  <div class="container">
      <section class="login-box">

  <h2>Login</h2>
  <form method="post" class="post">
      <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password">
    </div>
    <div class="form-group">
        <button type="submit" class=" col text-center btn btn-primary">Masuk</button>
    </div>
      <a href="registrasi.php" id="signup">Buat Akun</a>
  </form>
  </form>
  </div>
          </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

