<template>
    <div class="card-result">

        <student-result-card   v-for="teacher in list" :item="teacher" class="row" />
    </div>
</template>

<script>
    export default {
        data() {
            return {
                list: [{
                    'id': 1,
                    'name' : "Student Name" ,
                    'email' : "student@gmail.com"  ,
                    'username' : 'student ',
                    'schoolStage' : 'Elementary school'

                },
                    {
                        'id': 1,
                        'name' : "Student Name" ,
                        'email' : "student@gmail.com"  ,
                        'username' : 'student ',
                        'schoolStage' : 'Elementary school-1'

                    },
                    {
                        'id': 1,
                        'name' : "Student Name" ,
                        'email' : "student@gmail.com"  ,
                        'username' : 'student ',
                        'schoolStage' : 'Elementary school-1'

                    },
                    {
                        'id': 1,
                        'name' : "Student Name" ,
                        'email' : "student@gmail.com"  ,
                        'username' : 'student ',
                        'schoolStage' : 'Elementary school-1'

                    },
                    ] ,
                name: "issam"
            };
        },
        created() {
            console.log('my name is ',this.list)
                this.fetchTeachers() ;
        },
        methods: {

                fetchTeachers : function(){
                    axios.get(urlBase+'/teacher')
                        .then(function (resp) {

                            console.log(resp.data)
                        })
                        .catch(function (resp) {
                            console.log(resp);
                            alert("Could not load json");
                        });
                }
        }
    }
</script>
<style scoped>
    .card-result{
        width: 100%;
        background: #f8f9fa;
        margin: 5% auto;
        padding: 5%;
        box-sizing: content-box;
        border-raduis : 5%;
    }
</style>