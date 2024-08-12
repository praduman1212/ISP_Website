<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="icon" href="/images/favicon.png" type="image/png">
    <script>
        function showPopup(message) {
            alert(message);
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
                showPopup(data);
                form.reset(); // Clear the form fields
            })
            .catch(error => console.error('Error:', error));
            
            return false; // Prevent default form submission
        }
    </script>
</head>
<body>
    <?php include 'inc/hed.php'?>

    <div class="container">
        <div class="content">
            <h1>24X7 CONSUMER SERVICES</h1>
            <p>Hilltell Network has a dedicated call center for query and complaint registration.
                Call us today +91 9068514888 and speak to our Customer Service executive to know more about our services. 24×7 Support on call or submit your requirements online.</p>
        </div>
        <div class="image">
            <img src="/images/contact1.png" alt="Contact Us Image">
        </div>
    </div>

    <div class="form-container">
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

    <div class="additional-info">
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.6942552950375!2d77.07680701509652!3d30.375397481760066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39092923f8bc1b67%3A0xa0d2646f4ec441f4!2sDoon%20IT%20Park!5e0!3m2!1sen!2sin!4v1623304191928!5m2!1sen!2sin" 
                width="900" 
                height="500" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
            <button onclick="openModal()">View Larger Map</button>
        </div>
        <br>
        <div class="direct-contact">
            <h4>Direct Contact</h4>
            <p>+91-8755440086</p>
            <p><a href="mailto:hilltellnetworkinfrastructure@gmail.com">hilltellnetworkinfrastructure@gmail.com</a></p>
            <p>6B, IT Park, Sahastradhara Rd, Doon IT Park, <br>U.K, Aman Vihar, Dehradun, Uttarakhand 248001</p>
        </div>
    </div>
    <?php include 'chatbot.php'?>
    <?php include 'inc/footer.php'?>
    <script src="js/script.js"></script>
</body>
</html>
