<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Company Limited</title>
    <style>
        /* General Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }

        /* Navbar Styling */
        nav {
            background-color: #FFC107;
            padding: 1rem;
        }
        .navbar {
            display: flex;
            justify-content: center;
            list-style: none;
        }
        .navbar li {
            margin: 0;
        }
        .navbar a {
            color: #333;
            padding: 1rem;
            display: block;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s, color 0.3s;
        }
        .navbar a:hover {
            background-color: #FFD54F;
            color: #222;
        }

        /* Content Styling */
        .section {
            padding: 2rem;
            max-width: 1200px;
            margin: auto;
            text-align: center;
        }
        .section img {
            width: 100%;
            height: auto;
            max-width: 500px;
            margin: 10px;
        }

        /* Footer Styling */
        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 1.5rem 0;
            font-size: 0.9rem;
            margin-top: 2rem;
        }
        footer a {
            color: #FFC107;
            text-decoration: none;
        }
        footer a:hover {
            color: #FFD54F;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <ul class="navbar">
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=services">Services</a></li>
            <li><a href="index.php?page=projects">Projects</a></li>
            <li><a href="index.php?page=about">About Us</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Dynamic Content Section -->
    <?php
    // Check the page parameter to load the appropriate content
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        // Home Section
        if ($page == "home") {
            echo '
            <header class="section">
                <h1>Construction Company Limited</h1>
                <p></p>
            </header>
            <section class="section">
                
            <img src="images/contruction.jpeg" alt="Construction site">
                <img src="images/complete.jpeg" alt="Completed building">
                <img src="images/complete2.jpeg" alt="Construction site">
                <img src="images/complete1.jpeg" alt="Completed building">
                <p>Building quality projects on time and within budget.</p>
            </section>';
        }
        // Services Section
        elseif ($page == "services") {
            echo '
            <section class="section">
                <h2>Our Services</h2>
                <img src="images/residential.jpeg" alt="Residential Construction">
                <p>Residential Construction - We build homes that bring your vision to life.</p>
                <img src="images/commercial.jpeg" alt="Commercial Construction">
                <p>Commercial Construction - Reliable and efficient solutions for businesses.</p>
                <img src="images/industrial.jpeg" alt="Industrial Projects">
                <p>Industrial Projects - Comprehensive services from planning to execution.</p>
            </section>';
        }
        // Projects Section
        elseif ($page == "projects") {
            echo '
            <section class="section">
                <h2>Our Recent Projects</h2>
                <img src="images/skycraper.jpeg" alt="Skyscraper Building">
                <p>Skyscraper Building - Innovative design with precision engineering.</p>
                <img src="images/luxury.jpeg" alt="Luxury Apartments">
                <p>Luxury Apartments - Combining elegance with modern amenities.</p>
                <img src="images/office.jpeg" alt="Office Complex">
                <p>Office Complex - A hub of productivity and efficiency.</p>
            </section>';
        }
        // About Us Section
        elseif ($page == "about") {
            echo '
            <section class="section">
                <h2>About Us</h2>
                <img src="images/team.jpeg" alt="Our Team">
                <p>We are a premier construction company dedicated to quality and customer satisfaction. Our team of experts ensures every project meets the highest standards.</p>
            </section>';
        }
        // Contact Section every time you wanted response
        elseif ($page == "contact") {
            echo '
            <section class="section">
                <h2>Contact Us</h2>
                <img src="images/contact.jpeg" alt="Contact Us">
                <p>Email: abelkisang57@gmail.com | Phone: +254710899325</p>
                <form action="contact.php" method="POST" class="contact-form">
                    <input type="text" name="name" placeholder="Your Name" required><br><br>
                    <input type="email" name="email" placeholder="Your Email" required><br><br>
                    <textarea name="message" placeholder="Your Message" required></textarea><br><br>
                    <button type="submit">Send Message</button>
                </form>
            </section>';
        } else {
            echo '<section class="section"><p>Page not found.</p></section>';
        }
    } else {
        header("Location: index.php?page=home"); // Default to home page
    }
    ?>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Construction Company Limited. All rights reserved.</p>
        <p>Visit us on <a href="https://www.linkedin.com">LinkedIn</a> | <a href="https://www.facebook.com">Facebook</a> | <a href="https://www.twitter.com">Twitter</a></p>
    </footer>

</body>
</html>
