// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
function successful(){
    const urlParams = new URLSearchParams(window.location.search);
    var param = urlParams.get('success');
    console.log('param '+param);
    if(param === null) {
    }
    else
    {
        if(param == 'true')
        {
            modal.style.display = "block";
            document.getElementById("output").innerHTML = "Quote request sent successfully!";
        }
        else if(param == 'false')
        {
            modal.style.display = "block";
            document.getElementById("output").innerHTML = "Quote request Failed! <br> Please call the number availabe on the contact page.";
        }

    }
}
window.onload = successful();

// When the user clicks on <span> (x), close the modal
span.onclick = function() {

    modal.style.display = "none";

}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}