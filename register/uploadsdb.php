<?php
// Check if the image data was sent from the client-side JavaScript
if ($_FILES['image']['error'] === UPLOAD_ERR_OK && is_uploaded_file($_FILES['image']['tmp_name'])) {
    // Specify the folder where the images will be stored
    $uploadDirectory = "C:/xampp/htdocs/face_identifier/register/uploads"; // Path to the uploads folder
    
    // Get the filename of the uploaded image
    $filename = $_FILES['image']['name'];
    
    // Move the uploaded image to the specified folder
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory . '/' . $filename)) {
        echo "Image uploaded successfully: $filename";
    } else {
        http_response_code(500); // Internal server error
        echo "Failed to upload image: $filename";
    }
} else {
    http_response_code(400); // Bad request
    echo "No image data received.";
}
?>
