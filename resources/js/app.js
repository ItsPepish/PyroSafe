import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

document.addEventListener('DOMContentLoaded', function() {
    iniciarApp();
})

function iniciarApp() {
    navbarMobile();
    reportMap();
}

function navbarMobile() {
    const botonNav = document.querySelector('[data-mobile-menu-button]');
    const menuNav = document.querySelector('[data-mobile-menu]');

    if(botonNav && menuNav) {
        const openIcon = botonNav.querySelector('[data-mobile-menu-open-icon]');
        const closeIcon = botonNav.querySelector('[data-mobile-menu-close-icon]');
        botonNav.addEventListener('click', function() {
            const isOpen = !menuNav.classList.toggle('hidden');
            
            botonNav.setAttribute('aria-expanded', isOpen);

            openIcon.classList.toggle('hidden', isOpen);
            closeIcon.classList.toggle('hidden', !isOpen);
        })

        const linksNav = menuNav.querySelectorAll('a');

        linksNav.forEach(link => {
            link.addEventListener('click', function() {
                menuNav.classList.add('hidden');
                botonNav.setAttribute('aria-expanded', 'false');
                openIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            })
        });
    }
}

function reportMap() {
    const mapElement = document.querySelector('[data-report-map]');
    const latitudeInput = document.querySelector('[name="latitude"]');
    const longitudeInput = document.querySelector('[name="longitude"]');
    const currentLocationButton = document.querySelector('[data-use-current-location]');
    let marker = null;

    if(!mapElement || !latitudeInput || !longitudeInput || !currentLocationButton) {
        return;
    }

    const map = L.map(mapElement).setView([19.685, -99.128], 16);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    map.on('click', function(e) {
        const latitudeMap = e.latlng.lat;
        const longitudeMap = e.latlng.lng;

        setReportLocation(latitudeMap, longitudeMap);
    })

    currentLocationButton.addEventListener('click', function() {
        navigator.geolocation.getCurrentPosition(
            function(position) {
                const latitudeMap = position.coords.latitude;
                const longitudeMap = position.coords.longitude;

                setReportLocation(latitudeMap, longitudeMap);
            }, 
            function(error) {
                console.log (error.message);
            },
            {
                enableHighAccuracy: true,
                timeout: 10000,
                maximumAge: 0
            }
        );
    })

    function setReportLocation(latitude, longitude) {
        const formattedLatitude = Number(latitude).toFixed(7);
        const formattedLongitude = Number(longitude).toFixed(7);

        latitudeInput.value = formattedLatitude;
        longitudeInput.value = formattedLongitude;

        if(!marker) {
            marker = L.marker([formattedLatitude, formattedLongitude]).addTo(map);
        } else {
            marker.setLatLng([formattedLatitude, formattedLongitude]);
        }

        map.setView([formattedLatitude, formattedLongitude], 16);
    }
}