<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT - Ace In The Hole Multisport Events</title>
    <link rel="stylesheet" href="includes/style.css">
    <nav id="ham_nav">
        <!-- [THE HAMBURGER] -->
        <label for="hamburger">&#9776;</label>
        <input type="checkbox" id="hamburger" />

        <!-- [MENU ITEMS] -->
        <div id="ham_items">
            <a href="index.php">HOME</a>
            <a href="faq.php">F.A.Q.</a>
            <a href="gallery.php">GALLERY</a>
            <a href="register.php">REGISTER</a>
            <a href="contact.php">CONTACT</a>
        </div>
    </nav>

    <!-- a helper script for validating the form-->
    <script language="JavaScript" src="includes/gen_validatorv31.js" type="text/javascript"></script>
</head>

<body>
<main>
    <header>
        <div class="header_container">
            <h1>CONTACT US</h1>
        </div>
    </header>
    <div class="body_container">
        <p>An information request form for Ace in the Hole Multisport Events.</p>
    </div>
    <hr>
    <form method="POST" name="contact" id="contact" action="contact_form_handler.php">

        <label id="contact_full_name"><h2>Full Name: </h2></label>
        <input type="text" name="contact_full_name" /><br />

        <label id="contact_email_address"><h2>E-Mail Address: </h2></label>
        <input type="email" name="contact_email_address" /><br />

        <label id="contact_role"><h2>Your Role: </h2></label>
        <input type="radio" name="contact_role" value="Athlete" />Athlete<br />
        <input type="radio" name="contact_role" value="Volunteer" />Volunteer<br />

        <label id="contact_text"><h2>Enter Your Question Or Comment: </h2></label>
        <textarea name="contact_text"></textarea><br />
        <br />
        <label id="submit"></label>
        <input type="submit" value="Submit">
    </form>

    <script language="JavaScript">
        // Code for validating the form
        // Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
        // for details
        var frmvalidator  = new Validator("contact");
        frmvalidator.addValidation("contact_full_name","req","Please provide your full name.");
        frmvalidator.addValidation("contact_email_address","req","Please provide your email.");
        frmvalidator.addValidation("contact_email_address","email","Please enter a valid email address.");
        frmvalidator.addValidation("contact_role","req","Please select a role.");
        frmvalidator.addValidation("contact_text","req","Please enter a question or comment.");
    </script>
    <!--
    Sample code from:
    http://www.html-form-guide.com/contact-form/php-email-contact-form.html
    -->
</main>
<br />
<hr>
</body>
<footer>
    <div class="nav">
        <a href="index.php">HOME</a>
        <a href="faq.php">F.A.Q.</a>
        <a href="gallery.php">GALLERY</a>
        <a href="register.php">REGISTER</a>
        <a href="contact.php">CONTACT</a>
    </div>
    <p>2021 | Site by Sylvia Horvath</p>
</footer>
<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</html>

