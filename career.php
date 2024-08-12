<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HillTell Network - Career </title>
    <link rel="stylesheet" href="css/career.css">
    <link rel="icon" href="/images/favicon.png" type="image/png">
</head>
<body>
<?php include 'inc/hed.php'?>
    <section class="hero">
        <div class="hero-content">
            <h1 class="h1class">CAREER WITH US</h1>
            <p>Do what you love…</p>
            <h2>COME AND JOIN WINNING TEAM</h2>
            <p>If you are a motivated individual, HillTell Network is the place for you. At HillTell Network we have a diverse, dedicated team of individuals who work hard, play hard and have fun. Our culture is built on teamwork and we always get the job done. Our talented group of Engineers, Technical Representatives, Customer Service, Sales and Support Teams are constantly challenged by management to use our creative minds to think outside of the box. We take pride in our work. Our devotion to constant improvement and our technology savvy team guides us in everything we do. The end result is a fast, reliable and cost effective service passed onto our customers. We invite you to explore career opportunities at HillTell Network and discover how you can achieve great success as part of a growing team of experts.</p>
            <p>If you are a professional seeking career opportunities in a rapidly growing market, we encourage you to submit your resume for consideration.</p>
        </div>
    </section>

    <section class="application-form">
        <form id="applicationForm" enctype="multipart/form-data">
            <h2>Send CV</h2>
            <p>Are you interested in being part of our excellent team?</p>
            
            <label for="firstName">First Name *</label>
            <input type="text" id="firstName" name="firstName" required><br>
            
            <label for="lastName">Last Name *</label>
            <input type="text" id="lastName" name="lastName" required><br>
            
            <label for="phone">Phone Number *</label>
            <input type="tel" id="phone" name="phone" required><br>
            
            <label for="email">Your Email Address *</label>
            <input type="email" id="email" name="email" required><br>
            
            <label for="applyingFor">Applying For</label>
            <input type="text" id="applyingFor" name="applyingFor"><br>
            
            <label for="message">Comment or Message *</label>
            <textarea id="message" name="message" required></textarea><br>
            
            <label for="resume">Upload Resume *</label>
            <input type="file" id="resume" name="resume" accept=".pdf, .doc, .docx" required><br>
            
            <button type="submit" >Apply</button>
        </form>
        <div id="form-message" class="form-message"></div>
    </section>

    <script>
        document.getElementById('applicationForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            var form = document.getElementById('applicationForm');
            var formData = new FormData(form);
            
            fetch('process_form.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Application submitted successfully.");
                    form.reset(); // Optional: Reset the form after successful submission
                } else {
                    alert("Error: " + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert("There was an error submitting your application. Please try again later.");
            });
        });
    </script>
    <?php include 'chatbot.php'?>
    <?php include 'inc/footer.php'?>
</body>
</html>
