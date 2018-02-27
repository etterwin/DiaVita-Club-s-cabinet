function showVideo1() {
    document.getElementById('shadow').classList.add('shadow-show');
    document.getElementById('video_popup_1').classList.add('video-show');
    document.getElementById('close_video_1').classList.add('video-close-show');
    document.querySelector('.video-player').play();
}

function closeVideo1() {
    document.querySelector('.video-player').pause()
    document.getElementById('shadow').classList.remove('shadow-show');
    document.getElementById('video_popup_1').classList.remove('video-show');
    document.getElementById('close_video_1').classList.remove('video-close-show');
}

function showVideo4() {
    document.getElementById('shadow').classList.add('shadow-show');
    document.getElementById('video_popup_4').classList.add('video-show');
    document.getElementById('close_video_4').classList.add('video-close-show');
    document.querySelector('.video-player').play();
}

function closeVideo4() {
    document.querySelector('.video-player').pause()
    document.getElementById('shadow').classList.remove('shadow-show');
    document.getElementById('video_popup_4').classList.remove('video-show');
    document.getElementById('close_video_4').classList.remove('video-close-show');
}

function showVideo5() {
    document.getElementById('shadow').classList.add('shadow-show');
    document.getElementById('video_popup_5').classList.add('video-show');
    document.getElementById('close_video_5').classList.add('video-close-show');
    document.querySelector('.video-player').play();
}

function closeVideo5() {
    document.querySelector('.video-player').pause()
    document.getElementById('shadow').classList.remove('shadow-show');
    document.getElementById('video_popup_5').classList.remove('video-show');
    document.getElementById('close_video_5').classList.remove('video-close-show');
}

function showVideo6() {
    document.getElementById('shadow').classList.add('shadow-show');
    document.getElementById('video_popup_6').classList.add('video-show');
    document.getElementById('close_video_6').classList.add('video-close-show');
    document.querySelector('.video-player').play();
}

function closeVideo6() {
    document.querySelector('.video-player').pause()
    document.getElementById('shadow').classList.remove('shadow-show');
    document.getElementById('video_popup_6').classList.remove('video-show');
    document.getElementById('close_video_6').classList.remove('video-close-show');
}

function closeMenu() {
    document.getElementById('nav-mobil').classList.remove('show');
    document.getElementById('open').classList.remove('active', 'close-btn');
}

function showSubmenu() {
    document.getElementById('submenu_list').classList.add('show-submenu');
}