// Function to animate the count-up numbers
function animateValue(id, start, end, duration, suffix = '+') {
    const obj = document.getElementById(id);
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerText = Math.floor(progress * (end - start) + start) + suffix;
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

// Callback function for Intersection Observer
function handleIntersect(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateValue('districts', 0, 85, 2000);
            animateValue('customers', 0, 350, 2000);
            animateValue('speed', 0, 1000, 2000, 'Mbps');
            observer.disconnect(); // Stop observing after animation starts
        }
    });
}

// Create an Intersection Observer
const observer = new IntersectionObserver(handleIntersect, {
    threshold: 0.1 // Trigger when 10% of the target is visible
});

// Start observing the stats container
document.addEventListener('DOMContentLoaded', () => {
    const statsContainer = document.querySelector('.stats-container');
    observer.observe(statsContainer);
});
