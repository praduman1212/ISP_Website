<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilltell Network - IP Class One Service</title>
    <link rel="stylesheet" href="/css/IP.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="/images/favicon.png" type="image/png">
    <style>
    .header-image {
        position: relative;
        text-align: center;
        color: white;
        font-size: 30px;
        height: 100vh;
        background: url('/images/IP1.jpg') no-repeat center center/cover;
    }

    /* Media Queries for Mobile Responsiveness */
    @media (max-width: 768px) {
        .header-image {
            font-size: 24px; /* Smaller font size for tablets */
            height: 50vh; /* Adjust height for tablets */
        }
    }

    @media (max-width: 480px) {
        .header-image {
            font-size: 18px; /* Smaller font size for mobile phones */
            height: 50vh; /* Adjust height for mobile phones */
        }
    }
</style>

</head>
<body>
<?php include 'inc/hed.php'?>
    <div class="header-image">
        <h1>IP Class One Service<br>The ultimate solution for businesses</h1>
    </div>
    <div class="hero">
        <div class="hero-content">
            <h1>IP Class One Service</h1>
            <p>Our IP Class One (IP-1) Service is the ultimate solution for businesses seeking top-tier IP
                management and protection. Designed to meet the highest standards of reliability and efficiency,
                this service ensures your intellectual property is expertly classified, managed, and safeguarded. Trust
                our experienced team to provide comprehensive support tailored to your unique IP needs.</p>
        </div>
        <div class="image">
            <img src="/images/IP2.jpg" alt="SMART CITY PROJECTS">
        </div>
    </div>
    <section class="content">
        <div class="container">
            <h2>Key Benefits</h2>
            <p>Redefining Connectivity for Unmatched Performance and Reliability</p>
            <div class="service-info">
                <div class="service">
                    <h3>Expert Classification</h3>
                    <p>Benefit from precise and accurate classification of your intellectual property by
                        our team of experts, ensuring optimal organization and protection.</p>
                </div>
                <div class="service">
                    <h3>Advanced Protection</h3>
                    <p>Leverage state-of-the-art security measures to protect your IP from
                        infringement, theft, and unauthorized use.</p>
                </div>
                <div class="service">
                    <h3>Comprehensive Analysis</h3>
                    <p> Receive detailed analysis reports that offer insights into your IP portfolio,
                        highlighting areas for improvement and potential opportunities.onduct meetings and collaborations in high definition.</p>
                </div>
                <div class="service">
                    <h3>Custom Reporting</h3>
                    <p> Access customized reports that provide actionable insights and strategic
                        recommendations for managing your IP assets.</p>
                </div>
                <div class="service">
                    <h3>Regulatory Compliance</h3>
                    <p>Ensure your IP practices comply with all relevant laws and regulations,
                        minimizing legal risks and enhancing your compliance posture.</p>
                </div>
                <div class="service">
                    <h3>Dedicated Support</h3>
                    <p> Enjoy priority access to our dedicated team of IP professionals who are available
                        to assist you with any queries or issues.</p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'why-choose-us.php' ?>
    <?php include 'chatbot.php'?>
    <?php include 'inc/footer.php'?>
</body>
</html>