<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="css/chatbot.css">
</head>
<body>
    <div id="chatbot-container">
        <button id="chatbot-button" onclick="toggleChatbot()">
            <img src="/images/chatbot.png" alt="Chat" width="60" height="80" >
</button>
        <div id="chatbot">
            <div id="chatbot-header">
               <img src="/images/logo.png" alt="logo"width="100" height="50" >
                <button onclick="toggleChatbot()">x</button>
            </div>
            <div id="chatbot-body">
                <div id="chatbot-messages"></div>
                <div id="suggested-questions">
                    <button class="suggestion" onclick="sendSuggestion('services')">What services do you offer?</button>
                    <button class="suggestion" onclick="sendSuggestion('location')">Where is your office located?</button>
                    <button class="suggestion" onclick="sendSuggestion('contact us')">How can I contact your support team ?</button>
                    <button class="suggestion" onclick="sendSuggestion('about us')">Can you tell me about your company?</button>
                </div>
                <div id="chatbot-input-container">
                    <textarea id="chatbot-input" placeholder="Type your question here..."></textarea>
                    <button id="chatbot-send" onclick="sendMessage()">Send</button>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/chatbot.js"></script>
</body>
</html>
