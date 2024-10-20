function zoomImage(direction)
{
    let newZoom = currentZoom + direction * stepSize;

    // Limit the zoom level to the minimum and maximum
    // values
    if (newZoom < minZoom || newZoom > maxZoom) {
        return;
    }

    currentZoom = newZoom;

    // Update the CSS transform of the image to scale it
    let image
        = document.querySelector("#map-container svg");
    image.style.transform = "scale(" + currentZoom + ")";
}

let currentZoom = 1;
let minZoom = 1;
let maxZoom = 3;
let stepSize = 0.1;

window.onload = function () {

    let container = document.getElementById("map-container");

    container.addEventListener("wheel", function(event) {
        // Zoom in or out based on the scroll direction
        let direction = event.deltaY > 0 ? -1 : 1;
        zoomImage(direction);
    });
}
