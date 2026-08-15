import L from 'leaflet';
import { showMap, reverseGeocode, searchAddress } from './maps';

document.addEventListener('DOMContentLoaded', function() {
    iniciarApp();
})

function iniciarApp() {
    confirmDeletePost();
    adminReportMap();
    adminEstablishmentMap();
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

    const map = showMap(mapElement, [latitude, longitude]);

    const marker = L.marker([latitude, longitude]).addTo(map);
    marker.bindPopup('Ubicación reportada',{
        closeOnClick: false,
        autoClose: false,
        closeButton: false,
    }).openPopup();
}

function adminEstablishmentMap() {
    const mapElement = document.querySelector('[data-establishment-map]');
    const latitudeInput = document.querySelector('[name="latitude"]');
    const longitudeInput = document.querySelector('[name="longitude"]');
    const streetAddressInput = document.querySelector('[name="address"]');
    const streetAddressButton = document.querySelector('[data-establishment-search-address]');
    let marker = null;

    if(!mapElement || !latitudeInput || !longitudeInput || !streetAddressInput || !streetAddressButton) {
        return;
    }

    const map = showMap(mapElement, [19.685, -99.128]);

    if (latitudeInput.value && longitudeInput.value) {
        setEstablishmentLocation(latitudeInput.value, longitudeInput.value, 'default');
    }

    map.on('click', function(e) {
        const latitudeMap = e.latlng.lat;
        const longitudeMap = e.latlng.lng;

        setEstablishmentLocation(latitudeMap, longitudeMap, 'map');
    })

    streetAddressButton.addEventListener('click', function() {
        searchLocation();
    })

    streetAddressInput.addEventListener('keydown', function(e) {
        if(e.key === 'Enter') {
            e.preventDefault();
            searchLocation();
        }
    })

    function setEstablishmentLocation(latitude, longitude, source) {
        const formattedLatitude = Number(latitude).toFixed(7);
        const formattedLongitude = Number(longitude).toFixed(7);

        latitudeInput.value = formattedLatitude;
        longitudeInput.value = formattedLongitude;
    
        if(!marker) {
            marker = L.marker([formattedLatitude, formattedLongitude]).addTo(map);
        } else {
            marker.setLatLng([formattedLatitude, formattedLongitude]);
        }
    
        let message = '';

        switch(source) {
            case 'map':
                message = 'Punto seleccionado manualmente.';
                break;
            case 'search':
                message = 'Dirección encontrada. Revisa el punto antes de guardar.';
                break;
            default:
                message = 'Punto seleccionado.';
                break;
        }
    
        if(source === 'map') {
            reverseGeocode(formattedLatitude, formattedLongitude).then(function(place) {
                if(place) {
                    streetAddressInput.value = place;
                }
            });
        }
    
        marker.bindPopup(message).openPopup();
    
        map.setView([formattedLatitude, formattedLongitude], 16);
    }

    async function searchLocation() {
        let streetAddress = streetAddressInput.value.trim();

        if(!streetAddress) {
            return;
        }
    
        const result = await searchAddress(streetAddress);

        if(!result) {
            L.popup()
                .setLatLng(map.getCenter())
                .setContent("No se pudo buscar la dirección. Intenta nuevamente.")
                .openOn(map);
            return;
        }
    
        let latitudeMap = result.lat;
        let longitudeMap = result.lon;
        let address = result.display_name;
    
        if(address) {
            streetAddressInput.value = address;
        }
    
        setEstablishmentLocation(latitudeMap, longitudeMap, 'search');
    }
}