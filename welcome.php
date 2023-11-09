<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="welcome.css" />
</head>

<body>
    <div class="container">
        <div class="box1" id="boxa">
            <nav>
                <label class="logo">TECHNO MAIN SALTLAKE SPORTS CLUB</label>

                <ul>
                    <li><a href="#Home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#help">Contact</a></li>
                    <li><a href="form.html">REGISTER</a></li>
                    <li><a href="gallery.html">gallery</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <!-- <li><a href="register.php">SIGNUP</a></li> -->

                    <li>
                        <a href="#"><?php echo "Welcome " . $_SESSION['username'] ?></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="box1" id="boxb">
            <h1 class="head"><a href="file.pdf">Techno India Group</a></h1>
            <br />
            <h3>Techno Group: Fostering Excellence in Sports and Beyond</h3>
            <br />
            <p class="para">
                Techno Group is a diverse conglomerate of colleges offering a wide
                array of academic programs including B.Tech, MCA, M.Tech, and diploma
                courses. While academic excellence is at the core of our mission, we
                understand that a well-rounded education involves more than just
                classroom learning. It encompasses personal growth, teamwork, and
                physical fitness. In this spirit, we are proud to conduct an annual
                sports event in December, a celebration of athletic talent and
                camaraderie.<br />
            </p>
            <h3>The Annual Sports Extravaganza</h3>
            <br />
            <p class="para">
                Our sports event, held from December 20th to 25th each year, is a
                testament to our commitment to fostering excellence in students across
                various fields. This extravaganza is a thrilling showcase of the
                athletic prowess of our students, bringing together participants from
                different backgrounds, disciplines, and levels of study. It's a
                vibrant melting pot of talent, where the pursuit of physical
                excellence is as valued as academic achievements. <br />
            </p>
            <h3>A Hefty Prize Pool</h3>
            <p class="para">
                <br />To further motivate and reward our student-athletes, we offer a
                substantial prize pool for the winners. The first-place team takes
                home a handsome reward of 1 lakh rupees, while the runner-up receives
                a commendable prize of 50,000 rupees. These significant rewards not
                only recognize the hard work and dedication of our participants but
                also incentivize others to push their limits and strive for greatness.
                <br />
            </p>
            <h3>Empowering Students Across Fields</h3>
            <br />
            <p class="para">
                Our belief is that sports foster values and skills that transcend the
                playing field. It instills discipline, resilience, and a competitive
                spirit. Students learn the importance of teamwork, leadership, and
                time management. These attributes are not only crucial for success in
                sports but are equally valuable in the professional world. <br />In
                conclusion, Techno Group is not just about academic excellence; it is
                a place where holistic development is encouraged. Our annual sports
                event is a testament to our commitment to nurturing the well-rounded
                growth of our students, empowering them to excel not only in academics
                but in sports and life. As we continue to organize this grand sporting
                spectacle, we look forward to witnessing the growth and success of our
                student-athletes in the years to come.
            </p>
        </div>
        <div class="box1" id="boxc">
            <div class="img1" id="img1">
                <img src="./image/collage.jpg" alt="" />
            </div>

            <a href="rules.html" id="rule" class="rule-link">Tournament Rules.....</a>
            <div class="img2" id="img2">
                <img src="./image/college.webp" alt="" />
            </div>
        </div>
        <div class="box1" id="boxd">
            <h2 class="head" id="about">About Techno Utkarsh Club</h2>
            <p class="para">
                Welcome to Techno Utkarsh Club, the heartbeat of innovation and
                technology at Em-41 Sector V, Bidhannagar, Kolkata. We are a
                passionate group of students dedicated to fostering a spirit of
                technological excellence, creativity, and collaboration within the
                vibrant community of budding engineers.
            </p>
            <h3>Our Mission</h3>
            <p class="para">
                At Techno Utkarsh, our mission is to empower and inspire the brightest
                minds in the world of technology. We aim to provide a platform for
                students to explore, learn, and innovate, equipping them with the
                skills and knowledge needed to excel in the ever-evolving field of
                engineering.
            </p>
            <h3>Intercollege Tournament</h3>
            <p class="para">
                One of our most exciting initiatives is the Intercollege Tournament,
                an annual event that brings together engineering talents from all over
                India. This tournament serves as a battlefield for the sharpest minds,
                offering a chance to showcase your skills, network with like-minded
                individuals, and win accolades that can kickstart your career.
            </p>
        </div>
        <div class="box1" id="boxe">
            <div id="img4">
                <img src="./image/image10.avif" alt="" />
            </div>
        </div>
        <div class="box1" id="boxf">
            <h2 id="#record" class="head">Previous Records</h2>

            <p class="para" id="Previous">
                Dear friends, athletes, and sports enthusiasts, It is with great
                pleasure and pride that we gathered here last year to celebrate the
                wonderful performance and successful completion of the sports
                tournament organized by the Techno Utkarsh Club at Techno Main Salt
                Lake College. This event showcased the extraordinary talent and
                dedication of our athletes and brought the entire college community
                together in a spirit of healthy competition and camaraderie. The
                journey leading up to this moment was filled with hard work,
                determination, and countless hours of training. <br />
            </p>
            <p class="para">
                Athletes from different backgrounds and disciplines gave their all,
                pushing their limits to achieve excellence in their respective fields.
                Whether it was on the track, the field, the court, or the pool, our
                athletes displayed unmatched skill, agility, and sportsmanship. Their
                dedication made this tournament a grand success. We extend our
                gratitude to the organizing committee, whose hard work and dedication
                were instrumental in making this tournament a resounding triumph. They
                spent countless hours planning and executing every aspect of the
                event, ensuring that it ran smoothly and efficiently. Their efforts
                behind the scenes did not go unnoticed, and we owe them a debt of
                gratitude. <br />
            </p>
            <p class="para">
                Furthermore, we must recognize the tireless support and encouragement
                from the coaching staff, faculty members, and the entire college
                community. Without their guidance and motivation, our athletes would
                not have been able to reach their full potential. As we came to the
                conclusion of this tournament, let us remember that it wasn't just
                about the medals and trophies but the lessons learned, the friendships
                forged, and the personal growth that each participant experienced.
                Sports had the remarkable ability to unite people and instill values
                such as teamwork, discipline, and resilience, which were invaluable in
                all aspects of life.
            </p>
        </div>
        <div class="box1" id="boxg">
            <div id="img5"><img src="./image/image1.avif" alt="" /></div>
            <!-- <div id="img6"><img src="./image/image12.avif" alt="" /></div> -->
        </div>
        <div class="box1" id="boxh">
            <h2 id="help" class="head">Contact Us</h2>

            <p class="para">
                Have questions or want to get involved? Reach out to us at
                <a href="mailto:keshrishubham074@gmail.com"><strong>email</strong></a>
                or <a href="tel:+919653936717"><strong>Contact Number</strong></a>. We'd love to hear from you and welcome you to our tech-savvy
                family.
            </p>

            <h3 class="subhead">Visit Us</h3>
            <p class="para">
                Our office is located at:<br />
                Em-41, Sector V, Bidhannagar,<br />
                Kolkata, India.
            </p>

            <h3 class="subhead">Office Hours</h3>
            <p class="para">
                Monday - Friday: 9:00 AM - 5:00 PM<br />
                Saturday: 10:00 AM - 2:00 PM<br />
                Sunday: Closed
            </p>
        </div>

        <div class="box1" id="boxi">
            <footer>
                <p>&copy; 2023 Techno Utkarsh Club</p>
                <p>Em-41 Sector V, Bidhannagar, Kolkata</p>
            </footer>
            <div class="feedback">
                <button id="feedback-button">
                    <a href="feedback.html">Give Feedback</a>
                </button>
            </div>
        </div>
    </div>
</body>

</html>