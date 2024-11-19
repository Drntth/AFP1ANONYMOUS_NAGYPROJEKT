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

const slides = slider.children;
let currentIndex = 0;

function updateSlider() {
    const slideWidth = slides[0].offsetWidth;
    slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}

prevBtn.addEventListener('click', () => {
    // SLider és gombok beállítása
    currentIndex = (currentIndex === 0) ? slides.length - 1 : currentIndex - 1;
    updateSlider();
});

nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex === slides.length - 1) ? 0 : currentIndex + 1;
    updateSlider();
});

updateSlider();

var isOpen = false

// A popup ablak megnyitására szolgáló funkció :)
function openPopup() {
    const size = {
        width: 200,
        height: 400,
    }

    const imageSize = {
        width: Math.floor(Math.random() * 1000) + 200,
        height: Math.floor(Math.random() * 1000) + 400,
    }

    const popupHTML = `
        <div id="popup-wrapper" style="width: ${size.width}px; height: ${size.height}px;display: none;" class="hue-rotate-animation fixed bg-black bg-opacity-50 bottom-0 left-0 transform -translate-y-1/2">
            <div style="dispay: flex; align-items:center; justify-content: center;">
            <span style="font-size:48px; color: white;">AKCIÓ</span>
            <button id="popup_close" class="popup-close absolute top-2 right-2 bg-red-500 text-white p-2 rounded-full hover:bg-red-700">
                &times;
            </button>
            </div>
        </div>
    `;

    document.body.insertAdjacentHTML('beforeend', popupHTML);

    const image = new Image();
    image.src = `https://random.imagecdn.app/${imageSize.width}/${imageSize.height}`;

    image.onload = function () {

        const popup = document.getElementById(`popup-wrapper`);
        popup.style.background = `url(${image.src}) no-repeat center center`;
        popup.style.backgroundSize = 'cover';

        popup.style.display = 'flex';
        isOpen = true

        const closeButton = document.getElementById('popup_close');
        closeButton.addEventListener('click', function () {
            if (popup) {
                popup.remove();
                isOpen = false
            }
        });
    };

    const closeButton = document.getElementById('popup_close');
    closeButton.addEventListener('click', function () {
        const popup = closeButton.closest('[id^="popup-wrapper"]');
        if (popup) {
            popup.remove();
            isOpen = false
        }
    });
}


setInterval(() => {
    if (!isOpen) openPopup()
}, 30000)
