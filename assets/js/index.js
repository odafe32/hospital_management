document.addEventListener('DOMContentLoaded', function() {
    const preloader = document.getElementById('preloader');
    
    window.addEventListener('load', function() {
        preloader.style.display = 'none';
    });

});


//header navigation 
document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelector('.burger');
    const navLinks = document.querySelector('.nav-links');

    burger.addEventListener('click', function() {
        navLinks.classList.toggle('active');
        burger.classList.toggle('active');
    });
});

// -------image slider------/
let counter = 1;
setInterval(function() {
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 3) {
        counter = 1;
    }
}, 5000); // Change image every 5 seconds




///FOOTER
document.addEventListener("DOMContentLoaded", function() {
    // Update the year in the footer
    const yearSpan = document.getElementById("year");
    const currentYear = new Date().getFullYear();
    yearSpan.textContent = currentYear;

    // Testimonial carousel functionality
    const testimonials = document.querySelectorAll(".testimonial");
    let currentIndex = 0;

    function showTestimonial(index) {
        testimonials.forEach((testimonial, i) => {
            testimonial.style.transform = `translateX(${(i - index) * 100}%)`;
        });
    }

    function nextTestimonial() {
        currentIndex = (currentIndex + 1) % testimonials.length;
        showTestimonial(currentIndex);
    }

    // Initialize carousel
    showTestimonial(currentIndex);
    setInterval(nextTestimonial, 5000); // Change testimonial every 5 seconds
});
