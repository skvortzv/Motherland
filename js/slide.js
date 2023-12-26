function vh(v) {
    var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
    return (v * h) / 100;
}

$("#curves").css("display", "none");

document.addEventListener("readystatechange", function () {
    if (document.readyState == 'complete') {
        $("#overflow").css("position", "fixed");
        setTimeout(function () {
            $("#overflow").css("position", "relative");
            $("#curves").css("display", "block");
        }, 100);
    }
});

function slideUp() {
    document.getElementById("nav").style.top = "0";

    let overflowTop = $("#overflow").position().top;
    if (overflowTop > vh(-100)) overflowTop = vh(0);
    else if (overflowTop <= vh(-100) && overflowTop > vh(-200)) overflowTop = vh(-100);
    else if (overflowTop <= vh(-200) && overflowTop > vh(-300)) overflowTop = vh(-200);
    else if (overflowTop <= vh(-300) && overflowTop > vh(-400)) overflowTop = vh(-300);
    else if (overflowTop <= vh(-400) && overflowTop > vh(-500)) overflowTop = vh(-400);

    if (overflowTop == vh(0)) {
        $("#overflow").css("top", overflowTop - vh(400));
    } else {
        $("#overflow").css("top", overflowTop + vh(100));
    }
}

function slideDown() {
    document.getElementById("nav").style.top = "-102px";

    let overflowTop = $("#overflow").position().top;
    if (overflowTop <= vh(0) && overflowTop > vh(-100)) overflowTop = 0;
    else if (overflowTop <= vh(-100) && overflowTop > vh(-200)) overflowTop = vh(-100);
    else if (overflowTop <= vh(-200) && overflowTop > vh(-300)) overflowTop = vh(-200);
    else if (overflowTop <= vh(-300) && overflowTop > vh(-400)) overflowTop = vh(-300);
    else if (overflowTop <= vh(-400) && overflowTop > vh(-500)) overflowTop = vh(-400);

    if (overflowTop == vh(-400)) {
        $("#overflow").css("top", overflowTop + vh(400));
    } else {
        $("#overflow").css("top", overflowTop - vh(100));
    }
}

let posMouseDown = 0;
document.addEventListener("mousedown", function (e) {
    posMouseDown = e.clientY;
});

let posMouseUp = 0;
document.addEventListener("mouseup", function (e) {
    posMouseUp = e.clientY;

    if($("#mobile-menu").css("display") == "none" && $("#login").css("display") == "none" && $("#message").css("display") == "none") {
        if ($("#overflow").position().top == vh(0)) {
            if (posMouseDown > posMouseUp && posMouseDown - posMouseUp > vh(10)) {
                overflowTop = vh(0);
                $("#overflow").css("top", overflowTop - vh(100));
                document.getElementById("nav").style.top = "-102px";
            } else if (posMouseDown < posMouseUp && posMouseUp - posMouseDown > vh(10)) {
                overflowTop = vh(0);
                $("#overflow").css("top", overflowTop - vh(400));
                document.getElementById("nav").style.top = "0";
            }
        } else if ($("#overflow").position().top == vh(-100)) {
            if (posMouseDown > posMouseUp && posMouseDown - posMouseUp > vh(50)) {
                overflowTop = vh(-100);
                $("#overflow").css("top", overflowTop - vh(100));
                document.getElementById("nav").style.top = "-102px";
            } else if (posMouseDown < posMouseUp && posMouseUp - posMouseDown > vh(50)) {
                overflowTop = vh(-100);
                $("#overflow").css("top", overflowTop + vh(100));
                document.getElementById("nav").style.top = "0";
            }
        } else if ($("#overflow").position().top == vh(-200)) {
            if (posMouseDown > posMouseUp && posMouseDown - posMouseUp > vh(15)) {
                overflowTop = vh(-200);
                $("#overflow").css("top", overflowTop - vh(100));
                document.getElementById("nav").style.top = "-102px";
            } else if (posMouseDown < posMouseUp && posMouseUp - posMouseDown > vh(15)) {
                overflowTop = vh(-200);
                $("#overflow").css("top", overflowTop + vh(100));
                document.getElementById("nav").style.top = "0";
            }
        } else if ($("#overflow").position().top == vh(-300)) {
            if (posMouseDown > posMouseUp && posMouseDown - posMouseUp > vh(15)) {
                overflowTop = vh(-300);
                $("#overflow").css("top", overflowTop - vh(100));
                document.getElementById("nav").style.top = "-102px";
            } else if (posMouseDown < posMouseUp && posMouseUp - posMouseDown > vh(15)) {
                overflowTop = vh(-300);
                $("#overflow").css("top", overflowTop + vh(100));
                document.getElementById("nav").style.top = "0";
            }
        } else if ($("#overflow").position().top == vh(-400)) {
            if (posMouseDown > posMouseUp && posMouseDown - posMouseUp > vh(10)) {
                overflowTop = vh(-400);
                $("#overflow").css("top", overflowTop + vh(400));
                document.getElementById("nav").style.top = "-102px";
            } else if (posMouseDown < posMouseUp && posMouseUp - posMouseDown > vh(10)) {
                overflowTop = vh(-400);
                $("#overflow").css("top", overflowTop + vh(100));
                document.getElementById("nav").style.top = "0";
            }
        }
    }
});

