<template>
    <div class="popover-container ">
        <div class="popover-item">

            <div class="" >

                <a v-popover:curriculum  class="searchBy btn blue-btn ">
                              Curriculum
                              <span class="fa fa-chevron-down pull-left"></span>
                          </a>
                    <popover name="curriculum">
                        <div class="sortByMethod">Near by</div>
                        <div class="sortByMethod">Lowest price</div>
                    </popover>

            </div>
            <div class="">

                          <a v-popover:schoolStage class="searchBy btn  blue-btn">
                              School stage
                             <span class="fa fa-chevron-down pull-left"></span>
                          </a>
                    <popover name="schoolStage">
                        <div class="sortByMethod">Near by</div>
                        <div class="sortByMethod">Lowest price</div>
                    </popover>
            </div>
        </div>

        <div class="popover-item">
            <div class="">
                          <a v-popover:subject class="searchBy btn blue-btn">
                              Subject
                               <span class="fa fa-chevron-down pull-left"></span>
                          </a>
                    <popover name="subject">
                        <div class="sortByMethod">Near by</div>
                        <div class="sortByMethod">Lowest price</div>
                    </popover>
            </div>
            <div class="">
                          <a v-popover:sortBy class="searchBy btn blue-btn">
                              Sort By
                              <span class="fa fa-chevron-down pull-left"></span>
                          </a>
                    <popover name="sortBy">
                        <div class="sortByMethod">Near by</div>
                        <div class="sortByMethod">Lowest price</div>
                        <div class="sortByMethod">Top rated</div>
                    </popover>
            </div>
        </div>

        <div class="popover-item">
            <div class="">
                <a v-popover:subject class="searchBy btn blue-btn">
                    Subject
                    <span class="fa fa-chevron-down pull-left"></span>
                </a>
                <popover name="subject">
                    <div class="sortByMethod">Near by</div>
                    <div class="sortByMethod">Lowest price</div>
                </popover>
            </div>
            <div class="">
                <a v-popover:sortBy class="searchBy btn blue-btn">
                    Sort By
                    <span class="fa fa-chevron-down pull-left"></span>
                </a>
                <popover name="sortBy">
                    <div class="sortByMethod">Near by</div>
                    <div class="sortByMethod">Lowest price</div>
                    <div class="sortByMethod">Top rated</div>
                </popover>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>

<style scoped>
    .popover-container{

        flex-direction: column;
        padding : 10% ;
    }
    .popover-item{
        display : flex  ;
        justify-content: space-around;
    }
    @media (max-width: 700px) {
        .popover-item{
            display : flex  ;
            flex-direction :column ;
            justify-content: space-around;
        }
        .blue-btn {
            min-width : 200px !important;
        }
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
</style>