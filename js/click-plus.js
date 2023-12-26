$("#plus").on('click', function() {
    if($("#on-plus").css("display") == "none") {
        $("#on-plus").css("display", "block");
        $("#on-plus").css("animation", "plus .2s ease-in-out forwards");
    } else if($("#on-plus").css("display") == "block") {
        $("#on-plus").css("animation", "plus-reverse .2s ease-in-out forwards");
        setTimeout(displayNone, 200);
    }

    function displayNone() {
        $("#on-plus").css("display", "none");
    }
});