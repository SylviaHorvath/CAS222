<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALLERY - Ace In The Hole Multisport Events</title>
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
            <h1>GALLERY - PAST EVENTS</h1>
        </div>
    </header>
    <div class="body_container">
        <p>Scroll through our gallery of past events hosted by Ace in the Hole Multisport Events at your leisure.</p>
        <p>Tap an image to see a photo in full.</p>
        <hr>
        <!-- Images used to open the lightbox -->
        <div class="row">
            <div class="column">
                <img src="images/ace1.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/ace2.png" onclick="openModal();currentSlide(2)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/ace3.png" onclick="openModal();currentSlide(3)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/ace4.png" onclick="openModal();currentSlide(4)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/ace5.png" onclick="openModal();currentSlide(5)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/ace6.png" onclick="openModal();currentSlide(6)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/ace7.png" onclick="openModal();currentSlide(7)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/ace8.png" onclick="openModal();currentSlide(8)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/ace9.png" onclick="openModal();currentSlide(9)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/ace10.png" onclick="openModal();currentSlide(10)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/ace11.png" onclick="openModal();currentSlide(11)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/ace12.png" onclick="openModal();currentSlide(12)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/ace13.png" onclick="openModal();currentSlide(13)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/ace14.png" onclick="openModal();currentSlide(14)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/ace15.png" onclick="openModal();currentSlide(15)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/ace16.png" onclick="openModal();currentSlide(16)" class="hover-shadow">
            </div>
            <div class="column">
                <img src="images/ace17.png" onclick="openModal();currentSlide(17)" class="hover-shadow">
            </div>
        </div>

        <!-- The Modal/Lightbox -->
        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">

                <div class="mySlides">
                    <div class="numbertext">1 / 17</div>
                    <img src="images/ace1.jpg"  alt="Many women wearing swim caps and goggles are running through ankle deep water. A crowd is cheering in the background.">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 17</div>
                    <img src="images/ace2.jpg" alt="A group of people running on a track. The main focal point of the picture is a smiling person using walking aids. They are wearing a bright multicolored scarf tied in a knot around their neck.">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 17</div>
                    <img src="images/ace3.jpg" alt="A group of people on bicycles. Two bikers are raising their arms in elation and in celebration at crossing the finish line.">
                </div>

                <div class="mySlides">
                    <div class="numbertext">4 / 17</div>
                    <img src="images/ace4.jpg" alt="A group of women in wetsuits, swim caps and goggles running into the ocean. The coastal scene is set during presumably the early morning and the sky is clear.">
                </div>

                <div class="mySlides">
                    <div class="numbertext">5 / 17</div>
                    <img src="images/ace5.jpg" alt="A silhouette of bicyclists with the sun giving a bright lens flare in between the center biker's arms.">
                </div>

                <div class="mySlides">
                    <div class="numbertext">6 / 17</div>
                    <img src="images/ace6.jpg" alt="Three athletes wrap one arm around each other and pose for a photo in Barbados. Behind them is an idyllic beach scene with white sand and the partly cloudy sky almost matching the hue of the blue ocean beneath it.">
                </div>

                <div class="mySlides">
                    <div class="numbertext">7 / 17</div>
                    <img src="images/ace7.jpg" alt="A symmetrical photo taken from above a race. A crowd of runners are seen from behind running up a slight incline into the horizon.">
                </div>

                <div class="mySlides">
                    <div class="numbertext">8 / 17</div>
                    <img src="images/ace8.jpg" alt="A woman running and smiling wide for the camera. People are seen running behind her on a dirt and rocky road.">
                </div>

                <div class="mySlides">
                    <div class="numbertext">9 / 17</div>
                    <img src="images/ace9.jpg" alt="Smiling people in three wheeled bikes race towards the finish line. The man in front is raising a closed fist in visible joy.">
                </div>

                <div class="mySlides">
                    <div class="numbertext">10 / 17</div>
                    <img src="images/ace10.jpg" alt="A dark skinned person crosses the finish line. Their arms are raised with their index fingers raised in a 'number one' position.">
                </div>

                <div class="mySlides">
                    <div class="numbertext">11 / 17</div>
                    <img src="images/ace11.jpg" alt="People's legs are running towards the camera. The racer's bib numbers are visible but the racer's heads are not.">
                </div>

                <div class="mySlides">
                    <div class="numbertext">12 / 17</div>
                    <img src="images/ace12.jpg" alt="Bikers turning a corner. Most of the bikers have numbers painted on their arms.">
                </div>

                <div class="mySlides">
                    <div class="numbertext">13 / 17</div>
                    <img src="images/ace13.jpg" alt="A large crowd of people running towards the camera. The visible racers are of varied races, ages and genders.">
                </div>
                <div class="mySlides">
                    <div class="numbertext">14 / 17</div>
                    <img src="images/ace14.jpg" alt="Athletic women of varied races turn a corner in a race. There is a stadium and field behind them.">
                </div>
                <div class="mySlides">
                    <div class="numbertext">15 / 17</div>
                    <img src="images/ace15.jpg" alt="A wide shot of people of varied races, gender and ages running on a track. Some are using mobility aids including a wheelchair and forearm walking crutches.">
                </div>
                <div class="mySlides">
                    <div class="numbertext">16 / 17</div>
                    <img src="images/ace16.jpg" alt="A group of racers running past bystanders. There is a lush treeline in the background.">
                </div>

                <div class="mySlides">
                    <div class="numbertext">17 / 17</div>
                    <img src="images/ace17.jpg" alt="A large group of runners in mostly orange long sleeved shirts that read 'WE RUN MAD'. Several people in front aren't wearing the shirts but the majority of the crowd are.">
                </div>


                <!-- Next/previous controls -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- Caption text -->
                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <!-- Thumbnail image controls -->
                <div class="column">
                    <img class="demo" src="images/ace1.png" onclick="currentSlide(1)" alt="Many women wearing swim caps and goggles are running through ankle deep water. A crowd is cheering in the background.">
                </div>

                <div class="column">
                    <img class="demo" src="images/ace2.png" onclick="currentSlide(2)" alt="A group of people running on a track. The main focal point of the picture is a smiling person using walking aids. They are wearing a bright multicolored scarf tied in a knot around their neck.">
                </div>

                <div class="column">
                    <img class="demo" src="images/ace3.png" onclick="currentSlide(3)" alt="A group of people on bicycles. Two bikers are raising their arms in elation and in celebration at crossing the finish line.">
                </div>

                <div class="column">
                    <img class="demo" src="images/ace4.png" onclick="currentSlide(4)" alt="A group of women in wetsuits, swim caps and goggles running into the ocean. The coastal scene is set during presumably the early morning and the sky is clear.">
                </div>

                <div class="column">
                    <img class="demo" src="images/ace5.png" onclick="currentSlide(5)" alt="A silhouette of bicyclists with the sun giving a bright lens flare in between the center biker's arms.">
                </div>

                <div class="column">
                    <img class="demo" src="images/ace6.png" onclick="currentSlide(6)" alt="Three athletes wrap one arm around each other and pose for a photo in Barbados. Behind them is an idyllic beach scene with white sand and the partly cloudy sky almost matching the hue of the blue ocean beneath it.">
                </div>

                <div class="column">
                    <img class="demo" src="images/ace7.png" onclick="currentSlide(7)" alt="A symmetrical photo taken from above a race. A crowd of runners are seen from behind running up a slight incline into the horizon.">
                </div>

                <div class="column">
                    <img class="demo" src="images/ace8.png" onclick="currentSlide(8)" alt="A woman running and smiling wide for the camera. People are seen running behind her on a dirt and rocky road.">
                </div>

                <div class="column">
                    <img class="demo" src="images/ace9.png" onclick="currentSlide(9)" alt="Smiling people in three wheeled bikes race towards the finish line. The man in front is raising a closed fist in visible joy.">
                </div>

                <div class="column">
                    <img class="demo" src="images/ace10.png" onclick="currentSlide(10)" alt="A dark skinned person crosses the finish line. Their arms are raised with their index fingers raised in a 'number one' position.">
                </div>

                <div class="column">
                    <img class="demo" src="images/ace11.png" onclick="currentSlide(11)" alt="People's legs are running towards the camera. The racer's bib numbers are visible but the racer's heads are not.">
                </div>

                <div class="column">
                    <img class="demo" src="images/ace12.png" onclick="currentSlide(12)" alt="Bikers turning a corner. Most of the bikers have numbers painted on their arms.">
                </div>

                <div class="column">
                    <img class="demo" src="images/ace13.png" onclick="currentSlide(13)" alt="A large crowd of people running towards the camera. The visible racers are of varied races, ages and genders.">
                </div>

                <div class="column">
                    <img class="demo" src="images/ace14.png" onclick="currentSlide(14)" alt="Athletic women of varied races turn a corner in a race. There is a stadium and field behind them.">
                </div>

                <div class="column">
                    <img class="demo" src="images/ace15.png" onclick="currentSlide(15)" alt="A wide shot of people of varied races, gender and ages running on a track. Some are using mobility aids including a wheelchair and forearm walking crutches.">
                </div>

                <div class="column">
                    <img class="demo" src="images/ace16.png" onclick="currentSlide(16)" alt="A group of racers running past bystanders. There is a lush treeline in the background.">
                </div>

                <div class="column">
                    <img class="demo" src="images/ace17.png" onclick="currentSlide(17)" alt="A large group of runners in mostly orange long sleeved shirts that read 'WE RUN MAD'. Several people in front aren't wearing the shirts but the majority of the crowd are.">
                </div>
            </div>
        </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    // Open the Modal
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    // Close the Modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        const slides = document.getElementsByClassName("mySlides");
        const dots = document.getElementsByClassName("demo");
        const captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>
</html>

