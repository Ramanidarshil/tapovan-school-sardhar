<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tapovan School Sardhar</title>
    <link rel="stylesheet" href="assest/css/tapovan.css">
    <link rel="icon" type="image/jpeg" href="assest/img/logo.jpg">
</head>
<body>

    <nav class="navbar">
        <div class="container">
            <div class="logo">Tapovan School</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#academics">Academics</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#fees">Fees</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#login" >Student login</a></li>
            </ul>
        </div>
    </nav>

    <header id="home" class="hero-section">
        <div class="container">
            <h1>Nurturing Excellence, Rooted in Tradition.</h1>
            <p>Welcome to Tapovan School, Sardhar – Where every child's potential blossoms.</p>
            <a href="#contact" class="btn btn-primary">Admissions Open!</a>
        </div>
    </header>
<section class="about-section" id="about">
    <div class="container">

        <h2 class="section-title">About Tapovan School, Sardhar</h2>

        <div class="about-row">

            <!-- Text Content -->
            <div class="about-text">
                <p>
                    Tapovan School, Sardhar is dedicated to providing quality education 
                    rooted in discipline, values, and academic excellence. Our institution 
                    focuses on holistic development, ensuring students grow intellectually, 
                    socially, and morally.
                </p>

                <p>
                    With experienced faculty, modern teaching methods, and a supportive 
                    environment, we prepare students to face future challenges with 
                    confidence and leadership.
                </p>
            </div>

        

        </div>

    </div>
</section>

    <section id="academics" class="academics-section">
        <div class="container">
            <h2>Our Academics</h2>
            <div class="academic-grid">
                <div class="academic-item">
                    <h3>Curriculum</h3>
                    <p>A comprehensive curriculum designed to meet national standards while fostering creativity and critical thinking.</p>
                </div>
                <div class="academic-item">
                    <h3>Faculty</h3>
                    <p>Experienced and passionate educators dedicated to guiding students towards academic success.</p>
                </div>
                <div class="academic-item">
                    <h3>Facilities</h3>
                    <p>Modern classrooms, science labs, computer labs, and a well-stocked library to support learning.</p>
                </div>
            </div>
        </div>
    </section>

    
    <section id="gallery" class="video-gallery">
    <div class="gallery-grid">
        
       

        <div class="video-card">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/jaWMAoxajos?si=uBJZbBalfBiNPiFB" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video-info">
                <h3>Cultural Fest</h3>
               
            </div>
        </div>

       
            
        </div>
        
  
    </div>
</section>

    <section class="fees-section" id="fees">
    <h2>Fees Structure</h2>

    <div class="fees-grid">

        <div class="fees-card">
            <h3>Primary Section</h3>
            <ul>
                <li>
                    <span>Admission Fees</span>
                    <span class="fees-amount">₹3,000</span>
                </li>
                <li>
                    <span>Tuition Fees (Monthly)</span>
                    <span class="fees-amount">₹1,200</span>
                </li>
                <li>
                    <span>Exam Fees</span>
                    <span class="fees-amount">₹500</span>
                </li>
            </ul>
        </div>

        <div class="fees-card">
            <h3>Secondary Section</h3>
            <ul>
                <li>
                    <span>Admission Fees</span>
                    <span class="fees-amount">₹4,000</span>
                </li>
                <li>
                    <span>Tuition Fees (Monthly)</span>
                    <span class="fees-amount">₹1,800</span>
                </li>
                <li>
                    <span>Exam Fees</span>
                    <span class="fees-amount">₹700</span>
                </li>
            </ul>
        </div>

        <div class="fees-card">
            <h3>Higher Secondary</h3>
            <ul>
                <li>
                    <span>Admission Fees</span>
                    <span class="fees-amount">₹5,000</span>
                </li>
                <li>
                    <span>Tuition Fees (Monthly)</span>
                    <span class="fees-amount">₹2,500</span>
                </li>
                <li>
                    <span>Exam Fees</span>
                    <span class="fees-amount">₹1,000</span>
                </li>
            </ul>
        </div>

    </div>
</section>

    <section id="contact" class="contact-section">
        
        <div class="container">
            <h2>Contact Us</h2>
            <p>Have questions? Reach out to us!</p>
            <form class="contact-form" method="POST" action="insert.php">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea placeholder="Your Message" name="message" rows="5" required></textarea>
                <button type="submit" class="btn btn-secondary">Send Message</button>
            </form>
            <div class="contact-info">
                <p><strong>Address:</strong> Tapovan School, Sardhar, Gujarat</p>
                <p><strong>Phone:</strong> +91-XXX-XXXXXXX</p>
                <p><strong>Email:</strong> info@tapovanschoolsardhar.com</p>
            </div>
        </div>
    </section>

    <!-- LOGIN SECTION -->
<section id="login" class="login-section">
<div class="login-container">

<h2>School Login</h2>

<form method="POST" action="login.php">

    <input type="text" name="username" placeholder="Username" required>

    <input type="password" name="password" placeholder="Password" required>

    <select name="role" required>
        <option value="">Select Role</option>
        <option value="student">Student</option>
        <option value="principal">Principal</option>
    </select>

    <button type="submit">Login</button>

</form>

</div>




</section>

<footer class="footer-section">
    <div class="footer-content">
        <p>&copy; 2024 Tapovan School, Sardhar. All Rights Reserved.</p>
        
        <div class="footer-socials">
            <span>Follow Us: </span>
            <a href="https://www.facebook.com/Tapovan-school-sardhar" target="_blank" title="Facebook">
                <i class="fab fa-facebook-f"></i> Tapovan School - Sardhar
            </a>
            
            <span class="separator">|</span>

            <a href="https://www.instagram.com/tapovan2014" target="_blank" title="Instagram">
                <i class="fab fa-instagram"></i> @tapovan2014
            </a>
        </div>
    </div>
</footer>

    <script src="assest/js/tapovan.js"></script>
</body>
</html>
