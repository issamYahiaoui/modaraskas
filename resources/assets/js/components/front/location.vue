<template>
    <div class="">
        <div class="card animated ">
            <div class="row justify-content-center">
                <GmapPlaceInput  ref="autocomplete" className="form-control" :selectFirstOnEnter="true"
                                :placeholder="getLocation"></GmapPlaceInput>

                <gmap-map
                        :center="center"
                        :zoom="7"
                        style="width: 500px; height: 300px"
                >

                    <GmapMarker
                            v-if="this.place"
                            label="★"
                            :position="{
          lat: this.place.geometry.location.lat(),
          lng: this.place.geometry.location.lng(),
        }"
                    />

                </gmap-map>
            </div>
            </div>
        </div>

</template>

<script>
    export default {
        data () {
            return {
                center : {lat : 0 , lng : 0 } ,
                place : null ,
                markers: []
            }
        } ,
        computed: {
            country  : {

            } ,
            city : {

            }
        },
        methods : {
            setPlace(place) {
                this.place = place
            },
            usePlace(place) {
                if (this.place) {
                    this.markers.push({
                        position: {
                            lat: this.place.geometry.location.lat(),
                            lng: this.place.geometry.location.lng(),
                        }
                    })
                    this.place = null;
                }
            }

        }
    }

</script>

<style scoped>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
    #map {
        height: 100%;
    }

    .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }

    #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
    }

    #pac-input:focus {
        border-color: #4d90fe;
    }




</style>