$(function () {
    $(".preview").on("click", function () {
        $(".show").fadeToggle();
        $(".content").fadeToggle();
    });
});
$(function () {
    $(".redengine_1").on("click", function () {
        $(".video_1").toggle();
        $(".back_1").toggle();
        $(".preview").toggle();
    });
});
$(function () {
    $(".redengine_2").on("click", function () {
        $(".video_2").fadeToggle();
        $(".back_2").toggle();
        $(".preview").toggle();
    });
});
$(function () {
    $(".redengine_3").on("click", function () {
        $(".video_3").fadeToggle();
        $(".back_3").toggle();
        $(".preview").toggle();
    });
});
$(function () {
    $(".redengine_4").on("click", function () {
        $(".video_4").fadeToggle();
        $(".back_4").toggle();
        $(".preview").toggle();
    });
});
$(function () {
    $(".back_1").on("click", function () {
        $(".video_1-close").toggle().delay(800);
        $(".video_1").fadeToggle(0);
        $(".back_1").toggle();
        $(".preview").toggle();
        $(".video_1 iframe").attr("src","https://www.youtube.com/embed/HedLjjlSy3Y?autoplay=0");
        $(".video_1-close").fadeToggle(240);
    });
});
$(function () {
    $(".back_2").on("click", function () {
        $(".video_2-close").toggle().delay(800);
        $(".video_2").fadeToggle(0);
        $(".back_2").toggle();
        $(".preview").toggle();
        $(".video_2 iframe").attr("src","https://www.youtube.com/embed/IEgBseW52JE?autoplay=0");
        $(".video_2-close").fadeToggle(240);
    });
});
$(function () {
    $(".back_3").on("click", function () {
        $(".video_3-close").toggle().delay(800);
        $(".video_3").fadeToggle(0);
        $(".back_3").toggle();
        $(".preview").toggle();
        $(".video_3 iframe").attr("src","https://www.youtube.com/embed/53MyR_Z3i1w?autoplay=0");
        $(".video_3-close").fadeToggle(240);
    });
});
$(function () {
    $(".back_4").on("click", function () {
        $(".video_4-close").toggle().delay(800);
        $(".video_4").fadeToggle(0);
        $(".back_4").toggle();
        $(".preview").toggle();
        $(".video_4 iframe").attr("src","https://www.youtube.com/embed/QI5QnKmvPpI?autoplay=0");
        $(".video_4-close").fadeToggle(240);
    });
});