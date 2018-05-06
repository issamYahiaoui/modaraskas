<template>
    <div>

        <div class="row justify-content-center  ">

            <h5 class="m-3" >
                <i class="fa fa-map-marker"></i>
               my current location

            </h5>
            <br><br>

        </div>

        <gmap-map
                id="map"
                :center="center"
                :zoom="18"
                style="width: 100%; height: 300px ; position: abdolute ; bottom : 0"
        >
            <gmap-marker
                    :key="index"
                    v-for="(m, index) in markers"
                    :position="center = m.position"
                    :clickable="true"
                    :draggable="true"
                    @click="center=m.position"
            />
        </gmap-map>

    </div>
</template>

<style>

</style>

<script>
    export default{
        data(){
            return {
                center: {lat: 23.8103, lng: 90.4125},
                markers: [
                    {position: {lat: 10.0, lng: 10.0}}
                ],

                description: '',
                latLng: {},
                place: null
            }
        },

        mounted(){
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    let pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    console.log('my position : ', pos)
                    this.center.lat = pos.lat;
                    this.center.lng = pos.lng;
                    this.markers[0].position.lat = pos.lat;
                    this.markers[0].position.lng = pos.lng;

                    this.geocodeLatLng(new google.maps.Geocoder, pos, google.maps.InfoWindow);

                }.bind(this));
            }

        },
        methods: {
            setDescription(description){
                this.description = description
            },
            setPlace(place){
                this.latLng = {
                    lat: place.geometry.location.lat(),
                    lng: place.geometry.location.lng(),
                }
            },
            geocodeLatLng(geocoder, map, infowindow){
                geocoder.geocode({'location':this.center}, function(results, status){
                    console.log(results, status);
                });
            }
        },
    }
</script>