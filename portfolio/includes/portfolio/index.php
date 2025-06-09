<?php
require_once 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'includes/PHPMailer/src/Exception.php';
require 'includes/PHPMailer/src/PHPMailer.php';
require 'includes/PHPMailer/src/SMTP.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soniya Pawar | Portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="main-nav">
        <div class="nav-content">
            <a href="#home" class="logo">SP</a>
            <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Split Hero/About Section -->
    <section id="home" class="split-hero-section">
        <div class="split-left">
            <img src="your-photo.jpg" alt="Soniya Pawar" class="profile-pic">
            <h1>Soniya Pawar</h1>
            <h2>Web Developer</h2>
            <a href="#contact" class="email-btn">Contact me</a>
            <div class="social-icons">
                <a href="https://instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://linkedin.com/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="split-right">
            <h2 class="about-title">About Me</h2>
            <p class="about-text">
                I am a tech-savvy individual with a Bachelor's degree in Software Development, seeking employment as a mobile game developer. I am passionate about consistently advancing my knowledge and skills. I have attended multiple seminars and boot camps on coding and game development.
            </p>
            <div class="about-btns">
                <a href="resume.pdf" class="about-btn" target="_blank">Resume</a>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section">
        <div class="section-content">
            <h2 class="section-title">My Skills</h2>
            <div class="skills-grid">
                <div class="skill-item">
                    <i class="fab fa-python"></i>
                    <span>Python</span>
                    <div class="skill-level">
                        <div class="skill-progress" style="width: 85%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <i class="fas fa-code"></i>
                    <span>C/C++</span>
                    <div class="skill-level">
                        <div class="skill-progress" style="width: 80%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <i class="fas fa-database"></i>
                    <span>MySQL</span>
                    <div class="skill-level">
                        <div class="skill-progress" style="width: 75%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <i class="fab fa-html5"></i>
                    <span>HTML</span>
                    <div class="skill-level">
                        <div class="skill-progress" style="width: 90%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <div class="section-content">
            <h2 class="section-title">My Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/foodflow.jpg" alt="FOODFLOW Project">
                    </div>
                    <div class="project-info">
                        <h3>FOODFLOW</h3>
                        <p>Project focused on designing and implementing efficient food management practices. Developed using Wix, the platform is accessible and user-friendly.</p>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/student-achievement.jpg" alt="Student Achievement Website">
                    </div>
                    <div class="project-info">
                        <h3>Student Achievement Website</h3>
                        <p>Platform for students to post achievements and certifications. Faculty are supporting integration into the college's official website.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="section-content">
            <h2 class="section-title">Get in Touch</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <h3>Email</h3>
                        <p>pawarsoniya0209@gmail.com</p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <h3>Phone</h3>
                        <p>+91 9370123999</p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>Location</h3>
                        <p>Pune, Maharashtra, India</p>
                    </div>
                </div>
                <form class="contact-form" action="includes/process_contact.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; <?php echo date('Y'); ?> Soniya Sagar Pawar. All rights reserved.</p>
            <div class="social-icons">
                <a href="https://github.com/" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Active navigation link highlighting
        window.addEventListener('scroll', () => {
            let current = '';
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-links a');
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 60) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').substring(1) === current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html> 