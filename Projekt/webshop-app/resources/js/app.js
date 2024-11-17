import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function() {
    const fileInput = document.getElementById("file-upload");
    const fileNameDisplay = document.getElementById("file-name");

    if (fileInput && fileNameDisplay) {
        fileInput.addEventListener("change", function(event) {
            const fileName = event.target.files[0]?.name || "No file chosen";
            fileNameDisplay.textContent = fileName;
        });
    }
});
