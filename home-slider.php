<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" slider-content="width=device-width, initial-scale=1.0">
    <title>HillTel</title>
    <link rel="stylesheet" href="/css/home-slider.css">
    <link rel="stylesheet" href="/css/contact.css">
    <style>
        #contactForm {
            display: none; 
            position: fixed; 
            z-index: 1000; 
            left: 0; 
            top: 0; 
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgba(0, 0, 0, 0.4); 
            padding-top: 60px;
        }

        #bookingForm {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 40%; /* Reduced width to fit the content better */
            background-image: url('/images/contact2.png');
            border-radius: 15px; /* Rounded corners for the box */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        h3 {
            text-align: center;
            font-size: 28px; /* Larger font size for the heading */
            font-weight: bold; /* Make the heading bolder */
            margin-bottom: 20px;
            color: #333; /* Darker color for the heading */
        }

        .contact-form {
            display: flex;
            flex-direction: column;
        }

        .contact-form label {
            margin-bottom: 5px;
        }

        .contact-form input, 
        .contact-form select, 
        .contact-form textarea, 
        .contact-form button {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 10px; /* Rounded corners for the form elements */
            border: 1px solid #ccc;
            width: 100%;
            box-sizing: border-box;
        }

        .contact-form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #45a049;
        }

        /* Media Queries for Tablet */
@media (max-width: 1024px) {
    .slide .slider-content {
        width: 80% !important;
        padding: 50px;
    }

    .slide .slider-content h2 {
        font-size: 50px;
    }

    .slide .slider-content p {
        font-size: 20px !important;
    }
}

/* Media Queries for Mobile */
@media (max-width: 768px) {
    .slide .slider-content {
        width: 80% !important;
        padding: 30px;
        border-left: 10px solid white;
        border-bottom: 10px solid white;
    }

    .slide .slider-content h2 {
        font-size: 32px;
    }

    .slide .slider-content p {
        font-size: 18px !important;
    }
}

@media (max-width: 480px) {
    .slide .slider-content {
        width: 80% !important;
        padding: 20px;
        border-left: 5px solid white;
        border-bottom: 5px solid white;
    }

    .slide .slider-content h2 {
        font-size: 24px;
    }

    .slide .slider-content p {
        font-size: 14px !important;
    }
}

    </style>
    <script>
        function showContactForm() {
            document.getElementById('contactForm').style.display = 'block';
        }

        function hideContactForm() {
            document.getElementById('contactForm').style.display = 'none';
        }

        function validateForm() {
            const form = document.getElementById('queryForm');
            const formData = new FormData(form);

            fetch('submit_form.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
                form.reset(); // Clear the form fields
            })
            .catch(error => console.error('Error:', error));
            
            return false; // Prevent default form submission
        }
    </script>
</head>
<body>
    <div class="slider-section">
        <div class="slideshow-container" id="slideshow-container">
            <div class="slide">
                <div class="slider-image-container">
                    <img src="/images/hero.jpg" alt="Service 1">
                </div>
                <div class="slider-content" style="width:900px">
                    <h2>Welcome to HillTel Network</h2>
                    <p style="font-size:25px">At HillTel Network, we're not just a Telecom company, we're your trusted partner in navigating the digital landscape. We specialize in providing high-quality and comprehensive suite of IT services to enterprises as well as individuals.

Welcome aboard, and let's navigate the digital world together.
Connecting Your World with Precision and Excellence</p>
                </div>
            </div>
            <!-- <div class="slide">
                <div class="slider-image-container">
                    <img src="/images/ILL.jpg" alt="Service 1">
                </div>
                <div class="slider-content">
                    <h2>Internet Leased Line</h2>
                    <p>Expressway to the Internet</p>
                    <div class="slider-button-container">
                        <button class="button" onclick="location.href='ILL.php'">Learn More</button>
                        <button class="button" onclick="showContactForm()">Book Now</button>
                    </div>
                </div>
            </div> -->
            <div class="slide">
                <div class="slider-image-container">
                    <img src="/images/s2.jpg" alt="Service 2">
                </div>
                <div class="slider-content">
                    <h2>Manage Wi-Fi</h2>
                    <p>Experience Wi-Fi excellence</p>
                    <div class="slider-button-container">
                        <button class="button" onclick="location.href='wifi.php'">Learn More</button>
                        <button class="button" onclick="showContactForm()">Book Now</button>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slider-image-container">
                    <img src="/images/s3.jpg" alt="Service 3">
                </div>
                <div class="slider-content">
                    <h2>MPLS VPN</h2>
                    <p>Efficient connectivity, enhanced performance</p>
                    <div class="slider-button-container">
                        <button class="button" onclick="location.href='MPLS.php'">Learn More</button>
                        <button class="button" onclick="showContactForm()">Book Now</button>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slider-image-container">
                    <img src="/images/s4.avif" alt="Service 4">
                </div>
                <div class="slider-content">
                    <h2>Point to Point & Multipoint Connectivity</h2>
                    <p>Seamless and secure direct connectivity</p>
                    <div class="slider-button-container">
                        <button class="button" onclick="location.href='P2P.php'">Learn More</button>
                        <button class="button" onclick="showContactForm()">Book Now</button>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slider-image-container">
                    <img src="/images/s5.jpg" alt="Service 5">
                </div>
                <div class="slider-content">
                    <h2>IP Class One Service</h2>
                    <p>The ultimate solution for businesses </p>
                    <div class="slider-button-container">
                        <button class="button" onclick="location.href='iP Class.php'">Learn More</button>
                        <button class="button" onclick="showContactForm()">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add the previous and next buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <div id="contactForm">
        <div id="bookingForm">
            <span class="close" onclick="hideContactForm()">&times;</span>
            <form id="queryForm" class="contact-form" onsubmit="return validateForm()">
                <h3>Your Details</h3>
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">E-Mail:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
                
                <label for="service">Select:</label>
                <select id="service" name="service" required>
                    <option value="Default Select Example">Default Select Example</option>
                    <option value="broadband">Broadband Connection</option>
                    <option value="wifi">Wi-Fi Internet</option>
                    <option value="Satellite TV box">Satellite TV box</option>
                    <option value="Netflix TV Box">Netflix TV Box</option>
                    <option value="Mobile Connection">Mobile Connection</option>
                </select>
                
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="/js/slider.js"></script>
</body>
</html>