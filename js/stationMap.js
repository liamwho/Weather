window.onload = function(){

	var mymap = L.map('mapid')
    var latID = document.getElementById('latID').innerHTML;
    var lngID = document.getElementById('lngID').innerHTML;
    var nameID = document.getElementById('nameID').innerHTML;
    var countyID = document.getElementById('countyID').innerHTML;

	mymap.setView([53.4239, -7.9407], 7);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibGlhbXdobyIsImEiOiJjajI4NGlhM3MwMDJjMzJuc3JhanI3dmk2In0.p955Gj60Fs8TO-C7QnpPKQ', 
	{
        id: 'mapbox.light'
	}).addTo(mymap);

    var marker = L.marker([latID, lngID]).addTo(mymap);
    marker.bindPopup(nameID +', '+ countyID).openPopup();
}
