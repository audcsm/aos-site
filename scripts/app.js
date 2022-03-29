window.onscroll = function() {stickyHeader()};

$(window).resize(function() {
    if($(window).width() >= 767){
        header.classList.remove("sticky");
    }
});

var header = document.getElementById("header");
var sticky = header.offsetHeight;

function stickyHeader() {
    if($(window).width() >= 767){
        if (window.pageYOffset >= sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
}

function mobileNavOpen() {
  document.getElementById("nav").style.width = "100vw";
}

function mobileNavClose() {
  document.getElementById("nav").style.width = "0";
}