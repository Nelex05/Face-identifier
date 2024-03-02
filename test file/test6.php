<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Face Login</title>
<style>
/* CSS styles for positioning and styling elements */
</style>
</head>
<body>
    <div id="loginContainer">
    <h1>Face Login</h1>
    <!-- Video element for streaming webcam footage -->
    <video id="video" width="640" height="480" autoplay></video>
    <!-- Button to capture image from webcam -->
    <button id="captureButton">Capture Image</button>
    <!-- Canvas element to display captured image -->
    <canvas id="canvas" width="640" height="480"></canvas>
    <!-- Button to perform login -->
    <button id="loginButton">Login</button>
    <!-- Container to display login status -->
    <div id="status"></div>
    </div>

    <script>
    // JavaScript code for face login functionality
    // Get references to HTML elements
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const captureButton = document.getElementById('captureButton');
    const loginButton = document.getElementById('loginButton');
    const status = document.getElementById('status');

    // Get webcam stream
    navigator.mediaDevices.getUserMedia({ video: true })
    .then(stream => {
        video.srcObject = stream;
    })
    .catch(error => {
        console.error('Error accessing webcam:', error);
    });

    // Capture image from webcam
    captureButton.addEventListener('click', () => {
    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
    });

    // Perform facial recognition and login
    loginButton.addEventListener('click', () => {
    // Extract image data from canvas
    const imageData = canvas.toDataURL();
    
    // Send image data to PHP for processing
    fetch('process_login.php', {
        method: 'POST',
        body: JSON.stringify({ image: imageData }),
        headers: {
        'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        // Handle response from PHP
        if (data.success) {
        status.textContent = 'Login successful!';
        } else {
        status.textContent = 'Login failed. Please try again.';
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
    });
    </script>
</body>
</html>