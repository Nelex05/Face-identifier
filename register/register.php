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
  <link rel = "stylesheet" type = "text/css" href = "Style.css" />
</head>
<Style>
    #pwd{
    width: 250px;
    position: relative;

}
#usr{
    width: 250px;
    position: relative;
}
#pt{
    width: 250px;
    position: relative;
}
.pwd{
    width: 250px;
    position: relative;
    color: rgb(255, 255, 255);
}
.usr{
    width: 250px;
    position: relative;
    color: rgb(255, 255, 255);
}
.pt{
    width: 250px;
    position: relative;
    color: rgb(255, 255, 255);
}
.btn1{
    width: 280px;
    margin-top: 20px;
    border: none;
    background-color: #49c1a2;
    color: white;
    font-size: 18px;
}
a:link, a:visited {
    background-color: none;
    color: rgb(122, 57, 106);
    padding: 1px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
} 
</Style>
<body>
    <br>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <br><br><br><br>
                <div class="card-body" style="background:rgba(247, 247, 247, 0.2); object-fit: cover;">
                    <div class="warp" style="object-fit: cover;">
                        <p class="text-center" style="font-size:50px;color:rgb(255, 255, 255); margin-left: 1px;">Sign up</p>
                        <form name="myForm" action="register.php" onsubmit="return validateForm()" method="post" required>
                            <div class="input-group">
                                <label class="usr" for="usr">Name:</label>
                                <input type="text" class="form-control" id="usr" name="username">
                            </div>
                            <div class="input-group">
                                    <label class="pwd" for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pwd" name="password">
                            </div>
                            <br>
                                <center>
                                    <div class="btn-group" >
                                        <div class="col-md-1" style="margin-left: -9px;">
                                            <button class="btn1" type="submit" class="btn btn-primary">
                                                    <a class="circle" href="face_registration.php">
                                                        <span class="arrow"></span>
                                                    </a>
                                                    <a href="face_registration.php" class="text">
                                                        <span class="text">Next</span>
                                                    </a>
                                            </button>
                                        </div>
                                    </div>
                                </center>
                                <center>
                                    <div class="btn-group" >
                                    <div class="col-md-1" style="margin-left: 0px;">
                                            <a href="index.php/../..">cancel</a>
                                    </div>
                                </center>
                            <!-- <div class="input-group">
                                <input type="button" value="Submit" />
                            </div> -->
                            <br>
                        </form>
                    </div>
                </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
    <br><br><br><br><br><br>
</body>
</html>