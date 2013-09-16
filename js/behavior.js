(function ($) {
    $(document).ready(function () {
        $("#nav").mouseover(function () {
            $(this).find("div > ul").show();
        });
        $("#nav").mouseout(function () {
            $(this).find("div > ul").hide();
        });
        $("#nav li").mouseover(function () {
            $(this).children("ul").show();
        });
        $("#nav li").mouseout(function () {
            $(this).children("ul").hide();
        });
    });
})(jQuery);
