<?php
include('./data/db_con.php');
// Function to handle file upload
function uploadImageToDatabase($conn, $filename) {
    // Read image data
    $imgData = file_get_contents($filename);

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO user (userface) VALUES (?)");
    $stmt->bind_param("b", $imgData);

    // Execute SQL statement
    if ($stmt->execute()) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error uploading image: " . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Upload each image in the specified directory
$imageDirectory = "../htdocs/face_identifie/register/uploads"; // Change this to your image directory path
$files = scandir($imageDirectory);

foreach ($files as $file) {
    if (is_file($imageDirectory . "/" . $file)) {
        // Upload image to database
        uploadImageToDatabase($conn, $imageDirectory . "/" . $file);
        echo "<br>";
    }
}

// Close database connection
$conn->close();
?>
