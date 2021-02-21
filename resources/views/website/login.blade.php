<!doctype html>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <link rel="stylesheet" href="{!! asset('asset/css/style.css') !!}">
  <script type="text/javascript" src="{!! asset('assets/sweetalert/sweetalert.min.js') !!}"></script>

  <!-- ICON WEB -->
	<link rel="icon" type="image/png" href="{!! asset('asset/img/indische/logo.png') !!}">

</head>

<body>
  <div class="row" style="margin-top: 8%;">
    <div class="col-lg-6">
      <img src="{!! asset('assets/cafe/cafe.png') !!}" alt="" style="width: 60%; margin-left: 30%">
    </div>
    <div class="col-lg-5">
      <div class="container">
        <!-- ROW LOGIN -->
        <div class="row">
          <div class="col mt-4">
            <div class="d-flex justify-content-center">
              <ul class="nav" role="tablist">
                <li class="nav-item">
                  <a href="#step-1" id="step1-tab" class="nav-link active" aria-selected="true" data-toggle="tab" role="tab" style="margin-left: -25px">
                    <h5>CUSTOMER</h5>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#step-2" id="step2-tab" class="nav-link" aria-selected="false" data-toggle="tab" role="tab" style="margin-left: -10px">
                    <h5>OFFICIAL</h5>
                  </a>
                </li>
                <div class="panel rounded">
                </div>
              </ul>
            </div>
            <div class="tab-content">
              <!-- MHS -->
              <div class="tab-pane fade show active" id="step-1" area-labelledby="step1-tab" role="tab-panel">
                <div class="innerContent">
                  <div class="login-content justify-content-center">
                    <form action="" method="POST">
                      <div class="input-div one">
                        <div class="i">
                          <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                          <h5>Email</h5>
                          <input type="text" name="email" class="input">
                        </div>
                      </div>
                      <div class="input-div pass">
                        <div class="i">
                          <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                          <h5>Password</h5>
                          <input type="password" name="password" class="input">
                        </div>
                      </div>
                      <input type="submit" class="btn2" value="Login">
                    </form>
                  </div>
                </div>
                <div class="container">
                  <p class="ml-5 mt-4">Don't have an account?</p>
                  <a href="/regist"><button type="button" class="btn btn-outline-dark">CREATE</button></a>
                </div>
              </div>
              <!-- /MHS -->

              <!-- ADM -->
              <div class="tab-pane fade" id="step-2" area-labelledby="step2-tab" role="tab-panel">
                <div class="innerContent">
                  <div class="login-content justify-content-center">
                    <form action="" method="POST">
                      <div class="input-div one">
                        <div class="i">
                          <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                          <h5>NIP</h5>
                          <input type="text" class="input" id="unameadm" name="unameadm">
                        </div>
                      </div>
                      <div class="input-div pass">
                        <div class="i">
                          <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                          <h5>Password</h5>
                          <input type="password" class="input" id="passadm" name="passadm">
                        </div>
                      </div>
                      <input type="submit" class="btn2" value="Login">
                    </form>
                  </div>
                </div>
              </div>
              <!-- /ADM -->
            </div>
          </div>
        </div>
        <!-- /ROW LOGIN -->
      </div>
    </div>
  </div>

  
  <!--  -->
  <!-- Optional JavaScript -->
  <!-- CDN JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="{!! asset('asset/js/main.js') !!}"></script>
</body>

</html>