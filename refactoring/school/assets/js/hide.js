$(function($){
    $(document).mouseup(function (e){
        let div = $('#video_popup');
        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.removeClass('video-show');
            $('#shadow').removeClass('shadow-show');
            $('#close_video').removeClass('video-close-show');
        }
    });
});

$(function($){
    $(document).mouseup(function (e){
        let div = $('#submenu_list');
        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.removeClass('show-submenu');
        }
    });
});