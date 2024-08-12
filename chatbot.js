// Toggle chatbot visibility
function toggleChatbot() {
    const chatbot = document.getElementById('chatbot');
    chatbot.style.display = chatbot.style.display === 'block' ? 'none' : 'block';
}

// Send user message and get bot response
function sendMessage() {
    const input = document.getElementById('chatbot-input');
    const message = input.value.trim();
    if (message) {
        displayMessage('user', message);
        getBotResponse(message);
        input.value = '';
    }
}

// Send suggested question as user message
function sendSuggestion(suggestion) {
    displayMessage('user', suggestion);
    getBotResponse(suggestion);
}

// Display message in the chatbot
function displayMessage(sender, message) {
    const messagesContainer = document.getElementById('chatbot-messages');
    const messageDiv = document.createElement('div');
    messageDiv.className = 'message ' + (sender === 'user' ? 'user-message' : 'bot-message');
    messageDiv.innerHTML = message;
    messagesContainer.appendChild(messageDiv);
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
}
// Define responses based on keywords or patterns
function getBotResponse(message) {
    let response = '';

    // Convert user message to lowercase for easier comparison
    const lowerCaseMessage = message.toLowerCase();

    // Define responses based on keywords or patterns
    if (lowerCaseMessage.includes('services') || lowerCaseMessage.includes('offer')) {
        response = 'We offer the following services:<br>' +
            '<a href="wifi.php">1. Managed Wifi</a><br>' +
            '<a href="MPLS.php">2. MPLS</a><br>' +
            '<a href="P2P.php">3. P2P connectivity</a><br>' +
            '<a href="IP Class.php">4. IP One Class</a>';
    } else if (lowerCaseMessage.includes('contact') || lowerCaseMessage.includes('reach') || lowerCaseMessage.includes('phone') || lowerCaseMessage.includes('email') || lowerCaseMessage.includes('product')) {
        response = 'You can contact us at +91 9068514888 or email us at hilltellnetworkinfrastructure@gmail.com.';
    } else if (lowerCaseMessage.includes('location') || lowerCaseMessage.includes('address') || lowerCaseMessage.includes('find')) {
        response = 'We are located at 6B, IT Park, Sahastradhara Rd, Doon IT Park, Aman Vihar, Dehradun, Uttarakhand 248001.';
    } else if (lowerCaseMessage.includes('about') || lowerCaseMessage.includes('tell me about the company') || lowerCaseMessage.includes('something about the company')) {
        response = `HILTELL Network was founded with a bold vision and solid determination to revolutionize the ITeS industry, over a decade ago. Our mission was crystal clear – To be the architects of tomorrow’s digital landscape and the catalyst of change by offering a comprehensive suite of IT services to enterprises as well as individuals. From high-speed broadband and last-mile connectivity to cloud services to web hosting, domain name registration, data centre solutions, and IT infrastructure support, all under one roof.<br><br>
        Expert technical team: Best network<br><br>
        100+ coverage areas: 24/7 quick support<br><br>
        Reasonable price packages: Trusted & recommended`;
    } else if (['hi', 'hello', 'hii', 'hiii', 'hlo', 'hy', 'hola', 'hyy', 'hey', 'helo', 'sup','hlw','morning','afternoon','evening','night','guten'].includes(lowerCaseMessage)) {
        response = 'Hello, welcome to HillTell Network. How may I help you?';
    } else if (['ok', 'bye', 'see you', 'ok thank you', 'thank u', 'thanks for the help', 'tata'].includes(lowerCaseMessage)) {
        response = 'Thanks for choosing us!';
    } else if (lowerCaseMessage.includes('developer') || lowerCaseMessage.includes('creator') || lowerCaseMessage.includes('sde') || lowerCaseMessage.includes('engineer') || lowerCaseMessage.includes('coder') || lowerCaseMessage.includes('mastermind') || lowerCaseMessage.includes('developed') || lowerCaseMessage.includes('develop') || lowerCaseMessage.includes('software developer') || lowerCaseMessage.includes('software developer engineer') || lowerCaseMessage.includes('who is behind this')) {
        response = 'This website was developed by Praduman Sharma (9520949165) and Mahima Chauhan (7248545972) in June-July 2024.';
    } else if (lowerCaseMessage.includes('name') || lowerCaseMessage.includes('my name') || lowerCaseMessage.includes('myself') || lowerCaseMessage.includes('I am') || lowerCaseMessage.includes('Its me') || lowerCaseMessage.includes('introduction') || lowerCaseMessage.includes('this side') || lowerCaseMessage.includes('tell me more about yourself') || lowerCaseMessage.includes('yourself') || lowerCaseMessage.includes('who are you') || lowerCaseMessage.includes('who r u')) {
        response = 'Hey! Nice to meet you. How may I help you!';
    } else if (lowerCaseMessage.includes('mpls') || lowerCaseMessage.includes('mpls vpn') || lowerCaseMessage.includes('vpn') || lowerCaseMessage.includes('service 1') || lowerCaseMessage.includes('service one') || lowerCaseMessage.includes('about mpls')) {
        response = 'MPLS, or Multi-Protocol Label Switching, is a technique used in high-performance telecommunications networks that directs data from one network node to the next based on short path labels rather than long network addresses, avoiding complex lookups in a routing table. This allows for the creation of end-to-end circuits across any type of transport medium, using any protocol. The main benefits of MPLS include improved speed, efficiency, and performance of data transmission across networks, making it ideal for applications that require reliable and fast data delivery.';
    } else if (lowerCaseMessage.includes('ip one class') || lowerCaseMessage.includes('ip class') || lowerCaseMessage.includes('ip one') || lowerCaseMessage.includes('ip') || lowerCaseMessage.includes('service 2') || lowerCaseMessage.includes('service two')) {
        response = 'IP One Class is a premium service offered by ISPs, providing high-priority, dedicated internet access with guaranteed bandwidth and minimal latency. This service is specifically designed for businesses that require a stable and reliable internet connection for critical operations. With dedicated bandwidth, users experience consistent internet speeds without the interference of shared connections. The low latency aspect of IP One Class makes it ideal for real-time applications such as video conferencing and VoIP. Additionally, Service Level Agreements (SLAs) ensure uptime and performance with clearly defined metrics, giving businesses peace of mind. Enhanced security features further protect sensitive data, making IP One Class an excellent choice for organizations needing dependable and high-performance internet connectivity.';
    } else if (lowerCaseMessage.includes('wifi') || lowerCaseMessage.includes('managed wifi') || lowerCaseMessage.includes('wi-fi') || lowerCaseMessage.includes('service 3') || lowerCaseMessage.includes('service three')) {
        response = 'Managed WiFi is a comprehensive service provided by ISPs to ensure seamless and reliable wireless internet access throughout a business or home environment. This service includes the installation, configuration, and ongoing management of WiFi networks, ensuring optimal performance and coverage. With managed WiFi, users benefit from enhanced security features, regular maintenance, and immediate technical support, reducing the hassle of network issues and downtime. Its particularly beneficial for businesses that require robust and secure connectivity for multiple devices, guest access, and easy scalability as the company grows. Managed WiFi offers a convenient and efficient solution for maintaining a high-quality wireless network without the need for in-house IT resources.';
    } else if (lowerCaseMessage.includes('p2p') || lowerCaseMessage.includes('point 2 point') || lowerCaseMessage.includes('point to point') || lowerCaseMessage.includes('point two point') || lowerCaseMessage.includes('p2p connectivity seamless & secure') || lowerCaseMessage.includes('service 4') || lowerCaseMessage.includes('service four')) {
        response = 'P2P (Point-to-Point) connectivity is a service that provides a direct, dedicated connection between two locations, ensuring seamless and secure data transmission. This type of connectivity eliminates the need for data to travel through public networks, thereby reducing latency and improving speed. It is ideal for businesses that need to transfer large amounts of data quickly and securely between offices or data centers. P2P connections are highly reliable, offering guaranteed bandwidth and enhanced security features, making them suitable for mission-critical applications and sensitive information. With P2P connectivity, businesses can achieve efficient, uninterrupted communication and data exchange, enhancing overall operational productivity.';
    }else if (['career','job','apply','connect','naukri','serve','resume','cv','intern','internship','part time','full time','join','joining'].includes(lowerCaseMessage)) {
        response = 'Send us your Resume and details at hilltellnetworkinfrastructure@gmail.com';
    }else {
        response = 'For more details, contact us at +91 9068514888 or email us at hilltellnetworkinfrastructure@gmail.com.';
    }

    displayMessage('bot', response);
}