document.addEventListener("wheel", function (e) {
    if($("#mobile-menu").css("display") == "none" && $("#login").css("display") == "none" && $("#message").css("display") == "none") {
        if (e.deltaY > 0) {
            document.getElementById("nav").style.top = "-102px";
            if ($("#overflow").position().top == vh(0)) {
                overflowTop = vh(0);
                $("#overflow").css("top", overflowTop - vh(100));
            } else if ($("#overflow").position().top == vh(-100)) {
                overflowTop = vh(-100);
                $("#overflow").css("top", overflowTop - vh(100));
            } else if ($("#overflow").position().top == vh(-200)) {
                overflowTop = vh(-200);
                $("#overflow").css("top", overflowTop - vh(100));
            } else if ($("#overflow").position().top == vh(-300)) {
                overflowTop = vh(-300);
                $("#overflow").css("top", overflowTop - vh(100));
            } else if ($("#overflow").position().top == vh(-400)) {
                overflowTop = vh(-400);
                $("#overflow").css("top", overflowTop + vh(400));
            }
        } else {
            document.getElementById("nav").style.top = "0";
            if ($("#overflow").position().top == vh(0)) {
                overflowTop = vh(0);
                $("#overflow").css("top", overflowTop - vh(400));
            } else if ($("#overflow").position().top == vh(-100)) {
                overflowTop = vh(-100);
                $("#overflow").css("top", overflowTop + vh(100));
            } else if ($("#overflow").position().top == vh(-200)) {
                overflowTop = vh(-200);
                $("#overflow").css("top", overflowTop + vh(100));
            } else if ($("#overflow").position().top == vh(-300)) {
                overflowTop = vh(-300);
                $("#overflow").css("top", overflowTop + vh(100));
            } else if ($("#overflow").position().top == vh(-400)) {
                overflowTop = vh(-400);
                $("#overflow").css("top", overflowTop + vh(100));
            }
        }
    }
});

document.addEventListener("keydown", function (e) {
    if($("#mobile-menu").css("display") == "none" && $("#login").css("display") == "none" && $("#message").css("display") == "none") {
        if (e.code == "ArrowDown") {
            document.getElementById("nav").style.top = "-102px";
            if ($("#overflow").position().top == vh(0)) {
                overflowTop = vh(0);
                $("#overflow").css("top", overflowTop - vh(100));
            } else if ($("#overflow").position().top == vh(-100)) {
                overflowTop = vh(-100);
                $("#overflow").css("top", overflowTop - vh(100));
            } else if ($("#overflow").position().top == vh(-200)) {
                overflowTop = vh(-200);
                $("#overflow").css("top", overflowTop - vh(100));
            } else if ($("#overflow").position().top == vh(-300)) {
                overflowTop = vh(-300);
                $("#overflow").css("top", overflowTop - vh(100));
            } else if ($("#overflow").position().top == vh(-400)) {
                overflowTop = vh(-400);
                $("#overflow").css("top", overflowTop + vh(400));
            }
        } else if (e.code == "ArrowUp") {
            document.getElementById("nav").style.top = "0";
            if ($("#overflow").position().top == vh(0)) {
                overflowTop = vh(0);
                $("#overflow").css("top", overflowTop - vh(400));
            } else if ($("#overflow").position().top == vh(-100)) {
                overflowTop = vh(-100);
                $("#overflow").css("top", overflowTop + vh(100));
            } else if ($("#overflow").position().top == vh(-200)) {
                overflowTop = vh(-200);
                $("#overflow").css("top", overflowTop + vh(100));
            } else if ($("#overflow").position().top == vh(-300)) {
                overflowTop = vh(-300);
                $("#overflow").css("top", overflowTop + vh(100));
            } else if ($("#overflow").position().top == vh(-400)) {
                overflowTop = vh(-400);
                $("#overflow").css("top", overflowTop + vh(100));
            }
        }
    }
});

