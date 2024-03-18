

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashesi Lost and Found</title>
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta:wght@400;700&family=Gamja+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <div class="content">
        <div class="header">
            <div class="user-actions">
                <div class="dropdown">
                    <button class="show-sidebar-button">
                        <img src="../images/logo.png" alt="Logo" class="lost-logo"> 
                    </button>
                    <div class="dropdown-content">
                        <a href="missing-items.php">Missing Items</a>
                        <a href="settings.php">Settings</a>                    
                        <a href="contact.php">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="ashesi-logo-container">
            <img src="../images/ashesi-logo.jpg" alt="ashesi-logo" class="ashesi-logo">
        </div>
        <div class="welcome-message">
            Welcome to the Ashesi Lost and Found Service
        </div>
    <div class="description">
        Lost something on campus? Found an item and looking to return it? You've come to the right place.
        Our Lost and Found service is dedicated to reuniting lost items with their rightful owners.
        Explore, report, and recover items with ease.
    </div>
    <h3>Recently Posted</h3>
    <div class="featured-items">
        <div class="featured-item">
        <img src="../images/apple.jpg" alt="Apple Pencil">
        </div>
        <div class="featured-item">
        <img src="../images/beats.webp" alt="Beats Studio Pro">
        </div>
        <div class="featured-item">
        <img src="../images/casio.jpg" alt="Casio fxe345 Calculator">
        </div>
        <div class="featured-item">
            <img src="../images/boots.webp" alt="Football boots">
        </div>
        <div class="featured-item">
            <img src="../images/bag.webp" alt="Handbag">
        </div>
        <!-- Add more items here -->
    </div>
    <div class="featured-items-nav">
        <button class="featured-items-nav-btn" onclick="scrollFeaturedItems(-1)">&#10094;</button>
        <div class="featured-items-nav-inner"></div>
        <button class="featured-items-nav-btn" onclick="scrollFeaturedItems(1)"">&#10095;</button>
    </div>
    <h3>Testimonials</h3>
    <div class="testimonials">
        <div class="testimonial-item">
            <img src="../images\ellen.avif" alt="Profile picture">
            <span class="name">Bridget Kenningworth</span>
            <p>"This Lost and Found service is amazing! I found my missing wallet and they helped me get it back quickly. Thank you!"</p>
        </div>
        <div class="testimonial-item">
            <img src="../images\no-user.webp" alt="Profile picture">
            <span class="name">Ivan</span>
            <p>"Thanks to the Lost and Found service, I was able to recover my backpack. Incredible service! - Y"</p>
        </div>
        <div class="testimonial-item">
            <img src="../images\no-user.webp" alt="Profile picture">
            <span class="name">Keith</span>
        <p>"Found a watch at the Ashpitch and returned it through the website. Happy to help!"</p>
        </div>
        
    </div>
    <div class="testimonials-nav">
        <button class="testimonials-nav-btn" onclick="scrollTestimonials(-1)">&#10094;</button>
        <div class="testimonials-nav-inner"></div>
        <button class="testimonials-nav-btn" onclick="scrollTestimonials(1)">&#10095;</button>
        
    </div>
</div>
<script>
    // Selecting the signup button element and adding event listener to redirect to signup page on click
    const signupButton = document.querySelector('#signup-button');  
    signupButton.addEventListener('click', () => {
    window.location.href = 'signup.php';
    });
    
// Selecting the login button element and adding event listener to redirect to signin page on click
    const loginButton = document.querySelector('#login-button');
        loginButton.addEventListener('click', () => {
        window.location.href = 'signin.php';
    });
    // Function to scroll testimonials horizontally based on direction
    function scrollTestimonials(direction) {
        const testimonials = document.querySelector('.testimonials');
        const itemWidth = testimonials.firstElementChild.offsetWidth;
        const currentScrollLeft = testimonials.scrollLeft;
        testimonials.scrollLeft = currentScrollLeft + (itemWidth * direction);
    }
    // function to scroll featured items horizontally based on direction
    function scrollFeaturedItems(direction) {
        const featuredItems = document.querySelector('.featured-items')
        const itemWidth = featuredItems.firstElementChild.offsetWidth;
        const currentScrollLeft = featuredItems.scrollLeft;
        featuredItems.scrollLeft = currentScrollLeft + (itemWidth * direction);
    }
</script>
</body>
</html>
