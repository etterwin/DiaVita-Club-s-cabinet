$(function($){
    $(document).mouseup(function (e){
        let div = $('#video_popup');
        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.removeClass('video-show');
            $('#shadow').removeClass('shadow-show');
            $('.video-close').removeClass('video-close-show');
            $('.video__popup').removeClass('video-show');
        }
    });
});
