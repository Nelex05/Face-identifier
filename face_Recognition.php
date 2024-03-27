<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Face detection on the browser using javascript !</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script defer src="face-api.min.js"></script>
  <script defer src="script_fr.js"></script>
  <link rel="stylesheet" href="Style_rg.css">
</head>
<body>
  <div class="card-body" id="body">
    <div class="row">
      <div class="col-md-6">
      </div>
      <div class="col-md-4">
          <video id="video" width="600" height="450" autoplay></video>
          <a href="index.php">cancel</a>
      </div> 
      <div class="col-md-2">
      </div>
    </div>
  </div>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face_Identifier</title>
      <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
      />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script defer src="face-api.min.js"></script>
    <script defer src="script_fr.js"></script>
    <link rel = "stylesheet" type = "text/css" href = "Style_rg.css" />
  </head>
  <body>
    <div class="page page1" style="background-image:url('g.jpg'); background-size: cover;">
      <div class="card-body">
          <divs class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8" id="col">
                  <center><video id="video" width="600" height="450" autoplay></video></center>
                  <center>
                      <div class="btn-group">
                          <a class="text" href="index.php">
                              <div class="col-md-1" style="margin-left: -20px;">
                                      <button class="btn1" type="submit" class="btn btn-primary">
                                      <span class="txt">Cancel</span>
                                      </button>
                              </div>
                          </a>
                      </div> 
                  </center>
              </div>
              <div class="col-md-4"></div>
          </divs>
      </div>
    </div>
</body>
  </html>