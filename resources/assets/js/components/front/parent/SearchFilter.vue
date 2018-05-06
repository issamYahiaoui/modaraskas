<template>

        <div class="card">

              <div class="popover-container">
                  <div class=""  >
                      <div class="">
                          <tooltip/>
                          <span v-popover:mobile  class="searchBy">
                               {{ __('lang.mobile') }}
                              <span class="fa fa-search pull-left"></span>
                          </span>
                          <popover name="mobile">
                              <input v-model="mobile" type="text" class="controls pac-input">
                          </popover>
                      </div>
                  </div>
                  <div class="">
                      <div class="">
                          <span v-popover:name class="searchBy">
                              {{ __('lang.name') }}
                             <span class="fa fa-search pull-left"></span>
                          </span>
                          <popover name="name">
                              <input v-model="name" type="text" class="controls pac-input">
                          </popover>
                      </div>
                  </div>
                  <div class="">
                      <div class="">
                          <span v-popover:email class="searchBy">
                               {{ __('lang.email') }}
                               <span class="fa fa-search pull-left"></span>
                          </span>
                          <popover name="email">
                              <input v-model="email" type="text" class="controls pac-input">
                          </popover>
                      </div>
                  </div>
                  <div class="">
                      <div class="">
                          <span v-popover:username class="searchBy">
                                {{ __('lang.username') }}
                              <span class="fa fa-search pull-left"></span>
                          </span>
                          <popover name="username">
                              <input v-model="username" type="text" class="controls pac-input">
                          </popover>
                      </div>
                  </div>
              </div>

        </div>
</template>
<script>


    export default {
        data() {
            return {

            }
        },
        props : ['online'],
        mounted() {


        }
    }
</script>
<style scoped>


    .card {

        width: 100%;
        padding: 4%;
        box-sizing: content-box;
    }
    .popover-container{
        display:  flex ;
        justify-content : space-around;
        align-items: center;
    }
    .fa {
        margin-left: 10px;
        margin-right: 10px;
    }
    .sortByMethod {
        text-align: center;
        border-bottom: #ccc solid 1px;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 15px;
        font-weight: bold;
        color: #182e6c;
        cursor: pointer;
    }

    .sortByMethod:hover {
        background: linear-gradient(#4c579b, #4c579b) !important;
        opacity : 0.9;
        color:white;
        border-bottom: rgb(39, 174, 96) solid 1px;
    }
    .searchBy {
        color: #182e6c;
        font-size: 17px;
        text-align: center;
        font-weight: bold;
        cursor: pointer;
    }

    .searchBy:hover {
        color:#4c579b !important ;
    }

    @media (max-width: 700px) {
        .popover-container{
            flex-direction: column;
            justify-content : flex-start;
            align-items : baseline;
        }
        .searchBy{
            margin : 5px
        }
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

    .pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 17px;
        font-weight: 400;

        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 100%;
    }

    .pac-input:focus {
        border-bottom-color: #4d90fe;
    }

</style>