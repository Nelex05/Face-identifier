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
  .btn1{
    width: 500px;
    margin-top: 20px;
    border: none;
    background-color: #49c1a2;
    color: white;
    font-size: 18px;
}
</style>
<body>
  <div class="card" id="blur" style="background-color: rgb(255, 251, 251);">
        <div class="card-body" id="body">
          <div class="row">
            <div class="col-md-2">
            </div>
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
            <div class="col-md-1">
            </div>
          </div><br>
          <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-md-4">
              <center><img src="eye.gif" alt="" style="object-fit:contain; height: 100%; width: 100%;"></center>
            </div>
            <div class="col-md-3">

            </div>
          </div>
          <br>
          <div class="row" >
            <div class="col-md-2">
                <center><h2></h2></center>
            </div>
            <div class="col-md-8">
                <center>
                  <h2>we have to identify you first</h2>
                </center>
                <br>
                <center>
                  <divs class="col-md-4">
                    <center>
                      <p>please scroll down to connect</p>
                    </center>  
                  </divs>
                </center>
                
            </div>
            <div class="col-md-2">
                <center><h2></h2></center>
            </div>
          </div>
        </div>
        <div id="page2">
            <br><br><br><br>
            <center><h2>Please put you face on camera</h2></center>
                <div class="card-body" style="object-fit:contain">
                  <div class="row">
                    <div class="col-md-2">
                        <center><h2></h2></center>
                    </div>
                    <div class="col-md-8">
                        <center><button id="startBtn" onclick="openCam()">Open Webcam</button></center>
                        <center><video id="videoCam" style="width: 83%"></video></center>
                        <script>
                            function openCam(){
                              let All_mediaDevices=navigator.mediaDevices
                              if (!All_mediaDevices || !All_mediaDevices.getUserMedia) {
                                  console.log("getUserMedia() not supported.");
                                  return;
                              }
                              All_mediaDevices.getUserMedia({
                                  audio: true,
                                  video: true
                              })
                              .then(function(vidStream) {
                                  var video = document.getElementById('videoCam');
                                  if ("srcObject" in video) {
                                    video.srcObject = vidStream;
                                  } else {
                                    video.src = window.URL.createObjectURL(vidStream);
                                  }
                                  video.onloadedmetadata = function(e) {
                                    video.play();
                                  };
                              })
                              .catch(function(e) {
                                  console.log(e.name + ": " + e.message);
                              });
                            }
                        </script>
                    </div>
                    <div class="col-md-2">
                        <br><br>
                        <div class="input-group">
                        <button class="btn1" type="submit" class="btn btn-primary"><a class="nav-link" id="b1" href="register/register.php">Close</a></button>
                        </div>
                        <div class="input-group">
                                  <button class="btn1" type="submit" class="btn btn-primary"><a class="nav-link" id="b1" href="register/register.php">Register</a></button>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
  </div>
  <div id="popup" style="object-fit:cover;">
    <center>
        <h2>Hello Creator</h2>
        <p>NICE TO SEE YOU AGAIN</p>
        <a href="#" onclick="myToggle()">Close</a>
    </center>
  </div>
  <script type="text/javascript">
        window.onload = function() {
            
        var blur = document.getElementById('blur');
        blur.classList.toggle('active');
        var popup = document.getElementById('popup');
        popup.classList.toggle('active');
        }
        function myToggle(){
          popup.remove();
          var removeBlur = document.getElementById('blur');
          removeBlur.classList.remove('card');
        }
  </script>
</body>
</html>
