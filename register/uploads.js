// Function to upload image files to the server
function uploadImages() {
    // Specify the folder containing the images
    const folderPath = "/face_identifier/register/uploads/"; // Path to the uploads folder
    
    // Get all image files in the folder
    fetch(folderPath)
        .then(response => response.text())
        .then(html => {
            // Extract image file names from HTML response
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const imageFiles = Array.from(doc.querySelectorAll('a[href$=".jpg"], a[href$=".jpeg"], a[href$=".png"], a[href$=".gif"]'))
                                 .map(a => a.href);
            
            // Upload each image file to the server
            imageFiles.forEach(uploadImage);
        })
        .catch(error => console.error('Error fetching image files:', error));
}

// Function to upload a single image file to the server
function uploadImage(imageUrl) {
    fetch('upload.php', {
        method: 'POST',
        body: JSON.stringify({ imageUrl }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => {
        if (response.ok) {
            console.log('Image uploaded successfully:', imageUrl);
        } else {
            console.error('Failed to upload image:', imageUrl);
        }
    })
    .catch(error => console.error('Error uploading image:', imageUrl, error));
}

// Call the uploadImages function to start the upload process
uploadImages();