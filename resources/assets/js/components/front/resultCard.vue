<template>

        <div class="card card-body m-3 pt-3 pb-3">
            <div class="col-md-4 avatar-container">
                <div class="avatar text-center ">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="rounded-circle" alt="First sample avatar image">
                    <!--<div class="">-->
                        <!--<h5 class="font-weight-bold">-->
                            <!--<strong> {{ item.name }}</strong>-->
                        <!--</h5>-->
                        <!--<p class="grey-text">  {{ item.email }}</p>-->

                    <!--</div>-->

                </div>
            </div>
            <div class="col-md-8">
                <div class="info-container">

                        <h3 class="headline mb-0">

                            {{ item.name}}


                        </h3>
                        <h3>
                            <star-rating :show-rating="false" :rtl="false" :inline="true"
                                         :star-size="15"
                                         :rating="4" :read-only="true"
                                         :increment="0.01"></star-rating>
                        </h3>
                        <div class="">

                            <h5>
                                <i class="fa fa-map-marker"></i>
                                {{item.location}}

                            </h5>
                            <h5>
                                <i class="fa fa-money"></i>
                                100 SR / hour - 1500 SR/subject

                            </h5>

                        </div>

                       <div class="btn-more-container">

                           <a class="btn-more btn btn-info text-center center-block" style=""
                              :href="this.url"  @click="getMoreInfo()"

                           >
                               MORE INFO

                           </a>
                       </div>





                </div>

            </div>

        </div>

</template>

<script>
    export default {
        data() {
            return {
                url : urlBase+'/teacher/'+this.item.id +'/profile'
            }

        },

        props : ['item'] ,
        methods : {
            rating :function (){
                    return 5;
            },
            getMoreInfo(){

            }
        }

    }
</script>

<style scoped>
    .card{
        max-height: 240px;

    }
    img{
      height : 150px !important ;
        margin-bottom : 5px;
    }
    .avatar-container{
        border-right : 1px solid #007bff ;
        height: 200px;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }
    h2, h3, h4, p {
        margin-right: 10px;
        margin-left: 10px
    }
    .fa {
        /*margin-left: 10px;*/
        margin-right: 10px;
    }
    .btn--more-container.btn-more{
        font-size: 15px;
        width : 100% ;
        height : 100%
    }
    .btn-more-container{
        display : flex ;
        justify-content : flex-end
    }

    @media (max-width: 700px) {
        .card{
            max-height : 500px
        }
        .btn-more-container{
            display : flex ;
            justify-content : center
        }
        .avatar-container{
            border : none;
            height: 200px;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }
        .info-container {
            text-align : center
        }
    }

</style>