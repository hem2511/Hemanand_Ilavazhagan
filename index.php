<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/Untitled-2.png" type="image/x-icon">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Hem-portfolio</title>
    <script src="https://kit.fontawesome.com/3fe6965435.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="images/Untitled-2.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Service</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
                <i class="fas fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <p>Front-End Developer</p>
                <h1>Hi, I'm <span>Hemanand</span><br> From Chennai</h1>
            </div>
        </div>
    </div>



    <!------------------------about-------------------------------->
    
    
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="images/user.png">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p>Hi, I'm Hemanand. I’m a Front-End Developer located in Chennai. I have a serious passion for UI effects, animations and creating intuitive, dynamic user experiences. Well-organised person, problem solver, independent employee with high attention to detail,macro photogrphy , TV series.Interested in the entire frontend spectrum and working on ambitious projects with positive people. </p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            
                            <li><span>Web Development</span></li>
                            <li><span>Java</span></li>
                            <li><span>UI/UX</span></li>
                            <li><span>React js</span></li>
                            <li><span>PHP</span></li>

                            
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>2019-2021</span><br>Diploma from Panimalar polytechnic</li>
                            <li><span>2021-Current</span><br>B.E from Rajalakshmi Engineering Collage</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!----------------------services------------------------>

    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
            <p class="sub-2">What i can offer</p>
            <div class="services-list">
                <div>
                    <i class="fa-brands fa-html5"></i>
                    <h2>web designer</h2>
                    <p>What separates design from art is that design is meant to be... functional.</p>
                    <a href="#services">Learn more</a>
                </div>
                <div>
                    <i class="fa-brands fa-figma"></i>
                    <h2>UI/UX designer</h2>
                    <p>UI is the saddle, the stirrups, & the reins. UX is the feeling you get being able to ride the horse.</p>
                    <a href="#services">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>App designer</h2>
                    <p>Design is not just how it works like or feels. Design is how it works</p>
                    <a href="#services">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    <!----------------------potfolio-------------------------->

    <div id="portfolio">
        <div class="container">
            <hi class="sub-title">My Work</hi>
            <div class="work-list">
                <div class="work">
                    <img src="images/work-1.png">
                    <div class="layer">
                        <h3>Social Media App</h3>
                        <p>The app connect you to the talented people around the world. Download it from play store.</p>
                        <a href="#portfolio"><i class="fa-solid fa-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/work-2.png">
                    <div class="layer">
                        <h3>Music App</h3>
                        <p>The app connect you to the talented people around the world. Download it from play store.</p>
                        <a href="#portfolio"><i class="fa-solid fa-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/work-3.png">
                    <div class="layer">
                        <h3>Online Shopping App</h3>
                        <p>The app connect you to the talented people around the world. Download it from play store.</p>
                        <a href="#portfolio"><i class="fa-solid fa-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>
            <a href="#portfolio" class="btn" aria-disabled="true">see more</a>
        </div>
    </div>
    <!-----------------------contact------------------------->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fa-sharp fa-solid fa-paper-plane"></i>hemanand002@gmail.com</p>
                    <p><i class="fa-solid fa-square-phone"></i>+91 7358310225</p>
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/in/hemanand-ilavazhagan/"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://github.com/hem2511"><i class="fa-brands fa-github"></i></a>
                        <a href="https://www.facebook.com/hem.unusal.716/"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/__its_hem__/"><i class="fa-brands fa-instagram"></i></a>
                        
                    </div>
                    <a href="images/my-cv.pdf" download class="btn btn2 ">Download CV</a>
                </div>
                <div class="contact-right">
                    <form name="submit-to-google-sheet" action="" method="post">
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="Email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" name="submit" class="btn btn2">Submit</button>
                    </form>
                    <span id="msg"></span>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright ©. All rights resevered</p>
        </div>
    </div>

    <?php
        if(isset($_POST['submit'])){
            include_once 'function.php';
            $obj=new Contact();
            $res=$obj->contact_us($_POST);
            if($res==true){
                echo "<script>alert('Query successfully submitted. Thank you')</script>";
            }else{
                echo"<script>alert('Something went wrong!!')";
            }
        }
    ?>
    
    <!------------------------script------------------------->
    
    
    <script>

        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");
        function opentab(tabname){
            for(tablink of tablinks){
                tablink.classList.remove("active-link");
            }

            for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
    </script>
    


    <script>

        var sidemeu = document.getElementById("sidemenu");

        function openmenu(){
            sidemeu.style.right = "0";
        }
        function closemenu(){
            sidemeu.style.right = "-200px";
        }

    </script>

    
    <!--<script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbywaLIy8DiceKNSFjMqPr1WNYabp_MVY7X6hKM7qBLQ9DzHa007ESsh2EtDPH_JG2fdnQ/exec'
        const form = document.forms['submit-to-google-sheet']
        const msg = document.getElementById("msg")
      
        form.addEventListener('submit', e => {
          e.preventDefault()
          fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => {
                msg.innerHTML = "Message sent successfully"
                setTimeout(function(){
                    msg.innerHTML = ""
                },5000)
                form.reset()
            })
            .catch(error => console.error('Error!', error.message))
        })
      </script>-->
</body>
</html>