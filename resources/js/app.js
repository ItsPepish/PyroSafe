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
    const streetAdressInput = document.querySelector('[name="street_address"]');
    const streetAdressButton = document.querySelector('[data-search-address]');
    let marker = null;

    if(!mapElement || !latitudeInput || !longitudeInput || !currentLocationButton || !streetAdressInput || !streetAdressButton) {
        return;
    }

    const map = L.map(mapElement).setView([19.685, -99.128], 16);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    if (latitudeInput.value && longitudeInput.value) {
        setReportLocation(latitudeInput.value, longitudeInput.value, 'default');
    }

    map.on('click', function(e) {
        const latitudeMap = e.latlng.lat;
        const longitudeMap = e.latlng.lng;

        setReportLocation(latitudeMap, longitudeMap, 'map');
    })

    currentLocationButton.addEventListener('click', function() {
        navigator.geolocation.getCurrentPosition(
            function(position) {
                const latitudeMap = position.coords.latitude;
                const longitudeMap = position.coords.longitude;

                setReportLocation(latitudeMap, longitudeMap, 'current');
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

    streetAdressButton.addEventListener('click', function() {
        searchLocation();
    })

    streetAdressInput.addEventListener('keydown', function(e) {
        if(e.key === 'Enter') {
            e.preventDefault();
            searchLocation();
        }
    })

    function setReportLocation(latitude, longitude, source) {
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
            case 'current':
                message = 'Ubicación actual detectada. Ajusta el punto si no es exacto.';
                break;
            case 'search':
                message = 'Dirección encontrada. Revisa el punto antes de enviar.';
                break;
            default:
                message = 'Punto seleccionado.';
                break;
        }

        if(source === 'map' || source === 'current') {
            reverseGeocode(formattedLatitude, formattedLongitude).then(function(place) {
                if(place) {
                    streetAdressInput.value = place;
                }
            });
        }

        marker.bindPopup(message).openPopup();

        map.setView([formattedLatitude, formattedLongitude], 16);
    }

    async function searchLocation() {
        let streetAddress = streetAdressInput.value.trim();

        if(!streetAddress) {
            return;
        }
        
        const url = 'https://nominatim.openstreetmap.org/search';
        const params = {
            'q': streetAddress,
            'format': 'json',
            'limit': '1',
            'countrycodes': 'mx',
            'accept-language': 'es'
        }

        const queryString = new URLSearchParams(params).toString();

        let result;

        try {
            const response = await fetch(`${url}?${queryString}`);
            const results = await response.json();
            result = results[0];
        } catch (error) {
            L.popup()
                .setLatLng(map.getCenter())
                .setContent('No se pudo buscar la dirección. Intenta nuevamente.')
                .openOn(map);
            console.log(error);
            return;
        }

        if(!result) {
            L.popup()
                .setLatLng(map.getCenter())
                .setContent("Ubicación no encontrada.")
                .openOn(map);
            return;
        }

        let latitudeMap = result.lat;
        let longitudeMap = result.lon;
        let address = result.display_name;

        if(address) {
            streetAdressInput.value = address;
        }

        setReportLocation(latitudeMap, longitudeMap, 'search');
    }

    async function reverseGeocode(latitude, longitude) {
        const url = 'https://nominatim.openstreetmap.org/reverse';
        const params = {
            'format': 'json',
            'lat': latitude,
            'lon': longitude,
            'zoom': "18",
            'addressdetails': '1',
            'accept-language': 'es'
        }

        const queryString = new URLSearchParams(params).toString();

        try {
            const response = await fetch(`${url}?${queryString}`);
            const results = await response.json();
            return results.display_name;
        } catch (error) {
            L.popup()
                .setLatLng(map.getCenter())
                .setContent('No se pudo buscar la dirección. Intenta nuevamente.')
                .openOn(map);
            console.log(error);
            return;
        }
    }
}