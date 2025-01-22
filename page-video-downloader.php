<?php
/*
Template Name: Video Downloader
*/
get_header(); // Include WordPress header
?>
<div class="container">
    <h1>Online Video Downloader</h1>
    <p>Paste the video link and select the quality to download:</p>

    <!-- Video URL Input -->
    <input type="url" id="videoUrl" placeholder="Enter video URL" required>
    
    <!-- Quality Selection Dropdown -->
    <select id="qualitySelect">
        <option value="1080p">1080p</option>
        <option value="720p">720p</option>
        <option value="480p">480p</option>
        <option value="360p">360p</option>
    </select>

    <!-- Download Button -->
    <button id="downloadBtn">Download</button>

    <!-- Status Message -->
    <div id="statusMessage"></div>
</div>
<?php
get_footer(); // Include WordPress footer
?>
