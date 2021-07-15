class MapWrapper {
    constructor() {
        mapboxgl.accessToken = mapAccessToken
        this.map = new mapboxgl.Map({
            container: 'map',
            style: mapStyle,
            center: [1.7191, 46.7111],
            zoom: 5
        });
        // Add zoom and rotation controls to the map.
        this.map.addControl(new mapboxgl.NavigationControl());

        // map not to zoom while scrolling

        var maxMobileWidth = 768;
        if (window.innerWidth >= maxMobileWidth) { // if width is lower or equal to number, disable zoom if mobile.do
            this.map.scrollZoom.disable();
        }
    }
}