<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/images/site.png" />
    <title>Canabss_</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="navbar-logo" src="assets/images/logo.png" alt="Canabss Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav text-uppercase ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about-me">About Me</a></li>
                        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="home" style="">
        <div class="container">
            <div class="col-lg-12">
                <div class="panel row justify-content-center">  
                    <img class="banner" data-aos="fade-right" src="assets/images/profile-me.png" alt="Profile Image">
                    <div class="button-container align-items-center text-center" data-aos="fade-left">
                        <p class="typed-text text-center align-items-center"><span class="hello">Hello!</span> I'm James Canaber <span class="wave">👋</span></p>
                        <p class="job-title">Developer</p>
                        <a href="downloadResume.php?file=assets/resume/james-canaber.pdf" class="download"><i class="fa fa-download"></i> Download Resume</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section id="about-me">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="left col-lg-6 d-flex justify-content-center" data-aos="fade-right">
                        <div class="autoplay slider">
                            <div class="about-image-container">
                                <img class="about-images" src="assets/images/about-1.jpg" alt="Profile Image">
                            </div>
                            <div class="about-image-container">
                                <img class="about-images" src="assets/images/about-2.jpg" alt="Profile Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <h1 class="title text-uppercase">About Me</h1>
                        <h4 class="description text-muted">Who I am</h4>
                        <div class="sentences">
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;I'm James Canaber from San Jose Del Monte, Bulacan. Graduate of Bachelor of Science in Information Technology with honor "Magna Cum Laude" at Bulacan State University. 
                                I'm capable in system designing, documentation, web and mobile development, and creating a responsive, easy to use, and user friendly applications. 
                            </p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;I'm also a follower and servant of Lord Jesus Christ. I'm engaged to the church ministry, as part of Multimedia Team and part of Christ Ambassador Youth Fellowship Council.</p>
                        </div>
                        <div class="about-buttons">
                            <a class="projects-button" href="#projects">View Projects</a>
                            <a class="contact-button" href="#contact">Contact Me</a>
                        </div>
                        <div class="social-media">
                            <div class="icon">
                                <a href="https://web.facebook.com/canaberjames.24" target="_blank"><i class="devicon-facebook-plain"></i></a>
                            </div>
                            <div class="icon">
                                <a href="https://www.instagram.com/canabss_/" target="_blank"><i class="fa fa-instagram"></i></a>   
                            </div>
                            <div class="icon">
                                <a href="https://twitter.com/Canabss_?t=xSLo6Ygal9SOhpHylfj0hQ&s=07" target="_blank"><i class="devicon-twitter-original"></i></a>
                            </div>
                            <div class="icon">
                                <a href="https://github.com/canabss" target="_blank"><i class="devicon-github-original"></i></a>
                            </div>
                            <div class="icon">
                                <a href="https://www.linkedin.com/in/james-canaber-409651243" target="_blank"><i class="devicon-linkedin-plain"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h1 class="title text-uppercase">Skills</h1>
                <h4 class="description text-muted">What I can use</h4>
            </div>
            <div class="col-lg-12" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">Front End Development</h5>
                                <h6 class="card-subtitle mb-3 text-muted  text-center">Scripts and Stylesheets</h6>
                                <div class="row  justify-content-center">
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" /> HTML5
                                    </div>
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" /> CSS3
                                    </div>
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" /> JavaScript
                                    </div>
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-plain.svg" /> jQuery
                                    </div>
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" /> Bootstrap
                                    </div>
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-plain.svg" /> Tailwind CSS
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title  text-center">Programming Languages</h5>
                                <h6 class="card-subtitle mb-3 text-muted  text-center">Coding Skills</h6>
                                <div class="row  justify-content-center">
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/c/c-plain.svg" /> <br>C
                                    </div>
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-plain.svg" /> C++
                                    </div>
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/csharp/csharp-plain.svg" /> C#
                                    </div>
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" /> Java
                                    </div>
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" /> PHP
                                    </div>
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg" /> MySQL<br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title  text-center">Others</h5>
                                <h6 class="card-subtitle mb-3 text-muted  text-center">Development Tools</h6>
                                <div class="row justify-content-center">
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-plain.svg" /> Git
                                    </div>
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" /> GitHub
                                    </div>
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" /> VSCode
                                    </div>
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/androidstudio/androidstudio-original-wordmark.svg" /> Android Studio
                                    </div>
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/photoshop/photoshop-line.svg" /> Photoshop
                                    </div>
                                    <div class="skills">
                                        <img class="skill-icons" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-plain.svg" /> WordPress
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <div data-aos="fade-up">
                <h1 class="title text-uppercase">Projects</h1>
                <h4 class="description text-muted">My recent projects</h4>
            </div>
            <div class="project-card" data-aos="fade-up">
                <div class="row">
                    <div class="project-left row justify-content-center">
                        <div class="image-container">
                            <img src="assets/images/1.png" alt="">
                        </div>
                    </div>
                    <div class="project-right">
                        <p class="project-title">Online Student Credential Requests System</p>
                        <div class="image-container">
                            <img src="assets/images/1.png" alt="">
                        </div>
                        <div class="project-role">Role: Lead Developer</div>
                        <div class="project-description"> &nbsp;&nbsp;&nbsp;&nbsp;A Web based system enables the campus Registrar and Clearance signatory offices to manage the requests and clearances of the students and alumni that notifies them with their requests' status or requested documents through email.</div>
                        <div class="project-tools d-flex">
                            <div class="row">
                                <p class="tool php"><i class="devicon-php-plain"></i> PHP</p>
                                <p class="tool html5"><i class="devicon-html5-plain"></i> HTML5</p>
                                <p class="tool css3"><i class="devicon-css3-plain"></i> CSS3</p>
                                <p class="tool bootstrap"><i class="devicon-bootstrap-plain"></i> Bootstrap</p>
                                <p class="tool javascript"><i class="devicon-javascript-plain"></i> JavaScript</p>
                                <p class="tool jquery"><i class="devicon-jquery-plain"></i> jQuery</p>
                                <p class="tool mysql"><i class="devicon-mysql-plain"></i> MySQL</p>
                                <p class="project-link"><a href="https://github.com/canabss/Online-Student-Credentials-Request-System" target="_blank"><i class="devicon-github-original"></i> Github Link</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="project-card" data-aos="fade-up">
                <div class="row">
                    <div class="project-left row justify-content-center">
                        <div class="image-container">
                            <img src="assets/images/2.png" alt="">
                        </div>
                    </div>
                    <div class="project-right">
                        <p class="project-title">Class Scheduling System</p>
                        <div class="image-container">
                            <img src="assets/images/2.png" alt="">
                        </div>
                        <div class="project-role">Role: Back-end Developer</div>
                        <p class="project-description"> &nbsp;&nbsp;&nbsp;&nbsp;A Web based system that can make, organize and produce class schedules for Bulacan State University - Sarmiento Campus that is accessible for both students and professors online.</p>
                        <div class="project-tools d-flex">
                            <div class="row">
                                <p class="tool php"><i class="devicon-php-plain"></i> PHP</p>
                                <p class="tool html5"><i class="devicon-html5-plain"></i> HTML5</p>
                                <p class="tool css3"><i class="devicon-css3-plain"></i> CSS3</p>
                                <p class="tool javascript"><i class="devicon-javascript-plain"></i> JavaScript</p>
                                <p class="tool jquery"><i class="devicon-jquery-plain"></i> jQuery</p>
                                <p class="tool mysql"><i class="devicon-mysql-plain"></i> MySQL</p>
                                <p class="project-link"><a href="https://github.com/canabss/Class-Scheduling-System" target="_blank"><i class="devicon-github-original"></i> Github Link</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more d-flex justify-content-center" data-aos="fade-up">
                <a href="projectList.php" class="show-more"> Show More...</a>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h1 class="title text-uppercase">Contact Me</h1>
                <h4 class="description text-muted">Get in touch with me</h4>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="contact-title">Let's talk!</div>
                        <div class="p-4">
                            <p class="contact-description">&nbsp;&nbsp;&nbsp;&nbsp; Need a responsive and user friendly web sites or web applications? Need a mobile app? Or just want to have a coffee with me? Contact me using this form and let's catch up!</p>
                            <div class="contact-heading">Location</div>
                            <p class="contact-value"><i class="fa fa-map-marker"></i> San Jose Del Monte, Bulacan</p>
                            <div class="contact-heading">Email Address</div>
                            <p class="contact-value"><a href="https://mail.google.com/mail/?view=cm&fs=1&to=jcanaber622@gmail.com" target="_blank"><i class="fa fa-envelope"></i> jcanaber622@gmail.com</a></p>
                        </div>
                        
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="form-container row">
                            <div class="contact-title pb-4 text-center">Write your message</div>
                            <form name="contact-form" action="sendEmail.php" method="post">
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label" for="first-name">First Name</label>
                                        <input class="form-control input" id="first-name" name="first-name" type="text" placeholder="First Name" value="<?php echo isset($_SESSION['firstname']) ? $_SESSION['firstname']:""?>" style="border-color: <?php echo isset($_SESSION['errors']['firstname']) ? "#d1001f": ""?>"/>
                                        <span class="errors"><?php echo isset($_SESSION['errors']['firstname']) ? $_SESSION['errors']['firstname']: ""?></span>
                                    </div>
                                    <div class="col">
                                        <label class="form-label" for="last-name">Last Name</label>
                                        <input class="form-control input" id="last-name" name="last-name" type="text" placeholder="Last Name" value="<?php echo isset($_SESSION['lastname']) ? $_SESSION['lastname']:""?>" style="border-color: <?php echo isset($_SESSION['errors']['lastname']) ? "#d1001f": ""?>"/>
                                        <span class="errors"><?php echo isset($_SESSION['errors']['lastname']) ? $_SESSION['errors']['lastname']: ""?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label" for="contact-no">Contact No.</label>
                                        <input class="form-control input" id="contact-no" name="contact-no" type="tel" placeholder="Contact No." value="<?php echo isset($_SESSION['contact']) ? $_SESSION['contact']:""?>" style="border-color: <?php echo isset($_SESSION['errors']['contact']) ? "#d1001f": ""?>"/>
                                        <span class="errors"><?php echo isset($_SESSION['errors']['contact']) ? $_SESSION['errors']['contact']: ""?></span>
                                    </div>
                                    <div class="col">
                                        <label class="form-label" for="email">Email</label>
                                        <input class="form-control input" id="email" name="email" type="email" placeholder="Email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email']:""?>" style="border-color: <?php echo isset($_SESSION['errors']['email']) ? "#d1001f": ""?>"/>
                                        <span class="errors"><?php echo isset($_SESSION['errors']['email']) ? $_SESSION['errors']['email']: ""?></span>
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label" for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Message" style="border-color: <?php echo isset($_SESSION['errors']['message']) ? "#d1001f": ""?>"><?php echo isset($_SESSION['message']) ? $_SESSION['message']:""?></textarea>
                                    <span class="errors"><?php echo isset($_SESSION['errors']['message']) ? $_SESSION['errors']['message']: ""?></span>
                                </div>
                                <div class="text-center">
                                    <button class="send" type="submit" name="send"><i class="fa fa-send"></i> Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <footer class="py-3 bg-dark">
        <div class="container">
            <div class="line d-flex flex-wrap justify-content-between align-items-center py-3">
                <div class="footer-logos d-flex align-items-center">
                    <a href="#home" class=" me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <img class="footer-logo" src="assets/images/logo.png" alt=""><br><br>
                    </a>
                </div>

                <div class="footer-pages">
                    <h5 class="text-center" style="color: #ffffff;">Pages</h5>
                    <ul class="footer-link nav justify-content-center">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about-me">About Me</a></li>
                        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-contacts">
                    <div class="footer-contact">
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=jcanaber622@gmail.com" target="_blank"><i class="fa fa-envelope"></i> jcanaber622@gmail.com</a>
                    </div>
                    <div class="footer-location">
                        <div><i class="fa fa-map-marker"></i> San Jose Del Monte, Bulacan</div>
                    </div>

                    <ul class="social-media nav list-unstyled d-flex">
                        <li class="">
                            <div class="icon">
                                <a href="https://web.facebook.com/canaberjames.24" target="_blank"><i class="devicon-facebook-plain"></i></a>
                            </div>
                        </li>
                        <li class="">
                            <div class="icon">
                                <a href="https://www.instagram.com/canabss_/" target="_blank"><i class="fa fa-instagram"></i></a>   
                            </div>
                        </li>
                        <li class="">
                            <div class="icon">
                                <a href="https://twitter.com/Canabss_?t=xSLo6Ygal9SOhpHylfj0hQ&s=07" target="_blank"><i class="devicon-twitter-original"></i></a>
                            </div>
                        </li>
                        <li class="">
                            <div class="icon">
                                <a href="https://github.com/canabss" target="_blank"><i class="devicon-github-original"></i></a>
                            </div>
                        </li>
                        <li class="">
                            <div class="icon">
                                <a href="https://www.linkedin.com/in/james-canaber-409651243" target="_blank"><i class="devicon-linkedin-plain"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="text-center text-white p-4">© Canabss_ (2022)</p>
        </div>
    </footer>
    
    
    <button onclick="topFunction()" id="button-top"><i class="fa fa-arrow-up"></i></button>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script> 

        $(document).ready(function(){
            $(window).scroll(function(){
                var scroll = $(window).scrollTop();
                if (scroll > 550) {
                    $(".navbar").css("background" , "#212529");
                    
                }

                else{
                    $(".navbar").css("background" , "none");  
                }
            });
        });

        AOS.init(); 

        let buttonTop = document.getElementById("button-top");
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                buttonTop.style.display = "block";
            } else {
                buttonTop.style.display = "none";
            }
        }
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        $('.autoplay').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
        });
    </script>
    <?php if(isset($_SESSION['send'])) :?>
        <?php if($_SESSION['send'] == true) :?>
            <script type='text/javascript'>
                Swal.fire({
                    icon: 'success',
                    title: 'Message sent!',
                    showConfirmButton: false,
                    timer: 2000
                });
            </script>
            <?php unset($_SESSION['send']);?>
        <?php else:?>
            <script type='text/javascript'>
                Swal.fire({
                    icon: 'error',
                    title: 'Failed to send message!',
                    confirmButtonColor: #212529,
                    showConfirmButton: true
                }).then((result) => {
                    if(result.isConfirmed){
                        <?php unset($_SESSION['send']);?>
                    }
                });
            </script>
        <?php endif;?>
    <?php endif;?>
</body>
</html>