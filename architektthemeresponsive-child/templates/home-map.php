<?php

	/*
	 * The WordPress Query class.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/WP_Query
	 */
	$args = array(
		'post_type' => array(
			'post'
		),
		'posts_per_page'         => -1
	);

$query = new WP_Query( $args );


 $the_query = new WP_Query($args);
 
 echo "<div class='map-container'><div class='wrap'><div class='acf-map'>";
 
 while ( $the_query->have_posts() ) : $the_query->the_post();
	 $location = get_field('inloki_local');
	 $title = get_the_title(); 
 
	 if( !empty($location) ) {
	 ?>
		 <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
		 	<h4>
		 		<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?></a>
		 	</h4>
		 	<p class="address"><?php echo $location['address']; ?></p>

		 </div>
	<?php
	 }
 endwhile;

 echo '</div></div></div>';

 wp_reset_postdata();
?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKKuAw6gdLDepGFUTJmdWuM6XMkWAAm_o"></script>

<script type="text/javascript">
(function($) {
/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

var styles = {
        default: null,
        gray: [
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#d3d3d3"
            }
        ]
    },
    {
        "featureType": "transit",
        "stylers": [
            {
                "color": "#808080"
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#b3b3b3"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ffffff"
            },
            {
                "weight": 1.8
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#d7d7d7"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ebebeb"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#a7a7a7"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#efefef"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#696969"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#737373"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#d6d6d6"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {},
    {
        "featureType": "poi",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#dadada"
            }
        ]
    }
]
      };

function new_map( $el ) {
 // var
 var $markers = $el.find('.marker');
 // vars
 var args = {
	 zoom : 16,
	 center : new google.maps.LatLng(0, 0),
	 mapTypeId : google.maps.MapTypeId.ROADMAP
 };
 // create map
 var map = new google.maps.Map( $el[0], args);
 map.setOptions({styles: styles['gray']});

 // add a markers reference
 map.markers = [];
 // add markers
 $markers.each(function(){
 	add_marker( $(this), map );
 });


 // center map
 center_map( map );
 // return
 return map;
}
/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/
function add_marker( $marker, map ) {
 // var
 var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
 // create marker
 var image = {
    url: '<?php echo get_stylesheet_directory_uri(); ?>'+'/images/gmaps.svg',
    scaledSize: new google.maps.Size(20, 20),
}
 var marker = new google.maps.Marker({
	 position : latlng,
	 map : map,
     optimized: false,
	 icon : image,
 });

 // add to array
 map.markers.push( marker );


 // if marker contains HTML, add it to an infoWindow
	 if( $marker.html() ) {
		 // create info window
		 var infowindow = new google.maps.InfoWindow({
		 content : $marker.html()
		 });
		 
		 // show info window when marker is clicked
		 google.maps.event.addListener(marker, 'click', function() {
		 	
		 	infowindow.open( map, marker );
		 });
	 }
}



/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/
function center_map( map ) {
 // vars
 var bounds = new google.maps.LatLngBounds();
 // loop through all markers and create bounds
 $.each( map.markers, function( i, marker ){
 var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
 bounds.extend( latlng );
 });
 // only 1 marker?
 if( map.markers.length == 1 )
 {
 // set center of map
 map.setCenter( bounds.getCenter() );
 map.setZoom( 16 );
 }
 else
 {
 // fit to bounds
 map.setCenter( bounds.getCenter() );
 map.setZoom( 5 ); // Change the zoom value as required
 map.fitBounds( bounds ); // This is the default setting which I have uncommented to stop the World Map being repeated
 }
}
/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;
	jQuery(document).ready(function($){
		 $('.acf-map').each(function(){
		 // create map
		 map = new_map( $(this) );
		 });
	});
})(jQuery);
</script> 