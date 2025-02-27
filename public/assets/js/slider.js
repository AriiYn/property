// JavaScript untuk slider otomatis dan manual
const slides = document.querySelector('.slides');
const images = document.querySelectorAll('.slides img');
const totalSlides = images.length;
let index = 0;

// Fungsi untuk slide otomatis setiap 5 detik
setInterval(() => {
    index++;
    if (index === totalSlides) {
        index = 0;
    }
    updateSlide();
}, 5000);

// Update slide
function updateSlide() {
    slides.style.transform = 'translateX(' + (-index * 100) + '%)';
}

// Tombol navigasi manual
document.getElementById('prevBtn').addEventListener('click', () => {
    index = index === 0 ? totalSlides - 1 : index - 1;
    updateSlide();
});

document.getElementById('nextBtn').addEventListener('click', () => {
    index = index === totalSlides - 1 ? 0 : index + 1;
    updateSlide();
});