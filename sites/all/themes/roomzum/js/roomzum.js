(function ($) {
    Drupal.behaviors.updateMap = {
	attach: function (context, settings) {
	    setTimeout(function () {
		var map = Drupal.gmap.getMap('gmap-auto1map-gmap0');
		var markerBounds = new google.maps.LatLngBounds();
		$.each(map.map.markers, function (k,v) {
		    markerBounds.extend(v.position);
		});
		map.map.fitBounds(markerBounds);
	    }, 500);
	    var mh = 62;
	    $(window).resize(function () {
		$('.gmap-control').height($(window).height() - mh);
		$('#content').height($(window).height() - mh);
	    });
	    $('.gmap-control').height($(window).height() - mh);
	    $('#content').height($(window).height() - mh);
	}
    };

    Drupal.behaviors.moveMap = {
	attach: function (context, settings) {
	    setTimeout(function () {
		var map = Drupal.gmap.getMap('gmap-auto1map-gmap0');		
		map.bind('move', function() {
		});
	    }, 500);
	}
    };
})(jQuery);