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
                    <p>Hi there! I'm a versatile web developer fueled by a passion for creating engaging digital experiences. With a strong focus on React, I thrive on transforming ideas into user-friendly interfaces that make a lasting impact. I'm dedicated to continuous learning, staying ahead of industry trends, and collaborating with teams to deliver innovative solutions. Beyond coding, I enjoy exploring design trends, staying active in the developer community, and finding inspiration in the world around me. </p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <div class="head">Language</div>
                        <ul>
                            <li><span>Java</span></li>
                            <li><span>HTML</span></li>
                            <li><span>CSS</span></li>
                            <li><span>JavaScript</span></li>
                            <li><span>PHP</span></li>
                            <li><span>C</span></li>

                        </ul>
                        <div class="head">Front-End</div>
                        <ul>
                            <li><span>React Js</span></li>
                            <li><span>BootStrap</span></li>
                            <li><span>Tailwind</span></li>
                        </ul>
                        <div class="head ">Technologies</div>
                        <ul>
                            <li><span>Figma</span></li>
                            <li><span>UiPath</span></li>
                            <li><span>Google DevTools</span></li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul class="edu">
                            <li>2021-Current<br><span>Bachelor's in Computer Science Engineering<br>Rajalakshmi Engineering Collage</span></li>
                            <li>2019-2021<br><span>Diploma in Computer Science Engineering<br>Panimalar polytechnic college</span></li>
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
                    <h2>Web Developer</h2>
                    <p>Elevating web experiences through React expertise, weaving together interactivity and performance to create seamless and engaging user interfaces that leave a lasting impression.</p>
                    
                </div>
                <div>
                    <i class="fa-brands fa-java"></i>
                    <h2>Java Developer</h2>
                    <p>Fostering innovation and reliability in Java development, crafting robust solutions that empower businesses to thrive in a dynamic digital landscape.</p>
                    
                </div>
                <div>
                    <i class="fa-brands fa-figma"></i>
                    <h2>Web Designer</h2>
                    <p>Designing captivating web experiences with Figma, where creativity meets functionality to bring visions to life in pixel-perfect detail.</p>
                    
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