<!doctype html>
<html lang="en-au">
<head>
    <title> Quotes </title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="CSS/style3.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="IMG/favicon.png" rel="icon" type="image/png"/>

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



<div class="container">

    <h3>Please fill in the Contact Form below with your details and we shall get back to you with an accurate quote for your
    project:</h3>
    <br>
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


</div>

<div class="footer">
    <b> ABN: 29014264659 </b>
</div>
<script src="JS/modal.js"></script>
<script src="JS/app.js"></script>
</body>


</html>