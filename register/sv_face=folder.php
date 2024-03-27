<?php

// Get the JSON data sent from the client
$data = json_decode(file_get_contents('php://input'));

// Check if the data is valid
if (!isset($data->faceData)) {
    http_response_code(400); // Bad request
    echo "Missing face data.";
    exit();
}

// Decode the base64-encoded image data
$encodedImage = $data->faceData;
$decodedImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $encodedImage));

// Set the path to the folder where you want to save the images
$uploadDirectory = 'uploads/';

// Generate a unique filename for the image
$filename = uniqid('face_') . '.jpg';
$filePath = $uploadDirectory . $filename;

// Save the image to the specified folder
if (file_put_contents($filePath, $decodedImage)) {
    echo "Face captured and saved successfully as: $filename";
} else {
    http_response_code(500); // Internal server error
    echo "Failed to save the captured face.";
}
?>
<script src="uploads.js"></script>
