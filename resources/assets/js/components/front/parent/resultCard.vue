<template>

        <div class="card card-body m-3 pt-3 pb-3">
            <div class="col-md-4 avatar-container">
                <div class="avatar text-center ">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="rounded-circle" alt="First sample avatar image">

                </div>
            </div>
            <div class="col-md-8">
                <div class="info-container">

                        <h3 class="headline mb-0">

                            {{ item.name}}

                        </h3>
                    <br>


                        <div class="">
                            <h5 class=" ">
                                <i class="fa fa-user"></i>
                                {{ item.email}}

                            </h5>
                            <h5>
                                <i class="fa fa-user"></i>
                                {{item.username}}

                            </h5>
                            <h5>
                                <i class="fa fa-book"></i>
                                {{item.schoolStage}}

                            </h5>

                        </div>

                       <div class="btn-more-container">

                           <a class="btn-more btn btn-info text-center center-block" @click="alertDisplay" style=""
                              href="#"
                           >
                               Add Student

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
            addStudent(){

            } ,
            alertDisplay() {
                this.$swal('Request sent', 'Waiting for student confirmation');
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