// Initialize and add the map 4.587357491415826, -74.12100161405188
function initMap() {
    var center_map = {lat: 4.587357491415826, lng: -74.12100161405188};
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 13,
        center: center_map,
    });
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((position) => {
                map.setCenter({
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                });
            });
    }

    if (Array.isArray(distribuidores)) {
        distribuidores.forEach(d => {
            new google.maps.Marker({
                position: {
                    lat: Number(d.latitud),
                    lng: Number(d.longitud),
                },
                map,
                title: String(d.distribuidor),
                label: String(d.id),
            });
        });
    }

}

window.initMap = initMap;