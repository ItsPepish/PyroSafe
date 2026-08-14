import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

document.addEventListener('DOMContentLoaded', function() {
    iniciarApp();
})

function iniciarApp() {
    confirmDeletePost();
    adminReportMap();
}

function confirmDeletePost() {
    const modal = document.querySelector('[data-delete-modal]');
    const spanTitle = document.querySelector('[data-delete-title]');
    const buttonCancel = document.querySelector('[data-delete-cancel]');
    const buttonConfirm = document.querySelector('[data-delete-confirm]');
    const allButtons = document.querySelectorAll('[data-delete-button]');

    if(!modal || !spanTitle || !buttonCancel || !buttonConfirm || allButtons.length === 0) {
        return;
    }

    let pendingForm = null;

    allButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            pendingForm = button.closest('[data-delete-form]');
            spanTitle.textContent = button.dataset.publicationTitle;
            modal.classList.remove('hidden');
            
        })
    })

    buttonCancel.addEventListener('click', function() {
        modal.classList.add('hidden');
        pendingForm = null;
        spanTitle.textContent = '';
    })

    buttonConfirm.addEventListener('click', function() {
        if(pendingForm !== null) {
            buttonConfirm.disabled = true;
            buttonConfirm.classList.add('opacity-60', 'cursor-not-allowed');
            pendingForm.submit();
        }
    })
}

function adminReportMap() {
    const mapElement = document.querySelector('[data-admin-report-map]');

    if(!mapElement) {
        return;
    }

    const latitude = Number(mapElement.dataset.latitude);
    const longitude = Number(mapElement.dataset.longitude);

    const map = L.map(mapElement).setView([latitude, longitude], 16);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    const marker = L.marker([latitude, longitude]).addTo(map);
    marker.bindPopup('Ubicación reportada',{
        closeOnClick: false,
        autoClose: false,
        closeButton: false,
    }).openPopup();
}