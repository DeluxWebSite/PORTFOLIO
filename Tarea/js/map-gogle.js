// Initialize and add the map
function initMap() {

    const svgMarkerGreen = {
        path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
        fillColor: "#008000",
        fillOpacity: 1,
        strokeWeight: 0,
        rotation: 0,
        scale: 2,
        anchor: new google.maps.Point(15, 30),
    };

    const contentStringGreenCamara =
        '<div id="content">' +
        "<div id='map-marker-title'>" +
        "<h2>Cámara de Comercio de Motril</h2>" +
        "<button id='map-marker-button' type='button'>Откликнуться</button>" +
        "</div>" +
        "<a href='https://goo.gl/maps/fdSuK3xx8MHhTcBz6' target='_blank'>" +
        "<img id='map-marker-img' src='/img/Cámara de Comercio de Motril.jpg'/></a>" +
        "<p>Comercio de #Motril busca cubrir UNA PLAZA de mozo/a de almacén</p>" +
        "</div>";
    const contentStringGreenGarden =
        '<div id="content">' +
        "<div id='map-marker-title'>" +
        "<h2>Saliplant Garden</h2>" +
        "<button id='map-marker-button' type='button'>Откликнуться</button>" +
        "</div>" +
        "<a href='https://goo.gl/maps/VWggm2VvKgqQfW5t6' target='_blank'>" +
        "<img id='map-marker-img' src='/img/Saliplant Garden.jpg'/></a>" +
        "<p>Buscamos personas para cubrir vacantes de peón agrícola. Si tienes pasión por la agricultura y quieres formar parte de nuestro equipo, estamos deseando conocerte.</p>" +
        "</div>";
    const contentStringGreenGonzager =
        '<div id="content">' +
        "<div id='map-marker-title'>" +
        "<h2>Multiservicios Gonzagerr</h2>" +
        "<button id='map-marker-button' type='button'>Откликнуться</button>" +
        "</div>" +
        "<a href='https://goo.gl/maps/vyDiFRx242GCTHoLA' target='_blank'>" +
        "<img id='map-marker-img' src='/img/gonzager.jpg'/></a>" +
        "<p></p>" +
        "</div>";
    // const infowindow = new google.maps.InfoWindow({
    //     content: contentString,
    // ariaLabel: "Uluru",
    // });


    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 12,
        center: { lat: 36.74955017333647, lng: -3.5181119953236393 },
    });


    // const marker = new google.maps.Marker({
    //     position: { lat: 36.74955017333647, lng: -3.5181119953236393 },
    //     map: map,
    //     icon: svgMarkerGreen
    // });

    const worker = [
        [{ lat: 36.74605313492304, lng: -3.51963292883523469 }, contentStringGreenCamara, svgMarkerGreen],
        [{ lat: 36.74171675043048, lng: -3.5471556576704706 }, contentStringGreenGarden, svgMarkerGreen],
        [{ lat: 36.752284827343516, lng: -3.510498755823823 }, contentStringGreenGonzager, svgMarkerGreen]
    ]
    // Create an info window to share between markers.
    const infoWindow = new google.maps.InfoWindow();

    // Create the markers.
    worker.forEach(([position, content, icon], i) => {
        const marker = new google.maps.Marker({
            position,
            map,
            title: content,
            // label: `${i + 1}`,
            icon: icon,
            optimized: false,
        });

        // Add a click listener for each marker, and set up the info window.
        marker.addListener("click", () => {
            infoWindow.close();
            infoWindow.setContent(marker.getTitle());
            infoWindow.open(marker.getMap(), marker);
            // infowindow.open({
            //     anchor: marker,
            //     map,
            // });
        });
    });
}

window.initMap = initMap;
