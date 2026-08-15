import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

export function showMap(mapElement, coordinates, zoom = 16) {
    const map = L.map(mapElement).setView(coordinates, zoom);
    
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    return map;
}

export async function reverseGeocode(latitude, longitude) {
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
        console.log(error);
        return null;
    }
}

export async function searchAddress(address) {
    const url = 'https://nominatim.openstreetmap.org/search';
    const params = {
        'q': address,
        'format': 'json',
        'limit': '1',
        'countrycodes': 'mx',
        'accept-language': 'es'
    }

    const queryString = new URLSearchParams(params).toString();

    try {
        const response = await fetch(`${url}?${queryString}`);
        const results = await response.json();
        return results[0] ?? null;
    } catch (error) {
        console.log(error);
        return null;
    }
}