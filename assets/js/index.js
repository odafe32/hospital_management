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