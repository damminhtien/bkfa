$(function() {
    $("#facebook.fb-left").hover(function() {
            $(this).stop(true, false).animate({ left: "0" }, 800, 'easeOutQuint');
        },
        function() {
            $(this).stop(true, false).animate({ left: "-241px" }, 800, 'easeInQuint');
        }, 1000);
});

$(function() {
    $("#video_box.vb-left").hover(function() {
            $(this).stop(true, false).animate({ left: "0" }, 800, 'easeOutQuint');
        },
        function() {
            $(this).stop(true, false).animate({ left: "-566px" }, 800, 'easeInQuint');
        }, 1000);
});
$(function() {
    $("#video_box.vb-right").hover(function() {
            $(this).stop(true, false).animate({ right: "0" }, 800, 'easeOutQuint');
        },
        function() {
            $(this).stop(true, false).animate({ right: "-566px" }, 800, 'easeInQuint');
        }, 1000);
});