$(function () {
    var handle1 = $("#custom-handle-1");
    var handle2 = $("#custom-handle-2");
    $("#slider").slider({
        range: true,
        min: 0,
        max: 365,
        values: [0, 100],
        slide: function (event, ui) {
            $(".slider-value #value-1").html(ui.values[0]);
            $(".slider-value #value-2").html(ui.values[1]);
        }
    });
});
