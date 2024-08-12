<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Tiles</title>
    <style>
        /* New Services Section */
        .new-services-section {
            background: url('/images/tiles.avif') no-repeat center center; /* Add your image path */
            background-size: cover;
            padding: 60px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 95%;
            margin: 30px auto; /* Centered horizontally */
            position: relative; /* Ensure positioning context for child elements */
        }

        .new-services-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 1800px;
            width: 100%;
        }

        .service-banner-box {
            background-color: #ffffff;
            border: 1px solid #c5b9e8; /* Light purple border */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
            flex: 1 1 calc(20% - 40px); /* Two boxes per row */
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer; /* Indicate that the div is clickable */
            max-width: 800px;
            height: auto;
        }

        .service-banner-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .service-banner-box img {
            width: 80px;
            height: auto;
            margin-bottom: 20px;
            transition: transform 0.3s ease-in-out;
        }

        .service-banner-box img:hover {
            transform: scale(1.1);
        }

        .service-banner-box h2 {
            font-size: 1.9em;
            color: #003636; /* Purple */
            margin-bottom: 15px;
        }

        .service-banner-box p {
            font-size: 1em;
            color: #555;
            margin-bottom: 20px;
        }

        .service-banner-box a {
            color: #003636;
            text-decoration: none;
            font-weight: bold;
        }

        .service-banner-box a:hover {
            text-decoration: underline;
        }

        .button-container {
            display: flex;
            gap: 10px;
            width: 100%;
            flex-direction: column;
        }

        .button {
            padding: 10px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            text-align: center;
            margin-top: 10px;
        }

        .learn-more {
            background-color: #949698;
            color: #000000;
        }

        .learn-more:hover {
            background-color: #a2a4a7;
        }

        .book-now {
            background-color: #396358;
            color: #fff;
        }

        .book-now:hover {
            background-color: #255e4f;
        }

        /* Ensure equal height for all service boxes */
        .new-services-container {
            display: flex;
            flex-wrap: wrap;
        }

        .new-services-container {
            display: flex;
            flex-direction: row;
            flex: 1 1 100%;
        }

        @media (max-width: 1024px) {
            .new-services-container {
                flex-direction: column;
                align-items: center;
            }

            .service-banner-box {
                flex: 1 1 100%;
                max-width: none;
                margin: 10px 0;
                height: auto;
            }

            .button {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .new-services-section {
                padding: 40px 10px;
            }

            .service-banner-box {
                flex: 1 1 100%;
                max-width: none;
                margin: 10px 0;
                padding: 15px;
            }

            .service-banner-box h2 {
                font-size: 1.5em;
            }

            .service-banner-box p {
                font-size: 0.9em;
            }
        }

        @media (max-width: 480px) {
            .new-services-section {
                padding: 20px 10px;
            }

            .service-banner-box {
                flex: 1 1 100%;
                max-width: none;
                margin: 10px 0;
                padding: 10px;
            }

            .service-banner-box h2 {
                font-size: 1.2em;
            }

            .service-banner-box p {
                font-size: 0.8em;
            }

            .service-banner-box img {
                width: 60px;
            }

            .button-container {
                flex-direction: column;
                gap: 5px;
            }

            .button {
                padding: 8px 10px;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <section class="new-services-section">
        <div class="new-services-container">
            <div class="service-banner-box">
                <img src="/images/wifi-icon3.png" alt="Manage Wi-Fi Icon">
                <h2>Manage <br>Wi-Fi</h2>
                <p>We specialize in delivering robust wireless solutions tailored to meet the demands of modern organizations.</p>
                <div class="button-container">
                    <button class="button learn-more" onclick="location.href='wifi.php'">Learn More</button>
                    <button class="button book-now" onclick="location.href='contact.php'">Book Now</button>
                </div>
            </div>
            <div class="service-banner-box">
                <img src="/images/mpls1.png" alt="MPLS VPN Icon">
                <h2>MPLS <br> VPN</h2>
                <p>Experience seamless connectivity and efficient data transport with our MPLS services.<br></p>
                <div class="button-container">
                    <button class="button learn-more" onclick="location.href='MPLS.php'">Learn More</button>
                    <button class="button book-now" onclick="location.href='contact.php'">Book Now</button>
                </div>
            </div>
            <div class="service-banner-box">
                <img src="/images/p2p5.png" alt="P2P Icon">
                <h2>P2P/Multipoint Connectivity</h2>
                <p>Experience seamless P2P and multipoint connectivity with our reliable, high-speed networking solutions.<br> </p>
                <div class="button-container">
                    <button class="button learn-more" onclick="location.href='P2P.php'">Learn More</button>
                    <button class="button book-now" onclick="location.href='contact.php'">Book Now</button>
                </div>
            </div>
            <div class="service-banner-box">
                <img src="/images/IP class one service2.png" alt="IP Class One Service Icon">
                <h2>IP Class One <br>Service</h2>
                <p>Our IP Class One (IP-1) Service is the ultimate solution for businesses seeking top-tier IP management and protection.</p>
                <div class="button-container">
                    <button class="button learn-more" onclick="location.href='IP Class.php'">Learn More</button>
                    <button class="button book-now" onclick="location.href='contact.php'">Book Now</button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
