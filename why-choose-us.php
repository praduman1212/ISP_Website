<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .features-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
        }
        
        .feature {
            text-align: center;
            max-width: 200px;
            margin-bottom: 20px; /* Add space between items */
        }
        
        .icon {
            background-color: #db8e8e;
            border-radius: 50%;
            padding: 20px;
            margin-bottom: 10px;
        }
        
        h3 {
            color: #4a2a4a;
            margin-bottom: 5px;
            font-size: 18px; /* Adjust font size */
        }
        
        p {
            color: #8a8a8a;
            font-size: 14px; /* Adjust font size */
        }

        /* Ensure images scale appropriately */
        .feature img {
            max-width: 100%; /* Ensure images don't exceed their container */
            height: auto; /* Maintain aspect ratio */
        }

        /* Media query for smaller screens */
        @media (max-width: 768px) {
            .features-section {
                flex-direction: column; /* Stack items vertically */
                align-items: stretch; /* Stretch items to full width */
            }

            .feature {
                max-width: 100%; /* Full width on smaller screens */
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="features-section">
        <div class="feature">
            <img src="/images/best-price.png" alt="Best Prices" height="150">
            <h3>Best prices</h3>
            <p>We are highly competitive</p>
        </div>
        <div class="feature">
            <img src="/images/dilivery.png" alt="Express Delivery" height="150">
            <h3>Express delivery</h3>
            <p>Exceeding industry standards</p>
        </div>
        <div class="feature">
            <img src="/images/support.png" alt="Quick Support" height="150">
            <h3>Quick support</h3>
            <p>24X7 customer support</p>
        </div>
        <div class="feature">
            <img src="/images/solution.png" alt="Customizable Solutions" height="150">
            <h3>Customizable Solutions</h3>
            <p>Unique solution for every problem</p>
        </div>
        <div class="feature">
            <img src="/images/connectivity.png" alt="Reliable Connectivity" height="150">
            <h3>Reliable Connectivity</h3>
            <p>Fast network service, reliable connectivity</p>
        </div>
    </div>
</body>
</html>
