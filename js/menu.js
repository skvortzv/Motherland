function menu() {
    let mobileMenu = document.getElementById("mobile-menu");
    let mobileMenuCSS = window.getComputedStyle(mobileMenu);
    if(mobileMenuCSS.getPropertyValue("display") == "none") {
        document.getElementById("mobile-menu").style.display = "block";
        document.getElementById("navigation").setAttribute("style", "animation: mobile-menu .25s ease-in-out forwards;");
    } else if(mobileMenuCSS.getPropertyValue("display") == "block") {
        document.getElementById("navigation").setAttribute("style", "animation: mobile-menu-reverse .25s ease-in-out forwards;");
        setTimeout(displayNone, 250);

        function displayNone() {
            document.getElementById("mobile-menu").style.display = "none";
        }
    }
}