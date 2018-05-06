<template>
    <div class="">
        <div class="row">
            <label class="typo__label">School stage </label>
            <multiselect v-model="selectedTeachingInfos.subjects"  :options="teachingInfos.subjects" @input="updateSelectedTeachingInfos('subjects')"  :multiple="true" :close-on-select="false" :clear-on-select="false" :hide-selected="true" :preserve-search="true" placeholder="Pick Subjects" label="en_name" track-by="en_name" :preselect-first="false">
                <template slot="tag" slot-scope="props"><span class="custom__tag"><span  class="multiselect__clear">{{ props.option.en_name }}</span><span class="custom__remove" @click="props.remove(props.option)">❌</span></span></template>
            </multiselect>
        </div>
        <div class="row">
            <label class="typo__label">Speciality </label>
            <multiselect v-model="selectedTeachingInfos.options"  :options="teachingInfos.options"  @input="updateSelectedTeachingInfos('options')" :multiple="true" :close-on-select="false" :clear-on-select="false" :hide-selected="true" :preserve-search="true" placeholder="Pick Teaching Options" label="en_name" track-by="en_name" :preselect-first="false">
                <template slot="tag" slot-scope="props"><span class="custom__tag"><span>{{ props.option.en_name }}</span><span class="custom__remove" @click="props.remove(props.option)">❌</span></span></template>
            </multiselect>
        </div>
        <div class="row">
            <label class="typo__label">High school stage  </label>
            <multiselect v-model="selectedTeachingInfos.types"  :options="teachingInfos.types"  @input="updateSelectedTeachingInfos('types')" :multiple="false" :close-on-select="false" :clear-on-select="false" :hide-selected="true" :preserve-search="true" placeholder="Pick Teaching Type" label="en_name" track-by="en_name" :preselect-first="false">
                <template slot="tag" slot-scope="props"><span class="custom__tag"><span>{{ props.option.en_name }}</span><span class="custom__remove" @click="props.remove(props.option)">❌</span></span></template>
            </multiselect>
        </div>
        <div class="row">
            <div class="form-group">
                <label>Test Period (Days)</label>

                <input type="number" class="controls pac-input" name="name" required=""><span
                    class="highlight"></span> <span class="bar"></span>
            </div>
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