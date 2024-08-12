function toggleMenu() {
    var sideMenu = document.getElementById("sideMenu");
    if (sideMenu.style.width === "250px") {
        sideMenu.style.width = "0";
    } else {
        sideMenu.style.width = "250px";
    }
}



let currentIndex = 0;
const images = document.querySelectorAll('.slider img');
const totalImages = images.length;
const slider = document.querySelector('.slider');

function moveSlider(direction) {
    currentIndex += direction;
    if (currentIndex < 0) {
        currentIndex = totalImages - 1;
    } else if (currentIndex >= totalImages) {
        currentIndex = 0;
    }
    updateSlider();
}

function updateSlider() {
    const imageWidth = 200; // Width of the images
    const gap = 100; // Gap between images
    const translateX = -(currentIndex * (imageWidth + gap)); // Adjust according to new image width and gap
    slider.style.transform = `translateX(${translateX}px)`;
}

function autoSlide() {
    moveSlider(1);
}

setInterval(autoSlide, 2000); // 2 seconds timer






// enterprise plans js

document.addEventListener('DOMContentLoaded', () => {
    const features = document.querySelectorAll('.features li');
    features.forEach((feature, index) => {
        feature.style.animationDelay = `${index * 0.1}s`;
    });
});


// js for career
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('applicationForm');
    const formMessage = document.getElementById('form-message');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Basic form validation
        const firstName = document.getElementById('firstName').value.trim();
        const lastName = document.getElementById('lastName').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();
        const resume = document.getElementById('resume').files[0];
        
        if (!firstName || !lastName || !phone || !email || !message || !resume) {
            showFormMessage('Please fill out all required fields and upload your resume.', 'error');
            return;
        }

        if (!validateResume(resume)) {
            showFormMessage('Please upload a valid resume file (PDF, DOC, DOCX).', 'error');
            return;
        }
        
        // Simulate form submission
        setTimeout(() => {
            showFormMessage('Your application has been submitted successfully!', 'success');
            form.reset();
        }, 1000);
    });

    function showFormMessage(message, type) {
        formMessage.textContent = message;
        formMessage.className = `form-message ${type}`;
        formMessage.style.display = 'block';
    }

    function validateResume(file) {
        const allowedExtensions = ['pdf', 'doc', 'docx'];
        const fileExtension = file.name.split('.').pop().toLowerCase();
        return allowedExtensions.includes(fileExtension);
    }
});

// js for contact us


const mapStyles = [
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#004d00" // Dark green color
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#004d00" // Dark green color
            }
        ]
    },
    // Add more styling rules as needed
];


const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
    styles: mapStyles
});

// Open the modal
function openModal() {
    document.getElementById("mapModal").style.display = "block";
}

// Close the modal
function closeModal() {
    document.getElementById("mapModal").style.display = "none";
}
