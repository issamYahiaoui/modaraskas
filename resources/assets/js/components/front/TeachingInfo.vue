<template>

   <div class="" >

     <div class="row">
         <label class="typo__label">School stage </label>
         <multiselect v-model="selectedTeachingInfos.schoolStages"  :options="teachingInfos.schoolStages" @input="updateSelectedTeachingInfos('schoolStages')"  :multiple="true" :close-on-select="false" :clear-on-select="false" :hide-selected="true" :preserve-search="true" placeholder="Pick school stage" label="en_name" track-by="en_name" :preselect-first="false">
             <template slot="tag" slot-scope="props"><span class="custom__tag"><span  class="multiselect__clear">{{ props.option.en_name }}</span><span class="custom__remove" @click="props.remove(props.option)">❌</span></span></template>
         </multiselect>
     </div>
       <div class="row">
           <label class="typo__label">Speciality </label>
           <multiselect v-model="selectedTeachingInfos.specializations"  :options="teachingInfos.specializations"  @input="updateSelectedTeachingInfos('highSchoolStages')" :multiple="true" :close-on-select="false" :clear-on-select="false" :hide-selected="true" :preserve-search="true" placeholder="Pick speciality" label="en_name" track-by="en_name" :preselect-first="false">
               <template slot="tag" slot-scope="props"><span class="custom__tag"><span>{{ props.option.en_name }}</span><span class="custom__remove" @click="props.remove(props.option)">❌</span></span></template>
           </multiselect>
       </div>
       <div class="row">
           <label class="typo__label">High school stage  </label>
           <multiselect v-model="selectedTeachingInfos.highSchoolStages"  :options="teachingInfos.highSchoolStages"  @input="updateSelectedTeachingInfos('specializations')" :multiple="true" :close-on-select="false" :clear-on-select="false" :hide-selected="true" :preserve-search="true" placeholder="Pick high school stage" label="en_name" track-by="en_name" :preselect-first="false">
               <template slot="tag" slot-scope="props"><span class="custom__tag"><span>{{ props.option.en_name }}</span><span class="custom__remove" @click="props.remove(props.option)">❌</span></span></template>
           </multiselect>
       </div>
       <div class="row">
           <label class="typo__label">Curriculum </label>
           <multiselect v-model="selectedTeachingInfos.curriculums"  :options="teachingInfos.curriculums"  @input="updateSelectedTeachingInfos('curriculums')" :multiple="true" :close-on-select="false" :clear-on-select="false" :hide-selected="true" :preserve-search="true" placeholder="Pick curriculum" label="en_name" track-by="en_name" :preselect-first="false">
               <template slot="tag" slot-scope="props"><span class="custom__tag"><span>{{ props.option.en_name }}</span><span class="custom__remove" @click="props.remove(props.option)">❌</span></span></template>
           </multiselect>
       </div>
       <div class="row justify-content-center"><div><div class="col-md-12 text-center"><button @click="postSelectedTeachingInfos"type="submit" class="btn btn-info btn-circle btn-lg"><i class="fa fa-check"></i></button></div></div></div>

   </div>
</template>

<script>
    import Vuex from 'vuex';
    export const {mapState , mapMutations}  = Vuex;
    export default {
        data () {
            return {
                loading : true ,
            }
        } ,
        computed : {
            ...mapState(['teachingInfos', 'selectedTeachingInfos'])

        },
        mounted(){
                this.$store.dispatch('trigger',['fetchTeachingInfos','getSelectedTeachingInfos' ])

        } ,

        methods :  {
            ...mapMutations(['fetchTeachingInfos','updateSelectedTeachingInfos','postSelectedTeachingInfos' , 'getSelectedTeachingInfos']) ,


        }
    }
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style scoped>

    .row{
        margin : 5%;
    }
</style>