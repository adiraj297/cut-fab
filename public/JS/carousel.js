var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000);
}

var sliderFlag = true;

function toggleSlideShow() {

    if (sliderFlag) {
        document.getElementById("slider").style.display = "none";
        document.getElementById("intro2").style.display = "block";


        sliderFlag = false;
    } else {
        document.getElementById("slider").style.display = "block";
        document.getElementById("intro2").style.display = "none";
        sliderFlag = true;
    }


}