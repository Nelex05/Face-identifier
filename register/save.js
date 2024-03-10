fetch('save_face.php', {
    method: 'POST',
    body: JSON.stringify({ faceData: capturedFace }),
    headers: {
        'Content-Type': 'application/json'
    }
})
