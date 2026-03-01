<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to my portfolio!</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/grid.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/main.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script type="module" src="js/main.js"></script>
</head>

<body>
    <h1 class="hidden">Welcome to my portfolio!</h1>

    <header>
        <section class="grid-con">
            <h2 class="hidden">header</h2>

            <div class="col-span-4 m-col-span-4 l-col-span-4">
                <h2 class="header-name">Michael Kirs</h2>
            </div>

            <nav class="col-span-4 m-col-span-4 l-col-span-4 desktop-nav">
                <h2 class="hidden">desktop-nav</h2>
                <ul class="main-nav">
                    <li><a href="index.php#home">Home</a></li>
                    <li><a href="#about">About Me</a></li>
                    <li><a href="#projects">The Projects</a></li>
                    <li><a href="#contact">Contact Me</a></li>
                </ul>
            </nav>

            <!-- Social media links will be added after project evaluation. -->
            
            <div class="col-span-4 m-col-span-4 l-col-span-4">
                <div class="header-icons">
                    <h2 class="hidden">header-icons</h2>
                    <a href="#"><img src="images/linkedin.png" alt="LinkedIn"></a>
                    <a href="#"><img src="images/instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="images/youtube.png" alt="YouTube"></a>
                    <a href="https://github.com/Mikki667"><img src="images/github.png" alt="GitHub"></a>
                </div>
            </div>

            <button id="hamburger" class="mobile">&#9776;</button>

        </section>
    </header>

    <div id="menu" class="overlay">
        <h2 class="hidden">overlay</h2>
        <button id="close">&times;</button>

        <nav>
            <ul>
                <li><a href="index.php#home">Home</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#projects">The Projects</a></li>
                <li><a href="#contact">Contact Me</a></li>
            </ul>
        </nav>

        <div class="mobile-socials">

            <p>Follow me</p>

            <div class="social-icons-mobile">
                <a href="#"><img src="images/linkedin.png" alt="LinkedIn"></a>
                <a href="#"><img src="images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="images/youtube.png" alt="YouTube"></a>
                <a href="https://github.com/Mikki667"><img src="images/github.png" alt="GitHub"></a>
            </div>
        </div>
    </div>
    <main>
        <section id="home" class="intro">
            <h2 class="hidden">intro-video-section</h2>
            <div class="grid-con">
                <div class="col-span-full">
                    <hr class="line-separator">
                    <h2 class="intro-title">Kirs Mikhail - Designer and Web Developer!</h2>
                    <p class="intro-subtext">Welcome!</p>
                </div>

                <div class="col-span-full intro-video-wrap" id="player-container">
                    <video preload="metadata" poster="images/placeholder.jpg" class="intro-video">
                        <source src="video/video.mp4" type="video/mp4">
                        <source src="videos/final_demo_reel.webm" type="video/webm">
                        <p>You are using an older browser that does not support HTML5 Video. Please update your browser.
                        </p>
                    </video>

                    <div class="video-controls hidden" id="video-controls">
                        <button id="play-button">
                            <i class="fa fa-play"></i>
                        </button>

                        <button id="pause-button">
                            <i class="fa fa-pause"></i>
                        </button>

                        <button id="stop-button">
                            <i class="fa fa-stop"></i>
                        </button>

                        <button id="full-screen">
                            <i class="fa fa-expand"></i>
                        </button>

                        <i class="fa fa-volume-up"></i>
                        <input type="range" id="change-vol" step="0.05" min="0" max="1" value="1">

                    </div>
                </div>

                <div class="col-span-full">
                    <hr class="line-separator">
                </div>
            </div>
        </section>

        <section id="about" class="about-section">
            <h2 class="hidden">About</h2>
            <div class="grid-con about-wrapper">


                <div class="col-span-4 m-col-span-4 l-col-span-4 about-image-box">
                    <img src="images/image_of_me_1.png" class="about-img" alt="Photo of me">
                </div>


                <div class="col-span-8 m-col-span-8 l-col-span-8 about-text">

                    <p>Hello everyone! My name is Mikhail Kirs, and I'm a designer and web developer from Saint
                        Petersburg, Russia. In April 2026, I graduated from the Interactive Media Design program at
                        Fanshawe College in London, Canada, where I focused on front-end web development, HTML, CSS,
                        UI/UX design, website layout, and back-end fundamentals.</p>

                    <p>I consider myself a skilled and reliable specialist in both design and coding. My strongest area
                        is visual design, where I work confidently with tools such as Figma, Adobe Illustrator, and
                        Photoshop to create clean layouts, branding elements, and structured user interfaces. At the
                        same time, I build responsive websites using HTML, CSS, and JavaScript, always aiming for
                        organized code and smooth user experience.</p>

                    <p>During my education, I worked on multiple projects including a Couples Resort website redesign, a
                        Squeezit website project, and my personal portfolio website. These experiences helped me
                        strengthen my problem-solving skills, attention to detail, and ability to collaborate
                        effectively in team environments.</p>

                    <p>In addition to web development, I have experience in video editing and filming, along with basic
                        skills in 3D modeling using Cinema 4D. I also actively produce music using Ableton Live, which
                        has helped me develop a strong sense of creativity, structure, and discipline in my work.</p>

                    <p>Through hands-on work experience in construction assistance and childcare, I developed
                        responsibility, communication skills, and the ability to work efficiently within a team. If your
                        company is looking for a creative, motivated, and fresh-minded professional, I'd be excited to
                        bring my talents to your team.</p>
                </div>
            </div>
        </section>

        <section class="grid-con">
            <div class="col-span-full">
                <hr class="line-separator">
            </div>
        </section>

        <section id="skills" class="skills-section">
            <h2 class="hidden">Skills</h2>
            <div class="grid-con about-wrapper">

                <div class="col-span-full">
                    <h2 class="section-title">Skills</h2>
                </div>

                <div class="col-span-8 m-col-span-8 l-col-span-8 skills-text">
                    <p>During my studies at Fanshawe College, I gained a wide range of new skills and explored various
                        software tools.
                        My strongest area is design.</p>

                    <p>I have advanced knowledge of Adobe Illustrator, Figma, Adobe Photoshop, and I create professional
                        logos and posters.</p>

                    <p>I build websites using HTML, CSS, and JavaScript.</p>

                    <p>I am also highly skilled in Adobe Premiere Pro and have experience in Adobe After Effects.</p>

                    <p>I also have beginner knowledge of 3D modeling using Cinema 4D.</p>
                </div>

                <div class="col-span-4 m-col-span-4 l-col-span-4 skills-image-box">
                    <img src="images/image_of_me_2.png" class="about-img" alt="Photo">
                </div>

                <div class="col-span-full resume-button-wrap">
                    <a href="resume.html" class="resume-button">See My Resume</a>
                </div>

            </div>
        </section>

        <section id="projects" class="projects-section">
            <h2 class="hidden">The projects</h2>
            <div class="grid-con">

                <div class="col-span-full">
                    <hr class="line-separator">
                    <h2 class="section-title">The Projects</h2>
                </div>

                <div class="col-span-full project-grid">

                    <div class="project-item">
                        <div class="project-box">
                            <a href="project1.html"><img src="images/squeezit_hero.jpg" alt="Project 1"
                                    class="project-img"></a>
                        </div>
                        <p class="project-label">Squeezit Website</p>
                    </div>

                    <div class="project-item">
                        <div class="project-box">
                            <a href="project2.html"><img src="images/earbuds_hero.jpg" alt="Project 2"
                                    class="project-img"></a>
                        </div>
                        <p class="project-label">Earbuds Website</p>
                    </div>

                    <div class="project-item">
                        <div class="project-box">
                            <a href="project3.html"><img src="images/music_mixer_hero.jpg" alt="Project 3"
                                    class="project-img"></a>
                        </div>
                        <p class="project-label">Music Mixer</p>
                    </div>

                    <div class="project-item">
                        <div class="project-box">
                            <a href="project4.html"><img src="images/industry_night.png" alt="Project 4"
                                    class="project-img"></a>
                        </div>
                        <p class="project-label">Industry Night video</p>
                    </div>

                    <div class="project-item">
                        <div class="project-box">
                            <a href="project5.html"><img src="images/Kids_Channel_TV_Bumper.png" alt="Project 5"
                                    class="project-img"></a>
                        </div>
                        <p class="project-label">Kids Channel TV Bumper</p>
                    </div>

                    <div class="project-item">
                        <div class="project-box">
                            <a href="project6.html"><img src="images/kavorka2.png" alt="Project 6"
                                    class="project-img"></a>
                        </div>
                        <p class="project-label">Kovorka Makeup</p>
                    </div>

                </div>

            </div>
        </section>

        <section id="beats" class="beats-section">
            <h2 class="hidden">Music & Beats</h2>

            <div class="grid-con">

                <div class="col-span-full">
                    <hr class="line-separator">
                    <h2 class="section-title">Music & Production</h2>
                </div>

                <!-- Intro -->
                <div class="col-span-full beats-intro-box">
                    <div class="grid-con">

                        <div class="col-span-4 m-col-span-4 l-col-span-4 beats-photo-box">
                            <img src="images/guitar_hero.jpg" alt="Photo of me playing guitar" class="beats-photo">
                        </div>

                        <div class="col-span-8 m-col-span-8 l-col-span-8 beats-intro-text">

                            <h2 class="beats-intro-title">Inspired by KINO and The Beatles</h2>

                            <p>
                                In addition to Web Development I am on my way to become musician.
                                Ever since I was little, I felt a deep connection to music.
                                For a long time, I didn't believe I could actually become one,
                                but after discovering the Russian band <strong>KINO</strong> and being inspired by
                                <strong>The Beatles</strong> with their atmosphere and sound, I decided to seriously
                                begin my own journey.
                            </p>

                            <p>
                                I've been actively playing guitar for about two months and I'm making great progress.
                                At the same time, music production has become a major part of my creative work.
                            </p>

                            <p>
                                I create beats in <strong>Ableton Live</strong> across different genres, focusing on
                                mood, rhythm, and originality.
                                Beat creation is not just a hobby — it is a serious creative direction that I continue
                                developing every day.
                            </p>

                        </div>

                        <!-- Ableton Screenshot -->
                        <div class="col-span-full beats-work-box">
                            <img src="images/ableton.jpg" alt="Screenshot of my Ableton Live project"
                                class="beats-work-img">
                        </div>

                    </div>
                </div>

                <!-- The Beats -->
                <div class="col-span-full">
                    <h2 class="beats-grid-title">My Beats</h2>
                </div>

                <!-- Beat 1 -->
                <div class="col-span-full m-col-span-4 l-col-span-4 beat-card">
                    <h2 class="beat-title">Beat 1 / 135bpm</h2>

                    <audio controls class="beat-audio">
                        <source src="audio/beat1_135bpm.wav" type="audio/wav">
                    </audio>

                    <div class="beat-cover">
                        <img src="images/beat_1.png" alt="beat_1" class="beat-cover-img">
                    </div>
                </div>

                <!-- Beat 2 -->
                <div class="col-span-full m-col-span-4 l-col-span-4 beat-card">
                    <h2 class="beat-title">Beat 2 / 140bpm</h2>

                    <audio controls class="beat-audio">
                        <source src="audio/beat_2_140bpm.wav" type="audio/wav">
                    </audio>

                    <div class="beat-cover">
                        <img src="images/beat_2.png" alt="beat_2" class="beat-cover-img">
                    </div>
                </div>

                <!-- Beat 3 -->
                <div class="col-span-full m-col-span-4 l-col-span-4 beat-card">
                    <h2 class="beat-title">Beat 3 / 120bpm</h2>

                    <audio controls class="beat-audio">
                        <source src="audio/beat_3_120bpm.wav" type="audio/wav">
                    </audio>

                    <div class="beat-cover">
                        <img src="images/beat_3.png" alt="beat_3" class="beat-cover-img">
                    </div>
                </div>

            </div>
        </section>

        <div class="col-span-full">
            <hr class="line-separator">
        </div>

        <div id="contact" class="contact-content">
            <h2 class="hidden">Contact form!</h2>
            <?php
                // I check if a status was passed in the URL after form submission.
                if (isset($_GET["status"])) 
                    {
                        if ($_GET["status"] === "success") {
                            echo "<p>Your message was sent. Thank you!</p>";
                        }

                        if ($_GET["status"] === "empty") {
                            echo "<p>Please fill in all fields.</p>";
                        }

                        if ($_GET["status"] === "bademail") {
                            echo "<p>Please enter a valid email.</p>";
                        }
                    }
            ?>
            <form class="grid-con contact-box" method="post" action="includes/contact-process.php">
                <h2 class="col-span-full m-col-span-12 l-col-span-12 xl-col-span-12">Contact Us</h2>

                <label for="name" class="col-span-full m-col-span-12 l-col-span-6 xl-col-span-4">Name:</label>
                <input type="text" id="name" name="name" required
                    class="col-span-full m-col-span-12 l-col-span-12 xl-col-span-12" />

                <label for="email" class="col-span-full m-col-span-12 l-col-span-6 xl-col-span-4">Email:</label>
                <input type="email" id="email" name="email" required
                    class="col-span-full m-col-span-12 l-col-span-12 xl-col-span-12" />

                <label for="message" class="col-span-full m-col-span-12 l-col-span-12 xl-col-span-12">Message:</label>
                <textarea id="message" name="message" rows="5" required
                    class="col-span-full m-col-span-12 l-col-span-12 xl-col-span-12"></textarea>

                <button type="submit" class="col-span-full m-col-span-12 l-col-span-12 xl-col-span-12">Send
                    Message</button>
            </form>
        </div>

        <div class="col-span-full">
            <hr class="line-separator">
        </div>

        <section class="contact-extra">

            <h2 class="hidden">social media</h2>

            <div class="social-section">
                <h3>My social media</h3>

                <div class="social-row">
                    <a href="#"><img src="images/linkedin.png" class="social-icon" alt="LinkedIn"></a>
                    <a href="#"><img src="images/instagram.png" class="social-icon" alt="Instagram"></a>
                    <a href="#"><img src="images/youtube.png" class="social-icon" alt="YouTube"></a>
                    <a href="https://github.com/Mikki667/Kirs_Mikhail_FIP"><img src="images/github.png" class="social-icon" alt="GitHub"></a>
                </div>
            </div>

            <div class="col-span-full">
                <hr class="line-separator">
            </div>

            <div class="github-section">
                <h3>My GitHub</h3>
                <a href="https://github.com/Mikki667"><button class="github-btn">Click Here!</button></a>
            </div>

            <div class="col-span-full">
                <hr class="line-separator">
            </div>

        </section>
    </main>
    <footer class="footer">
        <section class="grid-con">
            <h2 class="hidden">footer</h2>

            <div class="col-span-4 m-col-span-4 l-col-span-4"></div>
            <div class="col-span-4 m-col-span-4 l-col-span-4 footer_div_1">
                <p class="footer-name">Michael Kirs</p>
            </div>

            <div class="col-span-4 m-col-span-4 l-col-span-4 footer_div_2">
                <a href="#"><img src="images/linkedin.png" class="footer-icon"></a>
                <a href="#"><img src="images/instagram.png" class="footer-icon"></a>
                <a href="#"><img src="images/youtube.png" class="footer-icon"></a>
                <a href="https://github.com/Mikki667"><img src="images/github.png" class="footer-icon"></a>
            </div>

        </section>
    </footer>
</body>

</html>