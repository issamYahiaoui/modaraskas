<template>

        <div class="card">

              <div class="popover-container">
                  <div class="" v-show="this.online" >
                      <div class="">
                          <tooltip/>
                          <span v-popover:curriculum  class="searchBy">
                              Curriculum
                              <span class="fa fa-chevron-down pull-left"></span>
                          </span>
                          <popover name="curriculum">
                              <div class="sortByMethod">Near by</div>
                              <div class="sortByMethod">Lowest price</div>
                          </popover>
                      </div>
                  </div>
                  <div class="">
                      <div class="">
                          <span v-popover:schoolStage class="searchBy">
                              School stage
                             <span class="fa fa-chevron-down pull-left"></span>
                          </span>
                          <popover name="schoolStage">
                              <div class="sortByMethod">Near by</div>
                              <div class="sortByMethod">Lowest price</div>
                          </popover>
                      </div>
                  </div>
                  <div class="">
                      <div class="">
                          <span v-popover:subject class="searchBy">
                              Subject
                               <span class="fa fa-chevron-down pull-left"></span>
                          </span>
                          <popover name="subject">
                              <div class="sortByMethod">Near by</div>
                              <div class="sortByMethod">Lowest price</div>
                          </popover>
                      </div>
                  </div>
                  <div class="">
                      <div class="">
                          <span v-popover:sortBy class="searchBy">
                              Sort By
                              <span class="fa fa-chevron-down pull-left"></span>
                          </span>
                          <popover name="sortBy">
                              <div class="sortByMethod">Near by</div>
                              <div class="sortByMethod">Lowest price</div>
                              <div class="sortByMethod">Top rated</div>
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

</style>