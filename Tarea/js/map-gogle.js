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
    const svgMarkerOrange = {
        path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
        fillColor: "#FF4500",
        fillOpacity: 1,
        strokeWeight: 0,
        rotation: 0,
        scale: 2,
        anchor: new google.maps.Point(15, 30),
    };
    const svgMarkerViolet = {
        path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
        fillColor: "#C71585",
        fillOpacity: 1,
        strokeWeight: 0,
        rotation: 0,
        scale: 2,
        anchor: new google.maps.Point(15, 30),
    };
    const svgMarker = {
        path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
        fillColor: "#A6ABBA",
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
        "<a id='map-marker-button' href='authorization.html'>Responder</a>" +
        "</div>" +
        "<a href='https://goo.gl/maps/fdSuK3xx8MHhTcBz6' target='_blank'>" +
        "<img id='map-marker-img' src='/img/Cámara de Comercio de Motril.jpg'/></a>" +
        "<p>Comercio de #Motril busca cubrir UNA PLAZA de mozo/a de almacén</p>" +
        "</div>";
    const contentStringGreenGarden =
        '<div id="content">' +
        "<div id='map-marker-title'>" +
        "<h2>Saliplant Garden</h2>" +
        "<a id='map-marker-button' href='authorization.html'>Responder</a>" +
        "</div>" +
        "<a href='https://goo.gl/maps/VWggm2VvKgqQfW5t6' target='_blank'>" +
        "<img id='map-marker-img' src='/img/Saliplant Garden.jpg'/></a>" +
        "<p>Buscamos personas para cubrir vacantes de peón agrícola. Si tienes pasión por la agricultura y quieres formar parte de nuestro equipo, estamos deseando conocerte.</p>" +
        "</div>";
    const contentStringGreenGonzager =
        '<div id="content">' +
        "<div id='map-marker-title'>" +
        "<h2>Multiservicios Gonzagerr</h2>" +
        "<a id='map-marker-button' href='authorization.html'>Responder</a>" +
        "</div>" +
        "<a href='https://goo.gl/maps/vyDiFRx242GCTHoLA' target='_blank'>" +
        "<img id='map-marker-img' src='/img/gonzager.jpg'/></a>" +
        "<p></p>" +
        "</div>";
    const contentStringOrgiva =
        '<div id="content">' +
        "<div id='map-marker-title'>" +
        "<h2>Orgiva</h2>" +
        "<a id='map-marker-button' href='authorization.html'>Responder</a>" +
        "</div>" +
        "<a href='https://goo.gl/maps/JF1s9rQr55veL9729' target='_blank'>" +
        "<img id='map-marker-img' src='/img/orgiva.jpg'/></a>" +
        "<p></p>" +
        "</div>";
    const contentStringLa =
        '<div id="content">' +
        "<div id='map-marker-title'>" +
        "<h2>La Huerta Xpaña</h2>" +
        "<a id='map-marker-button' href='authorization.html'>Responder</a>" +
        "</div>" +
        "<a href='https://goo.gl/maps/6c5WjsTFLu3RbGf99' target='_blank'>" +
        "<img id='map-marker-img' src='/img/la.jpg'/></a>" +
        "<p>BUSCAMOS PERSONAL PARA TRABAJO EN EL CAMPO <br> La Huerta Xpaña, S.L. busca personal para el puesto de regador con uso de maquinaria en fincas agrícolas <br> Las funciones del puesto son las siguientes <br> • Desplazamiento con el tractor llevando la bomba de agua hasta la finca <br> • Poner en marcha la bomba de agua con la tubería de riego principal <br> • Verificar que el riego sea uniforme en toda la finca <br> • Esperar que pase el tiempo de riego necesario y mudar las herramientas a otra finca <br> • Coordinación y planificación del riego con el encargado <br> • Mantener la comunicación con el encargado superior sobre el estado del riego de las fincas asignadas <br> Requisitos <br> • Permiso de conducir B y tener capacidad resolutiva en el trabajo <br> Tipo de contrato: Fijo-Discontinuo <br>  Sueldo: Segun Convenio de la empresa <br>  Puesto: Regador a jornada completa <br> TAMBIÉN BUSCAMOS PEONES AGRÍCOLAS.</p>" +
        "</div>";
    const contentStringNube =
        '<div id="content">' +
        "<div id='map-marker-title'>" +
        "<h2>La Nube</h2>" +
        "<a id='map-marker-button' href='authorization.html'>Responder</a>" +
        "</div>" +
        "<a href='https://goo.gl/maps/7YNvErBK6WAJhWvbA' target='_blank'>" +
        "<img id='map-marker-img' src='/img/nube.jpg'/></a>" +
        "<p></p>" +
        "</div>";
    const contentStringBusca =
        '<div id="content">' +
        "<div id='map-marker-title'>" +
        "<h2>Se Busca</h2>" +
        "<a id='map-marker-button' href='authorization.html'>Responder</a>" +
        "</div>" +
        "<a href='https://goo.gl/maps/toAa3JPnUthckqML6' target='_blank'>" +
        "<img id='map-marker-img' src='/img/busca.jpg'/></a>" +
        "<p></p>" +
        "</div>";
    const contentStringBar =
        '<div id="content">' +
        "<div id='map-marker-title'>" +
        "<h2>Bar Época</h2>" +
        "<a id='map-marker-button' href='authorization.html'>Responder</a>" +
        "</div>" +
        "<a href='https://goo.gl/maps/FkHG7j8tP9oB97kj6' target='_blank'>" +
        "<img id='map-marker-img' src='/img/bar.jpg'/></a>" +
        "<p></p>" +
        "</div>";

    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 12,
        center: { lat: 36.74955017333647, lng: -3.5181119953236393 },
    });

    const worker = [
        [{ lat: 36.74605313492304, lng: -3.51963292883523469 }, contentStringGreenCamara, svgMarkerGreen],
        [{ lat: 36.74171675043048, lng: -3.5471556576704706 }, contentStringGreenGarden, svgMarkerGreen],
        [{ lat: 36.752284827343516, lng: -3.510498755823823 }, contentStringGreenGonzager, svgMarkerGreen],
        [{ lat: 36.902153141296736, lng: -3.423159760686861 }, contentStringOrgiva, svgMarkerOrange],
        [{ lat: 36.72805137927365, lng: -3.536047413494294 }, contentStringLa, svgMarkerViolet],
        [{ lat: 36.74856380439749, lng: -3.52290906378337 }, contentStringNube, svgMarkerOrange],
        [{ lat: 37.178195240490815, lng: -3.5997387424976726 }, contentStringBusca, svgMarkerViolet],
        [{ lat: 36.7329634648962, lng: -3.587694186505706 }, contentStringBar, svgMarkerViolet],
    ]
    const infoWindow = new google.maps.InfoWindow();

    worker.forEach(([position, content, icon], i) => {
        const marker = new google.maps.Marker({
            position,
            map,
            title: content,
            // label: `${i + 1}`,
            icon: icon,
            optimized: false,
        });

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