let posTouchDown = 0;
document.addEventListener("touchstart", function(e) {
    posTouchDown = e.changedTouches[0].clientY;
});

let posTouchUp = 0;
document.addEventListener("touchend", function(e) {
    posTouchUp = e.changedTouches[0].clientY;
    
    if($("#mobile-menu").css("display") == "none" && $("#login").css("display") == "none" && $("#message").css("display") == "none") {
        if ($("#overflow").position().top == vh(0)) {
            if (posTouchDown > posTouchUp && posTouchDown - posTouchUp > vh(10)) {
                overflowTop = vh(0);
                $("#overflow").css("top", overflowTop - vh(100));
                document.getElementById("nav").style.top = "-102px";
            } else if (posTouchDown < posTouchUp && posTouchUp - posTouchDown > vh(10)) {
                overflowTop = vh(0);
                $("#overflow").css("top", overflowTop - vh(400));
                document.getElementById("nav").style.top = "0";
            }
        } else if ($("#overflow").position().top == vh(-100)) {
            if (posTouchDown > posTouchUp && posTouchDown - posTouchUp > vh(50)) {
                overflowTop = vh(-100);
                $("#overflow").css("top", overflowTop - vh(100));
                document.getElementById("nav").style.top = "-102px";
            } else if (posTouchDown < posTouchUp && posTouchUp - posTouchDown > vh(50)) {
                overflowTop = vh(-100);
                $("#overflow").css("top", overflowTop + vh(100));
                document.getElementById("nav").style.top = "0";
            }
        } else if ($("#overflow").position().top == vh(-200)) {
            if (posTouchDown > posTouchUp && posTouchDown - posTouchUp > vh(15)) {
                overflowTop = vh(-200);
                $("#overflow").css("top", overflowTop - vh(100));
                document.getElementById("nav").style.top = "-102px";
            } else if (posTouchDown < posTouchUp && posTouchUp - posTouchDown > vh(15)) {
                overflowTop = vh(-200);
                $("#overflow").css("top", overflowTop + vh(100));
                document.getElementById("nav").style.top = "0";
            }
        } else if ($("#overflow").position().top == vh(-300)) {
            if (posTouchDown > posTouchUp && posTouchDown - posTouchUp > vh(15)) {
                overflowTop = vh(-300);
                $("#overflow").css("top", overflowTop - vh(100));
                document.getElementById("nav").style.top = "-102px";
            } else if (posTouchDown < posTouchUp && posTouchUp - posTouchDown > vh(15)) {
                overflowTop = vh(-300);
                $("#overflow").css("top", overflowTop + vh(100));
                document.getElementById("nav").style.top = "0";
            }
        } else if ($("#overflow").position().top == vh(-400)) {
            if (posTouchDown > posTouchUp && posTouchDown - posTouchUp > vh(10)) {
                overflowTop = vh(-400);
                $("#overflow").css("top", overflowTop + vh(400));
                document.getElementById("nav").style.top = "-102px";
            } else if (posTouchDown < posTouchUp && posTouchUp - posTouchDown > vh(10)) {
                overflowTop = vh(-400);
                $("#overflow").css("top", overflowTop + vh(100));
                document.getElementById("nav").style.top = "0";
            }
        }
    }
});