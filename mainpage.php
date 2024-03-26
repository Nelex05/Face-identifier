<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Main Page</title>
</head>
<body>
<h1>Main Page</h1>
<p>Scan your face to proceed:</p>
<video id="video" width="320" height="240" autoplay></video>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const video = document.getElementById('video');

    navigator.mediaDevices.getUserMedia({ video: true })
        .then(function(stream) {
            video.srcObject = stream;
        })
        .catch(function(err) {
            console.error('Error accessing camera: ', err);
        });

    // Capture face automatically at regular intervals
    setInterval(function() {
        const canvas = document.createElement('canvas');
        const context = canvas.getContext('2d');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        
        // Convert canvas to base64 image data
        const imageData = canvas.toDataURL('image/jpeg');

        // Send captured image data to server for processing (you can add this part)
        // Example:
        // fetch('process_face.php', {
        //     method: 'POST',
        //     body: JSON.stringify({ image: imageData })
        // })
        // .then(response => response.json())
        // .then(data => {
        //     console.log(data); // Handle response from server
        // })
        // .catch(error => {
        //     console.error('Error sending image data to server: ', error);
        // });

        console.log('Face captured automatically!');
    }, 5000); // Adjust the interval (in milliseconds) as needed
});
</script>
</body>
</html>
