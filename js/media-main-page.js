checkMediaQuery();

function checkMediaQuery() {
    if (window.innerWidth < 1400)
        document.getElementById("media").innerHTML = "MOTHER<br>LAND";
    else
        document.getElementById("media").innerHTML = "MOTHERLAND";

    if(window.innerWidth < 960)
        document.getElementById("media").innerHTML = "MOTHERLAND";

    if(window.innerWidth < 600) {
        document.getElementById("media").innerHTML = "MOTHER<br>LAND";
    }
}