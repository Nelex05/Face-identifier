fetch('sv_face=folder.php', {
    method: 'POST',
    body: JSON.stringify({ faceData: capturedFace }),
    headers: {
        'Content-Type': 'application/json'
    }
})