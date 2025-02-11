<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Classroom Hub</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>
    <!--Hero Banner-->
    <section id="hero-banner">
        <div class="img">
    <img src="images/hero-banner-img.png" alt="Main Banner">
        </div>
        <div class="hero-text">
            <h1>Unlock Your Potential</h1>
            <p>Join thousands of learners upgrading their skills for free.</p>
            <button class="cta-btn">Get Started</button>
        </div>
    </section>
    <section id="features-section">
        <div class="container">
        <h2>Why Choose Us?</h2>
        <div class="features">
            <div class="feature">
                <h3>Expert Instructors</h3>
                <p>Learn from industry leaders with real-world experience.</p>
            </div>
            <div class="feature">
                <h3>100% Free Courses</h3>
                <p>Gain valuable skills without spending a dime.</p>
            </div>
            <div class="feature">
                <h3>Get Certified</h3>
                <p>Earn a certificate upon course completion.</p>
            </div>
        </div>
        </section>
        <section id="testimonials-section">
            <div class="testimonial">
            <p>“This platform changed my life! I landed a new job thanks to the courses offered here.”</p>
            <strong>- Alex R.</strong>
            </div>
            <div class="testimonial">
            <p>"I never thought online learning could be this effective. The courses are well-structured, and the
                 instructors explain everything clearly. I now feel confident in my coding skills!"</p>
            <strong>- Sarah M., Software Engineer</strong>
            </div>
            <div class="testimonial">
            <p>"The best part is that it's 100% free! The certificates helped me showcase my skills, and I even got a 
                promotion at work. Thank you!"</p>
            <strong>- David L., Digital Marketer</strong>
            </div>
        </section>
        <section>
        <div id="lead-Form">
            <h3>Sign Up for Free Courses</h3>
            <form action="subscribe.php" method="POST">
                <input type="text" name="name" placeholder="Enter your name" required>
                <input type="email" name="email" placeholder="Enter your email" required>
                <button class="cta-btn" type="submit">Sign Up</button>
            </form>
        </div>
        </section>
</body>
</html>