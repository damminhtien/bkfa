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

$(function() {
    $("#twitter_footer.twit-left").hover(function() {
            $(this).stop(true, false).animate({ left: "0" }, 800, 'easeOutQuint');
        },
        function() {
            $(this).stop(true, false).animate({ left: "-215px" }, 800, 'easeInQuint');
        }, 1000);
});
$(function() {
    $("#twitter_footer.twit-right").hover(function() {
            $(this).stop(true, false).animate({ right: "0" }, 800, 'easeOutQuint');
        },
        function() {
            $(this).stop(true, false).animate({ right: "-215px" }, 800, 'easeInQuint');
        }, 1000);
});