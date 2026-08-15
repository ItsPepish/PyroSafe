import L from 'leaflet';
import { showMap, reverseGeocode, searchAddress } from './maps';

document.addEventListener('DOMContentLoaded', function() {
    iniciarApp();
})

function iniciarApp() {
    navbarMobile();
    reportMap();
    publicEstablishmentsMap();
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

    const map = showMap(mapElement, [19.685, -99.128]);

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
            streetAdressInput.value = address;
        }

        setReportLocation(latitudeMap, longitudeMap, 'search');
    }
}

function publicEstablishmentsMap() {
    const mapElement = document.querySelector('[data-public-establishments-map]');
    const cards = document.querySelectorAll('[data-establishment-card]');
    
    if (!mapElement) {
        return;
    }

    const map = showMap(mapElement, [19.685, -99.128], 13);
    const establishments = JSON.parse(mapElement.dataset.establishments);

    const markers = {};

    establishments.forEach(function(establishment) {
        const latitude = Number(establishment.latitude);
        const longitude = Number(establishment.longitude);

        const marker = L.marker([latitude, longitude]).addTo(map);

        marker.bindPopup('<p style="margin: 0;">' + establishment.name + '</p><p style="margin: 0;">' + establishment.address + '</p>');

        marker.on('click', function() {
            activateCard(establishment.id);
        })

        markers[establishment.id] = marker;
    })

    cards.forEach(function(card) {
        card.addEventListener('click', function() {
            const idCard = card.dataset.establishmentId;
            const marker = markers[idCard];

            if(!marker) {
                return;
            }

            activateCard(idCard);
            map.setView(marker.getLatLng(), 16);
            marker.openPopup();
        })
    })

    function activateCard(id) {
        cards.forEach(function(currentCard) {
            currentCard.classList.remove('border-[#0f7688]');
            currentCard.classList.remove('text-[#0f7688]');
            currentCard.classList.remove('bg-[#ecf3f5]');
            currentCard.classList.add('border-[#d6e0e4]');

            if(currentCard.dataset.establishmentId == id) {
                currentCard.classList.remove('border-[#d6e0e4]');
                currentCard.classList.add('border-[#0f7688]');
                currentCard.classList.add('text-[#0f7688]');
                currentCard.classList.add('bg-[#ecf3f5]');
                currentCard.scrollIntoView({
                    behavior: 'smooth',
                    block: 'nearest',
                });
            }
        })
    }
}