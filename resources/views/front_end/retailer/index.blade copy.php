<x-userHeader />
<section class="retailers">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="map-searchbar">
                    <form id="search-form">
                        <div class="searchinput">
                            <div class="item">
                                <label for="location-input">Your location</label>
                                <input id="location-input" type="text">
                            </div>
                            <div class="item">
                                <label for>Search radius</label>
                                <select id="radius">
                                    <option value="10000">10 km</option>
                                    <option value="25000">25 km</option>
                                    <option value="50000" selected>50 km</option>
                                    <option value="100000">100 km</option>
                                    <option value="200000">200 km</option>
                                    <option value="500000">500 km</option>
                                </select>
                            </div>
                            <div class="item">
                                <label for>Results </label>
                                <select id="limit">
                                    <option value="5" selected>5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                            <div class="item">
                                <input type="submit" value="Search" />
                            </div>
                            <div class="item">
                                <a href="#!" onclick="resetForm()">Reset</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="map">
            <div class="row">
                <div class="col-md-4">
                    <div class="lists">
                        <ul>
                            <p>No Results Found</p>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="map-view">
                        <div id="map" style="height: 500px !important"></div>
                        {{-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1199726.4349035788!2d-119.52509896178742!3d33.84307692208693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1699344526185!5m2!1sen!2sin"
                            style="border:0;" allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2h5V1Jl9owOguijhl9Fy21uuAjlkKjpY&libraries=places">
</script>

<script>
    var nextPageToken;
    var markers = [];
    var geocoder = new google.maps.Geocoder();
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: {
            lat: 37.7749,
            lng: -122.4194
        } // Default center (San Francisco)
    });

    var directionsService = new google.maps.DirectionsService();
    var directionsDisplay = new google.maps.DirectionsRenderer();
    directionsDisplay.setMap(map);

    function resetForm() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                // If successful, update the map center to the user's location
                var userLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                map.setCenter(userLocation);

                $('.lists').html('<ul><p> No Results Found </p></ul>');
                $("#location-input").val('');

            }, function(error) {
                // If unsuccessful, handle the error or keep the default center
                console.error('Error getting user location' + ' ' + error.message);
            });

            if (markers) {
                markers.forEach(function(marker) {
                    marker.setMap(null);
                });
                markers = [];
            }
        }
    }

    resetForm();

    $(document).ready(function() {
        var infowindow = new google.maps.InfoWindow();

        $('#search-form').submit(function(event) {
            event.preventDefault();
            var locationInput = $('#location-input').val();

            if (locationInput == '') {
                return $('.lists').html('<ul><p> No Results Found </p></ul>');
            }

            geocodeLocation(locationInput);
        });

        function geocodeLocation(locationInput) {
            geocoder.geocode({
                'address': locationInput
            }, function(results, status) {
                if (status === 'OK' && results.length > 0) {
                    var newLocation = results[0].geometry.location;
                    map.setCenter(newLocation);

                    // Fetch nearby places
                    var request = {
                        location: newLocation,
                        radius: $("#radius").val(), // 50 km
                        type: 'train_station',
                        pageToken: nextPageToken
                    };

                    var service = new google.maps.places.PlacesService(map);
                    service.nearbySearch(request, function(results, status, pagination) {
                        if (status === 'OK') {
                            displayStores(results);

                            // if (pagination.hasNextPage) {
                            //     nextPageToken = pagination.nextPage();
                            // } else {
                            //     nextPageToken = null;
                            // }
                        }
                    });
                } else {
                    // // If geocoding fails, try searching by store name
                    // searchStoresByName(locationInput);
                }
            });
        }

        // function searchStoresByName(storeName) {
        //     var request = {
        //         query: storeName,
        //         fields: ['name', 'geometry', 'formatted_address', 'formatted_phone_number',
        //             'url'
        //         ]
        //     };

        //     var service = new google.maps.places.PlacesService(map);
        //     service.textSearch(request, function(results, status) {
        //         if (status === 'OK') {
        //             displayStores(results);
        //         } else {
        //             $('.lists').html('<ul><p> No Results Found </p></ul>');
        //             // alert('Text search was not successful for the following reason: ' + status);
        //         }
        //     });
        // }

        function displayStores(stores) {
            var lists = $('.lists');
            lists.empty();

            // Clear existing markers
            markers.forEach(function(marker) {
                marker.setMap(null);
            });
            markers = [];

            // Sort stores by distance before displaying
            stores.sort(function(a, b) {
                return a.distance - b.distance;
            });

            for (var i = 0; i < stores.length && i < $("#limit").val(); i++) {
                var store = stores[i];
                console.log(store.geometry.location);

                // Create a marker for each store
                var marker = new google.maps.Marker({
                    position: store.geometry.location,
                    map: map,
                    title: store.name
                });

                // Store the marker in the markers array
                markers.push(marker);

                // Add click event listener to the marker to display infowindow
                marker.addListener('click', function() {
                    infowindow.setContent(store.name);
                    infowindow.open(map, this);
                });

                // Fetch details for each place to get the phone number
                var detailsRequest = {
                    placeId: store.place_id,
                    fields: ['name', 'formatted_address', 'formatted_phone_number', 'geometry', 'url']
                };

                var detailsService = new google.maps.places.PlacesService(map);
                detailsService.getDetails(detailsRequest, function(place, status) {
                    if (status === 'OK') {
                        var storeInfo = '<ul><li>' +
                            '<h4><a href="' + place.url + '">' + place.name + '</a></h4>' +
                            '<address>' +
                            '<p>' + place.formatted_address + '</p>' +
                            '</address>' +
                            '<p class="phone"><strong>Phone: </strong> <a href="tel:' + (place
                                .formatted_phone_number || 'N/A') + '">' +
                            (place.formatted_phone_number || 'N/A') + '</a></p>' +
                            // '<p><strong>Distance: </strong>' + distanceInKm.toFixed(2) + ' km</p>' +
                            '<p><a href="#!" class="directions-link" onclick="directionUpdate(this, event)" data-lat="' +
                            place.geometry.location.lat() + '" data-lng="' + place.geometry.location
                            .lng() +
                            '">Directions</a></p>' +
                            '</li></ul>';
                        lists.append(storeInfo);
                    } else {
                        alert('Place details request was not successful for the following reason: ' +
                            status);
                    }
                });
            }
        }
    });

    // Haversine formula to calculate distance between two coordinates in meters
    function haversineDistance(lat1, lon1, lat2, lon2) {
        var R = 6371; // Radius of the Earth in kilometers
        var dLat = toRadians(lat2 - lat1);
        var dLon = toRadians(lon2 - lon1);
        var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.cos(toRadians(lat1)) * Math.cos(toRadians(lat2)) *
            Math.sin(dLon / 2) * Math.sin(dLon / 2);
        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        var distance = R * c * 1000; // Distance in meters
        return distance;
    }

    function toRadians(degrees) {
        return degrees * (Math.PI / 180);
    }

    function calculateAndDisplayRoute(destinationLat, destinationLng) {
        var destination = new google.maps.LatLng(destinationLat, destinationLng);

        var request = {
            origin: map.getCenter(),
            destination: destination,
            travelMode: 'DRIVING'
        };

        directionsService.route(request, function(result, status) {
            if (status == 'OK') {
                directionsDisplay.setDirections(result);
            } else {
                alert('Directions request failed due to ' + status);
            }
        });
    }

    function directionUpdate(elm, e) {
        e.preventDefault();
        var destinationLat = $(elm).data('lat');
        var destinationLng = $(elm).data('lng');

        calculateAndDisplayRoute(destinationLat, destinationLng);
    }
</script>
<x-userFooter />
