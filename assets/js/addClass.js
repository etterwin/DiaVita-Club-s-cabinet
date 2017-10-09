function showVideo() {
 document.getElementById('video_popup').classList.add('video-show');
 document.getElementById('shadow').classList.add('shadow-show');
 document.getElementById('close_video').classList.add('video-close-show');
}

function closeVideo() {
    document.getElementById('video_popup').classList.remove('video-show');
    document.getElementById('shadow').classList.remove('shadow-show');
    document.getElementById('close_video').classList.remove('video-close-show');
}