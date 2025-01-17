let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-slide');
const indicators = document.querySelectorAll('.carousel-indicator');

function showSlide(index) {
    slides.forEach((slide) => {
        slide.classList.add('hidden');
        slide.classList.remove('block');
    });
    
    indicators.forEach((indicator) => {
        indicator.classList.remove('active');
    });

    slides[index].classList.remove('hidden');
    slides[index].classList.add('block');
    indicators[index].classList.add('active');
    currentSlide = index;
}

function nextSlide() {
    let next = (currentSlide + 1) % slides.length;
    showSlide(next);
}

function previousSlide() {
    let prev = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(prev);
}

// Auto slide every 5 seconds
setInterval(nextSlide, 5000);

// Initialize first slide
showSlide(0);