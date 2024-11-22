import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    const fileInput = document.getElementById("file-upload");
    const fileNameDisplay = document.getElementById("file-name");

    if (fileInput && fileNameDisplay) {
        fileInput.addEventListener("change", function (event) {
            const fileName = event.target.files[0]?.name || "No file chosen";
            fileNameDisplay.textContent = fileName;
        });
    }
});

const slider = document.getElementById('slider');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let slides = [];
let currentIndex = 0;

if (slider) {
    slides = slider.children;
}
function updateSlider() {
    if (slides.length > 0) {
        const slideWidth = slides[0].offsetWidth;
        slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }
}
if (prevBtn) {
    prevBtn.addEventListener('click', () => {
        if (slides.length > 0) {
            currentIndex = (currentIndex === 0) ? slides.length - 1 : currentIndex - 1;
            updateSlider();
        }
    });
}
if (nextBtn) {
    nextBtn.addEventListener('click', () => {
        if (slides.length > 0) {
            currentIndex = (currentIndex === slides.length - 1) ? 0 : currentIndex + 1;
            updateSlider();
        }
    });
}
updateSlider();

