import './bootstrap';

import initChatbot from './chatbot';
import initSlider from './slider'

import Alpine from 'alpinejs';

initChatbot()
initSlider()

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

const toggleButton = document.getElementById('menu-toggle');
const menuIcon = document.getElementById('menu-icon');
const mobileMenu = document.getElementById('mobile-menu');
toggleButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    if (mobileMenu.classList.contains('hidden')) {
        menuIcon.classList.remove('fa-xmark');
        menuIcon.classList.add('fa-bars');
    } else {
        menuIcon.classList.remove('fa-bars');
        menuIcon.classList.add('fa-xmark');
    }
});