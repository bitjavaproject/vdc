$(function() {
	$('a[rel=clear]').live("click", function(clickEvent) {
		clickEvent.preventDefault();
		document.getElementById('AddressGeocodeLt').value = "";
		document.getElementById('AddressGeocodeLg').value = "";
	});
});

function mapInitialize(latloc, lngloc, name, desc, i, zoom) {
	if (!i) var i = 0;
	if (!zoom) var zoom = 11;
	var drag = false;
	if (!name) {
		var name = new Array();
		var drag = true;
	}
	if (!latloc) {
		var latloc = new Array();
		var lngloc = new Array();
		latloc[0] = 27.681577;
		lngloc[0] = 85.319756;
	}
	var myLatLng = new google.maps.LatLng(latloc[0], lngloc[0]);
	var myOptions = {
		zoom : zoom,
		center : myLatLng,
		mapTypeId : google.maps.MapTypeId.ROADMAP
	};

	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

	google.maps.event.addListener(map, 'zoom_changed', function() {
		setTimeout(function() {}, 1500);
	});
	for (j = 0; j < i + 1; j++) {
		var marker = new google.maps.Marker({
			draggable : drag,
			position : new google.maps.LatLng(latloc[j], lngloc[j]),
			map : map,
			title : name[j]
		});
		if (!name[0]) {
			google.maps.event.addListener(marker, "dragend", function(event) {
				log(event.latLng);
				map.panTo(event.latLng);
			});

			google.maps.event.addListener(map, 'click', function(event) {
				marker.setPosition(event.latLng);
				map.panTo(event.latLng);
				log(event.latLng);
			});
		} else {
			attachinfo(marker, j, name[j], desc[j]);
		}
	}
}

function attachinfo(marker, j, name, desc) {
	var text = name + '<br>' + desc;
	var infowindow = new google.maps.InfoWindow({
		content : text
	});

	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map, marker);
	});

	google.maps.event.addListener(map, 'click', function() {
		infowindow.close();
	});
}

function log(ltlg) {
	lglt = ltlg.toString();
	point = lglt.split(",");
	document.getElementById('AddressGeocodeLt').value = point[0].substr(1, 9);
	document.getElementById('AddressGeocodeLg').value = point[1].substr(1, 9);
};