document.getElementById('downloadBtn').addEventListener('click', function () {
    const videoUrl = document.getElementById('videoUrl').value;
    const selectedQuality = document.getElementById('qualitySelect').value;
    const statusMessage = document.getElementById('statusMessage');

    // Validate if the URL is provided
    if (!videoUrl) {
        alert('Please enter a valid video URL.');
        return;
    }

    // Simulate the download process
    statusMessage.style.display = 'block';
    statusMessage.textContent = `Downloading video from ${videoUrl} in ${selectedQuality}...`;

    // You can replace this with actual download functionality.
});
