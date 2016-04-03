var placeSearch, autocomplete, autocompletedId;
var componentForm = {
    locality: 'long_name',
    country: 'long_name',
    postal_code: 'short_name'
};

function initAutocomplete(elementId) {
    autocompletedId = elementId;
    // Create the autocomplete object, restricting the search to geographical

    // var options = {
    //     types: ['(cities)'],
    //     componentRestrictions: {country: 'fr'}
    // };
    // location types.
    autocomplete = new google.maps.places.Autocomplete(
        /** @type {!HTMLInputElement} */(document.getElementById(elementId)),
        {types: ['geocode'], componentRestrictions: {country: 'fr'}});

    // When the user selects an address from the dropdown, populate the address
    // fields in the form.
    autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
    // Get the place details from the autocomplete object.
    var place = autocomplete.getPlace();
    //
    // for (var component in componentForm) {
    //     document.getElementById(component).value = '';
    //     document.getElementById(component).disabled = false;
    // }
// console.log(place.name);

    document.getElementById(autocompletedId).value = place.name;
    // Get each component of the address from the place details
    // and fill the corresponding field on the form.
    // for (var i = 0; i < place.address_components.length; i++) {
    //     var addressType = place.address_components[i].types[0];
    //     console.log(addressType);
    //     if (componentForm[addressType]) {
    //         val = place.address_components[i][componentForm[addressType]];
    //         document.getElementById(addressType).value = val;
    //     }
    // }
}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
            console.log(position);
            codeLatLng(position.coords.latitude, position.coords.longitude);
        });
    }
}

function codeLatLng(lat, lng) {
    var latlng = new google.maps.LatLng(lat, lng);
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({'latLng': latlng}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            // console.log(results)
            if (results[1]) {
                //formatted address
                // alert(results[0].formatted_address)
                //find country name
                for (var i=0; i<results[0].address_components.length; i++) {
                    for (var b=0;b<results[0].address_components[i].types.length;b++) {

                        //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
                        if (results[0].address_components[i].types[b] == "locality") {
                            //this is the object you are looking for
                            city= results[0].address_components[i];
                            break;
                        }
                    }
                }
                //city data
                document.getElementById(autocompletedId).value = city.short_name;
                // alert(city.short_name + " " + city.long_name)
            } else {
                // alert("No results found");
            }
        } else {
            // alert("Geocoder failed due to: " + status);
        }
    });
}