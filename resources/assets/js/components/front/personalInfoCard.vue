<template>
    <div>
    <div class="flex-row m-4">
        <div class="text-center">
            <p class="subtitle">Male</p>
            <h4 class="title headline">Gender</h4>
        </div>
        <div class="text-center">
            <p class="subtitle">25</p>
            <h4 class="title headline">Age</h4>
        </div>
    </div>
        <div class="flex-column">
            <h3 class="title headline">About</h3>
            <div class="about subtitle">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at dignissimos ea earum excepturi facere facilis, libero magni officia officiis optio provident quia reprehenderit sunt suscipit ut vel voluptatem voluptates.
            </div>
        </div>
        <div class="flex-column">
            <h3 class="title headline">Video tutorial</h3>
            <div class="video">
                <video src=""></video>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>

<style scoped>

    .info-container{
        display : flex ;
        flex-direction : column ;
    }
    .flex-column{
        display :  flex ;
        flex-direction : column;
        align-items :center;
    }
    .flex-row{
        display : flex ;
        flex-direction : row !important ;
        justify-content : space-around;
    }
    .title{
        font-weight : bold ;
        font-size : 17px;
        text-align : center;
    }
    .subtitle {
        font-size : 16px;
        text-align : center;
    }
   .about {
       min-height : 100px;
   }
    .video{
        min-height : 100px ;
        widht : 100%;
    }
</style>