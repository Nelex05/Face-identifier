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
    <script defer src="face-api.min.js"></script>
    <link rel = "stylesheet" type = "text/css" href = "Style.css" />
</head>
<Style>
        body {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        canvas {
            position: absolute;
        }
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
                            <form name="myForm" action="index.php/../.." onsubmit="return validateForm()" method="post" required>
                                    <center>
                                        <h4 style="color: antiquewhite;">Please face the Camera</h4>
                                        <video id="video" width="500" height="500" autoplay></video>
                                        <br><br>
                                            <div class="btn-group" id="col">
                                                <a class="text" href="index.php/../..">
                                                    <div class="col-md-1" style="margin-left: -20px;">
                                                            <button class="btn1" type="submit" class="btn btn-primary">
                                                            <span class="txt">Done</span>
                                                            </button>
                                                    </div>
                                                </a>
                                            </div> 
                                    </center>
                </div> 
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php
            include('./data/db_con.php'); // connection to your database
            
        ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            const video = document.getElementById('video');

                Promise.all([
                    faceapi.nets.tinyFaceDetector.loadFromUri('./models'),
                    faceapi.nets.faceLandmark68Net.loadFromUri('./models'),
                    faceapi.nets.faceRecognitionNet.loadFromUri('./models'),
                    faceapi.nets.faceExpressionNet.loadFromUri('./models')
                ]).then(startVideo);

                function startVideo() {
                    navigator.getUserMedia(
                        { video: {} },
                        stream => video.srcObject = stream,
                        err => console.error(err)
                    );
                }

                video.addEventListener('play', () => {
                    const canvas = faceapi.createCanvasFromMedia(video);
                    document.body.append(canvas);
                    const displaySize = { width: video.width, height: video.height };
                    faceapi.matchDimensions(canvas, displaySize);

                    setTimeout(async () => {
                        const detections = await faceapi.detectAllFaces(video, new faceapi
                            .TinyFaceDetectorOptions())
                            .withFaceLandmarks()
                            .withFaceExpressions();
                        const resizedDetections = faceapi.resizeResults(detections, displaySize);
                        canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height);
                        faceapi.draw.drawDetections(canvas, resizedDetections);
                        faceapi.draw.drawFaceLandmarks(canvas, resizedDetections);
                        faceapi.draw.drawFaceExpressions(canvas, resizedDetections);

                        // Capture the face and send it to the server
                        const capturedFace = canvas.toDataURL('image/jpeg');

                        // Send the captured face to the server via AJAX
                        fetch('sv_face=folder.php', {
                            method: 'POST',
                            body: JSON.stringify({ faceData: capturedFace }),
                            headers: {
                                'Content-Type': 'application/json'
                            }
                        })
                        .then(response => {
                            if (response.ok) {
                                console.log('Face captured and saved successfully.');
                            } else {
                                console.error('Failed to save the captured face.');
                            }
                        })
                        .catch(error => {
                            console.error('Error occurred while saving the captured face:', error);
                        });
                    }, 5000);
                });
            });
        </script>
</body>
</html>
