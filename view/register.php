
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - ATLAPTOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/register-style.css">
</head>
<body >
    <header class="banner">
        <div class="container text-banner" style="margin-top:15px; margin-bottom: 10px;">
            <ul class="nav justify-content-center align-items-center">
                <li>
                    <img src="./images/logo.png" style="width: 166px; height:47px; margin-right: 70px;">
                </li>
                <li class="nav-item">
                    <a href="./home.php" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">LAPTOP</a> 
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">PHỤ KIỆN</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">ABOUT</a>
                </li>
                <div style="margin-left: 70px;">
                    <a href="#"><i class="fa fa-shopping-cart">&emsp;</i></a>
                    <a href="#"><i class="fa fa-bell-o">&emsp;</i></a>
                    <a href="#"><i class="fa fa-user">&emsp;</i></a>
                </div>
            </ul>
        </div>
    </header>

    <!-- content  -->
    <section id="content" >
        <div class="container width-register">
            <div class="row">
              <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card card-signin flex-row my-5">
                  
                  <div class="card-body">
                    <h5 class="card-title text-center" style="color: #fff;">Register</h5>
                    <form class="form-signin" method="post" action = "../controller/userController.php">
                        <div class="form-label-group">
                            <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                            <label for="inputEmail">Email address</label>
                          </div>
                      <div class="form-label-group">
                        <input name="username" type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                        <label for="inputUserame">Username</label>
                      </div>       
                      <div class="form-label-group">
                        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <label for="inputPassword">Password</label>
                      </div>                      
                      <div class="form-label-group">
                        <input name="confirm" type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                        <label for="inputConfirmPassword">Confirm password</label>
                      </div>
                      <br>       
                        <button class="btn btn-sm  btn-block"  id="btnRegister" type="submit" name="action" value="register">Register</button>                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    
    





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="../js/valicationRegister.js"></script>
</body>
</html>