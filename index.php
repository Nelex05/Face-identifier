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
                <center><h2>A</h2></center>
            </div>
            <div class="col-md-8">
                <center>
                  <h2>we have to identify you first</h2>
                </center>
                <br><br>
                <center>
                  <divs class="col-md-4">
                    <center>
                      <p>War has been a constant presence throughout human history, leaving permanent impacts on communities, civilizations, and individuals alike. It has stirred a plethora of emotions, stimulated philosophical discussions, and offered fertile ground for contemplation as one of the most profound and momentous human experiences. Essays on war, as windows into the human condition, provide a chance to investigate the many facets of armed conflict.

                        The subject of war has continually altered, from ancient battles engraved on stone tablets to modern violence witnessed through the prism of technology, yet its essential essence remains immovable. Essays on war investigate the causes that drive nations and people to engage in violence, revealing the complex interplay of political, economic, social, and ideological variables that culminate in these cataclysmic events.
                      </p>
                    </center>  
                  </divs>
                </center>
                
            </div>
            <div class="col-md-2">
                <center><h2>A</h2></center>
            </div>
          </div>
          <br><br><br><br><br><br><br>
        </div>
        <div class="page2">
          <center><h1>violence witnessed through the prism of technology, yet its essential essence remains immovable. Essays on war investigate the causes that drive nations and people to engage in violence, revealing the complex interplay of political, economic, social, and ideological variables that culminate in these cataclysmic events.</h1></center>
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