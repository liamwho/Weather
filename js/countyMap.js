window.onload = function(){

    var mymap2 = L.map('liveMap')

    mymap2.setView([53.4239, -7.9407], 7);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibGlhbXdobyIsImEiOiJjajI4NGlhM3MwMDJjMzJuc3JhanI3dmk2In0.p955Gj60Fs8TO-C7QnpPKQ', 
    {
        id: 'mapbox.light'
    }).addTo(mymap2);

    L.geoJSON(counties,{style:{color: "#ff0000", weight: 1, fillOpacity: 0.75}}).addTo(mymap2);

}