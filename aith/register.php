<?php

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER - Ace In The Hole Multisport Events</title>
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

</head>

<body>
<main>
    <header>
        <div class="header_container">
            <h1>REGISTER FOR UPCOMING EVENT</h1>
        </div>
    </header>
    <div class="body_container">
        <p>Athletes must read the <a href="faq.php">F.A.Q.</a> before registering.</p>
        <hr>
    <form id="registration" method="post" action="form_processor.php">
        <label id="registrant_full_name"><h2>Full Name: </h2></label>
        <input type="text" name="registrant_full_name" /><br />

        <label id="registrant_number"><h2>Phone Number: </h2></label>
        <input type="phone" name="registrant_number" /><br /><br />

        <label id="registrant_email_address"><h2>E-Mail Address: </h2></label>
        <input type="email" name="registrant_email_address" /><br />

        <label id="registrant_age"><h2>Age: </h2></label><input type="number" name="registrant_age" /><br />

        <label id="registrant_role"><h2>Role: </h2></label>
        <input type="radio" name="registrant_role" value="Athlete" />Athlete<br />
        <input type="radio" name="registrant_role" value="Volunteer" />Volunteer<br />

        <label id="registrant_gender"><h2>Gender: </h2></label>
        <input type="radio" name="registrant_gender" value="Male"/>Male<br />
        <input type="radio" name="registrant_gender" value="Female"/>Female<br />
        <input type="radio" name="registrant_gender" value="Other/Non-Binary"/>Other/Non-Binary<br />

        <label id="t_shirt_size"><h2>T-Shirt Size: </h2></label>
        <input type="radio" name="t_shirt_size" value="S"/>Small<br />
        <input type="radio" name="t_shirt_size" value="M"/>Medium<br />
        <input type="radio" name="t_shirt_size" value="L"/>Large<br />

        <label id="emergency_contact_full_name"><h2>Emergency Contact Full Name: </h2></label>
        <input type="text" name="emergency_contact_full_name" /><br />

        <label id="emergency_contact_number"><h2>Emergency Contact Phone Number: </h2></label>
        <input type="phone" name="emergency_contact_number" /><br />

        <label id="saturday_event_selection"><h2>Saturday Events Registering For: </h2></label>
        <select name="saturday_event_selection" />
        <option name=satone value=one>N/A</option>
        <option name=sattwo value=two>Long Course Triathlon - 7:00 AM</option>
        <option name=satthree value=three>Half Marathon - 7:15 AM</option>
        <option name=satfour value=four>10K - 7:15 AM</option>
        <option name=satfive value=five>Olympic Triathlon - 7:30 AM</option>
        <option name=satsix value=six>Volunteer</option>
        </select><br />

        <label id="sunday_event_selection"><h2>Sunday Events Registering For: </h2></label>
        <select name="sunday_event_selection" />
        <option name=sunone value=one>N/A</option>
        <option name=suntwo value=two>Sprint Triathlon - 8:00 AM</option>
        <option name=sunthree value=three>Try-a-Tri - 8:20 AM</option>
        <option name=sunfour value=four>Splash n Dash - 12:00 PM</option>
        <option name=sunfive value=five>Volunteer</option>
        </select><br />

        <label id="accommodation_request"><h2>Any Special Accommodations Needed?: </h2></label><textarea name="accommodation_request"></textarea><br />

        <br />

    <label id="submit"></label>
    <input type="submit" value="Submit">
    </form>
        <br />
    </div>
</main>
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
