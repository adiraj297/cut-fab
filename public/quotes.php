<!doctype html>
<html lang="en-au">
<head>
    <title> Quotes </title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="CSS/style3.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="IMG/favicon.png" rel="icon" type="image/png"/>
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    </style>
 <script>

</script>

</head>

<body>

<nav>

    <div class="logo">
        <img alt="logo" src="IMG/logo1.jpg">
    </div>

    <ul class="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a class="active" href="quotes.php">Quotes</a></li>
        <li><a href="contact.html">Contact</a></li>

    </ul>

    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>

</nav>

<h3>Please fill in the Contact Form below with your details and we shall get back to you with an accurate quote for your
    project:</h3>

<div class="container">
    <form action="send.php" method="post">
        <label for="fname">First Name</label>
        <input id="fname" name="firstname" required placeholder="Your name.." type="text">

        <label for="lname">Last Name</label>
        <input id="lname" name="lastname" required  placeholder="Your last name.." type="text">

        <label for="phno">Phone Number</label>
        <input id="phno" name="phno" required placeholder="Your phone number.." type="text">

        <label for="email">Email</label>
        <input id="email" name="email" required placeholder="Your email.." type="text">

        <label for="contact">Preferred Method of contact</label>
        <select id="contact" required name="contact">
            <option value="Phone">Phone</option>
            <option value="Email">Email</option>


        </select>

        <label for="subject">Any queries you may have regarding to your project:</label>
        <textarea id="message" name="message" placeholder="Queries.." style="height:200px"></textarea>

        <input type="submit" value="Submit">
    </form>
</div>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p id="output">Email sent successfully..</p>
  </div>

<script>
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
</script>


</div>


<script src="JS/app.js"></script>
</body>


</html>