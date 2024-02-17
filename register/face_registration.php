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
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="card-body" style="background:rgba(247, 247, 247, 0.2); object-fit: cover;">
                    <div class="warp" style="object-fit: cover;">
                        <p class="text-center" style="font-size:50px;color:rgb(255, 255, 255); margin-left: 1px;"></p>
                        <form name="myForm" action="face_registration.php" onsubmit="return validateForm()" method="post" required>
                                <center>
                                    <video id="videoCam" style="width: 100%;"></video>
                                    <script>
                                        window.onload = function(){
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
                                            var x = document.getElementById("btn3");

                                            if(x.style.display === "none"){
                                                x.style.display = "block";
                                            }
                                            else{
                                                x.style.display = "none";
                                            }
                                        }
                                    </script>
                                    <br><br>
                                    <a href="register.php">cancel</a>
                                </center>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
