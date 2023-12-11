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
                                    <option value="16093.4">10 miles</option>
                                    <option value="40233.6">25 miles</option>
                                    <option value="80467.2" selected>50 miles</option>
                                    <option value="160934">100 miles</option>
                                    <option value="321868">200 miles</option>
                                    <option value="804672">500 miles</option>
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
                                <a href="#!" onclick="showDefaultData()">Reset</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="map">
            <div class="row">
                <div class="col-md-4">
                    <div id="directions-list">

                    </div>
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
    var infowindow = new google.maps.InfoWindow();
    var csrfToken = $('meta[name="csrf-token"]').attr("content");
    var str = '';
    var nextPageToken;
    var lists = $('.lists');
    var newLocation;
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

    // function convertToKilometers(valueWithUnit) {
    //     // Extract the numerical value and unit
    //     var match = valueWithUnit.match(/(\d+(\.\d+)?)\s*([a-zA-Z]+)/);

    //     if (match) {
    //         var numericValue = parseFloat(match[1]);
    //         var unit = match[3].toLowerCase();

    //         // Conversion factors
    //         var conversionFactors = {
    //             'mi': 1.60934, // 1 mile = 1.60934 kilometers
    //             'ft': 1 // 1 foot remains 1 foot
    //             // Add more units as needed
    //         };

    //         if (conversionFactors.hasOwnProperty(unit)) {
    //             var convertedValue = numericValue * conversionFactors[unit];

    //             // If the unit is 'mi', round to 1 decimal place
    //             var result = unit === 'mi' ? parseFloat(convertedValue.toFixed(1)) + ' km' : numericValue + ' ' + unit;

    //             return result;
    //         } else {
    //             console.error('Unsupported unit: ' + unit);
    //         }
    //     } else {
    //         console.error('Invalid input format: ' + valueWithUnit);
    //     }

    //     return null; // Return null for unsupported or invalid input
    // }

    function showDefaultData() {
        lists.empty();
        $("#location-input").val('');
        if (directionsDisplay) {

            directionsDisplay.setDirections({
                routes: []
            }); // Clear directions
        }

        if (markers) {
            markers.forEach(function(marker) {
                marker.setMap(null);
            });
            markers = [];
        }

        geocoder.geocode({
            'address': "Kansas"
        }, function(results, status) {
            newLocation = results[0].geometry.location;
            map.setCenter(newLocation);
            map.setZoom(4);
            if (status === 'OK' && results.length > 0) {
                $.ajax({
                    method: 'POST',
                    url: '{{ 'fetch/shops' }}',
                    dataType: 'json',
                    headers: {
                        "X-CSRF-TOKEN": csrfToken,
                        Authorization: "Bearer " +
                            csrfToken,
                    },
                    success: function(data) {
                        var searchLocation = map
                            .getCenter();

                        var stores = data.shops;

                        for (var i = 0; i < stores.length; i++) {
                            var store = stores[i];

                            var storePosition = new google.maps.LatLng(store.latitude, store
                                .longitude);

                            var marker = new google.maps.Marker({
                                position: storePosition,
                                map: map,
                                title: store.name
                            });

                            markers.push(marker);

                            marker.addListener('click', function(store) {
                                return function() {
                                    // Zoom in on the clicked marker's location
                                    map.setCenter(this.getPosition());
                                    map.setZoom(12);

                                    // Run your custom function when the marker is clicked
                                    highlightStore(store.id);

                                    // Open infowindow or perform other actions as needed
                                    // infowindow.setContent(store.name);
                                    // infowindow.open(map, marker);
                                };
                            }(store));

                            // marker.addListener('click', function() {
                            //     infowindow.setContent(store.name);
                            //     infowindow.open(map, this);
                            // });

                            var destination = new google.maps.LatLng(store.latitude, store
                                .longitude);

                            var request = {
                                origin: newLocation,
                                destination: destination,
                                travelMode: 'DRIVING'
                            };

                            directionsService.route(request, function(result, status) {
                                if (status == 'OK') {
                                    // directionsDisplay.setDirections(result);
                                    var route = result.routes[0];

                                    route.legs.forEach(function(leg) {
                                        str = leg.distance.text;
                                    });
                                }
                            });

                            var storeInfo = '<ul id="store_' + store.id +
                                '" class="store-ul"><li>' +
                                '<h4><a target="_blank" href="' + store.url + '">' + store.name +
                                '</a></h4>' +
                                '<address>' +
                                '<p>' + store.address + '</p>' +
                                '</address>' +
                                '<p class="phone m-0"><strong>Phone: </strong> <a href="tel:' +
                                store.tel + '">' + (
                                    store
                                    .tel ||
                                    'NA') +
                                '</a>' +
                                '</p>' +
                                '<p class="email m-0"><strong>Email: </strong> <a href="mailto:' +
                                store.email +
                                '">' +
                                (
                                    store
                                    .email ||
                                    'NA') +
                                '</a>' +
                                '</p>' +
                                '<br><a target="_blank" href="' + store.url +
                                '" class="directions-link">Website</a>' +
                                '<br><a href="#!" class="directions-link" data-id="' + store.id +
                                '" onclick="viewOnMap(this, event)" data-lat="' +
                                store.latitude + '" data-lng="' + store.longitude +
                                '">View on map</a>' +
                                '<br><a href="#!" class="directions-link" onclick="directionUpdate(this, event)" data-lat="' +
                                store.latitude + '" data-lng="' + store.longitude +
                                '">Directions</a>' +
                                '</li></ul>';
                            lists.append(storeInfo);
                        }
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }
        });
    }

    showDefaultData();

    $(document).ready(function() {

        $('#search-form').submit(function(event) {
            event.preventDefault();
            if (directionsDisplay) {

                directionsDisplay.setDirections({
                    routes: []
                }); // Clear directions
            }
            var locationInput = $('#location-input').val();

            if (locationInput == '') {
                return showDefaultData();
            }

            geocodeLocation(locationInput);
        });

        function geocodeLocation(locationInput) {
            geocoder.geocode({
                'address': locationInput
            }, function(results, status) {
                if (status === 'OK' && results.length > 0) {
                    newLocation = results[0].geometry.location;
                    map.setCenter(newLocation);
                    map.setZoom(10);
                    $.ajax({
                        method: 'POST',
                        url: '{{ 'fetch/shops' }}',
                        dataType: 'json',
                        headers: {
                            "X-CSRF-TOKEN": csrfToken, // Include the CSRF token in the headers
                            Authorization: "Bearer " +
                                csrfToken, // Include the CSRF token as Authorization Bearer
                            // Other headers...
                        },
                        success: function(data) {
                            console.log(data);
                            displayStores(data.shops);
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    });

                } else {
                    return $('.lists').html('<ul><p> No Results Found </p></ul>');
                }
            });
        }

        function displayStores(stores) {

            lists.empty();

            // Clear existing markers
            markers.forEach(function(marker) {
                marker.setMap(null);
            });

            markers = [];

            var searchLocation = map.getCenter(); // Use the center of the map as the searched location

            for (var i = 0; i < stores.length && i < $("#limit").val(); i++) {
                var store = stores[i];

                var storePosition = new google.maps.LatLng(store.latitude, store.longitude);

                // Calculate distance between the searched location and the store
                var distanceInMeters = haversineDistance(
                    searchLocation.lat(),
                    searchLocation.lng(),
                    storePosition.lat(),
                    storePosition.lng()
                );

                // Convert distance from meters to kilometers
                var distanceInKm = distanceInMeters / 1000;

                // Check if the store is within the desired radius (e.g., 10 km)
                if (distanceInKm <= ($("#radius").val() / 1000)) {
                    var marker = new google.maps.Marker({
                        position: storePosition,
                        map: map,
                        title: store.name
                    });

                    // Store the marker in the markers array
                    markers.push(marker);

                    marker.addListener('click', function(store) {
                        return function() {
                            // Zoom in on the clicked marker's location
                            map.setCenter(this.getPosition());
                            map.setZoom(12);

                            // Run your custom function when the marker is clicked
                            highlightStore(store.id);

                            // Open infowindow or perform other actions as needed
                            // infowindow.setContent(store.name);
                            // infowindow.open(map, marker);
                        };
                    }(store));

                    var destination = new google.maps.LatLng(store.latitude, store.longitude);

                    var request = {
                        origin: newLocation,
                        destination: destination,
                        travelMode: 'DRIVING'
                    };

                    directionsService.route(request, function(result, status) {
                        if (status == 'OK') {
                            // directionsDisplay.setDirections(result);
                            var route = result.routes[0];

                            route.legs.forEach(function(leg) {
                                str = leg.distance.text;
                            });
                        }
                    });

                    var storeInfo = '<ul id="store_' + store.id + '" class="store-ul"><li>' +
                        '<h4><a target="_blank" href="' + store.url + '">' + store.name + '</a></h4>' +
                        '<address>' +
                        '<p>' + store.address + '</p>' +
                        '</address>' +
                        '<p class="phone m-0"><strong>Phone: </strong> <a href="tel:' + store.tel + '">' + (
                            store
                            .tel ||
                            'NA') +
                        '</a>' +
                        '</p>' +
                        '<p class="email m-0"><strong>Email: </strong> <a href="mailto:' + store.email +
                        '">' +
                        (
                            store
                            .email ||
                            'NA') +
                        '</a>' +
                        '</p>' +
                        '<br><a target="_blank" href="' + store.url + '" class="directions-link">Website</a>' +
                        '<br><a href="#!" class="directions-link" data-id="' + store.id +
                        '" onclick="viewOnMap(this, event)" data-lat="' +
                        store.latitude + '" data-lng="' + store.longitude +
                        '">View on map</a>' +
                        '<br><a href="#!" class="directions-link" onclick="directionUpdate(this, event)" data-lat="' +
                        store.latitude + '" data-lng="' + store.longitude +
                        '">Directions</a>' +
                        '</li></ul>';
                    lists.append(storeInfo);
                }
            }
        }
    });

    function highlightStore(store) {
        $(".store-ul").removeClass('active');
        $('#store_' + store).addClass('active');

        var targetDiv = $('#store_' + store);
        var container = $('.lists');

        // Calculate the relative scroll position within the container
        var scrollPosition = targetDiv.offset().top - container.offset().top + container.scrollTop();

        // Animate the scroll to the calculated position
        container.animate({
            scrollTop: scrollPosition
        }, 500);
    }

    function viewOnMap(elm, e) {
        e.preventDefault();
        var destinationLat = $(elm).data('lat');
        var destinationLng = $(elm).data('lng');
        var id = $(elm).data('id');

        highlightStore(id);

        // Set the center of the map to the selected store's location
        map.setCenter(new google.maps.LatLng(destinationLat, destinationLng));

        // Zoom in on the selected store's location (adjust the zoom level as needed)
        map.setZoom(12);

        // Optionally, you can open an infowindow or perform other actions

        // You can also call calculateAndDisplayRoute if you want to show directions
        // calculateAndDisplayRoute(destinationLat, destinationLng, 'list');
    }

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

    function calculateAndDisplayRoute(destinationLat, destinationLng, type) {
        var destination = new google.maps.LatLng(destinationLat, destinationLng);

        var request = {
            origin: newLocation,
            destination: destination,
            travelMode: 'DRIVING'
        };

        console.log(request);

        if (type == 'list') {
            directionsService.route(request, function(result, status) {
                if (status == 'OK') {
                    directionsDisplay.setDirections(result);
                    var route = result.routes[0];
                    displayTurnByTurnDirections(route);
                } else {
                    // alert('Directions request failed due to ' + status);
                }
            });
        }
    }

    function displayTurnByTurnDirections(route) {
        lists.empty();
        lists.append(
            "<div class='text-left pb-2'><a onclick='triggerForm()' href='#!'>Back</a></div>");

        route.legs.forEach(function(leg) {

            var totalDistance = 0;
            var totalDuration = 0;

            lists.append(
                "<div class='text-left pb-2'>" + leg.distance.text + ' - ' + leg
                .duration
                .text +
                "</div>");

            leg.steps.forEach(function(step, index) {
                console.log(step);
                var directionInfo = '<ul class="pl-0"><li class="d-flex ">' +
                    '<div class="ltysecty">' + (index + 1) + ' </div> ' +
                    '<div class="mdlsecty">' + step.instructions + ' </div> ' +
                    '<div>' + step.distance.text + ' </div></li></ul>';
                lists.append(directionInfo);
            });
        });
    }

    function directionUpdate(elm, e) {
        e.preventDefault();
        var destinationLat = $(elm).data('lat');
        var destinationLng = $(elm).data('lng');

        calculateAndDisplayRoute(destinationLat, destinationLng, 'list');
    }

    function triggerForm() {
        $('#search-form').trigger('submit');
    }
</script>
<x-userFooter />
