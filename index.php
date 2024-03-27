<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face_identifier</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel = "stylesheet" type = "text/css" href = "style1.css" />
</head>
<style>
</style>
<body>
  <div class="page page1" style="background-image:url('F.jpg'); background-size: cover;">
    <div class="card-body">
        <divs class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="col">
                <nav class="navbar navbar-expand-md navbar-dark">
                    <a class="navbar-brand" href="index.php" id="Face_Idetifier">Face Idetifier</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar" style="float: left;">
                        <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" id="a1" href="index.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="a1" href="index.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="a1" href="index.php">Tutorial</a>
                        </li>    
                        </ul>
                    </div>  
                </nav>
            </div>
            <div class="col-md-4"></div>
        </divs>
    </div>
        
  </div>
  <div class="page page2" style="background-image:url('g.jpg'); background-size: cover;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img src="pic1.jpeg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
                        <h5>Face recognition</h5><br>
                        <div class="btn-group" id="col">
                            <a class="text" href="face_Recognition.php">
                                <div class="col-md-1" style="margin-left: -20px;">
                                        <button class="btn1" type="submit" class="btn btn-primary">
                                        <span class="arrow"></span>
                                        <span class="txt">Face recognition</span>
                                        <span class="circle"></span>
                                        </button>
                                </div>
                            </a>
                        </div> 
                    </center>
                </div>
                <div class="col-md-4" id="col"></div>
                <div class="col-md-4" id="col">
                    <center>
                        <img src="pic2.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
                        <h6>if you dont have picture first Please submit first</h6>
                        <h6>with that, the system can recognize you</h6>
                        <div class="btn-group" id="col">
                            <a class="text" href="./register/face_reg.php">
                                <div class="col-md-1" style="margin-left: -20px;">
                                        <button class="btn1" type="submit" class="btn btn-primary">
                                        <span class="arrow"></span>
                                        <span class="txt">Submit Picture</span>
                                        <span class="circle"></span>
                                        </button>
                                </div>
                            </a>
                        </div> 
                    </center>
                </div>
            </div>
        </div>
  </div>
</body>
</html>