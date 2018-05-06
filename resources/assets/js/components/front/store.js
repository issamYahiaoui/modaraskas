import Vue from 'vue';
import Vuex from 'vuex';


Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {

        teachers : [] ,
        teachingInfos :{
            schoolStages : [] ,
            highSchoolStages : [] ,
            specializations : [] ,
            curriculums : [],
            types : [] ,
            subjects : [] ,
            options : [] ,
            testPeriod : null
        },

        selectedTeachingInfos : {
            schoolStages : [] ,
            highSchoolStages : [] ,
            specializations : [] ,
            curriculums : [] ,
            types : [] ,
            subjects : [] ,
            options : [] ,
            testPeriod : null
        } ,
        students : [] ,
        parents : [] ,
        user : {} ,
    },
    getters : {
        teachers (state) {return state.teachers} ,
        students(state) {return state.students},
        parents(state) {return state.parents} ,
        currentUser(state){return state.currentUser},
        teachingInfos(state){return state.teachingInfos},
        selectedTeachingInfos(state){return state.selectedTeachingInfos}

    } ,
    mutations : {
       fetchTeachingInfos(state){

            axios.get('teacher/teaching-info')
                .then(function (res){
                    console.log('res',res.data)
                    state.teachingInfos = res.data

                })
                .catch(function(){
                    console.log('load data failed ! ')
                })
        },
        getSelectedTeachingInfos(state){
            console.log('user id fetched .....',state.user.id)
            axios.get('teacher/'+state.user.id+'/selected-teaching-info')
                .then(function (res){
                    console.log('selected',res.data)
                    state.seletecTeachingInfos = res.data
                })
                .catch(function(){
                    console.log('load data failed ! ')
                })
        },
        postSelectedTeachingInfos(state){
           console.log('posting data .....', state.selectedTeachingInfos)
            axios.post('teacher/'+state.user.id+'/selected-teaching-info',state.selectedTeachingInfos)
                .then(function (res){
                    console.log('post finish ...')
                })
                .catch(function(){
                    console.log('post data failed ! ')
                })
        },
        updateSelectedTeachingInfos: function (state, selectedTeachingInfos,field) {
           switch(field){
               case 'schoolStage' :
                   state.selectedTeachingInfos.schoolStage.push(selectedTeachingInfos)
                   break
               case 'highSchoolStage' :
                   state.selectedTeachingInfos.highSchoolStage.push(selectedTeachingInfos)
                   break
               case 'specialization' :
                   state.selectedTeachingInfos.specialization.push(selectedTeachingInfos)
                   break
               case 'curriculum' :
                   state.selectedTeachingInfos.curriculum.push(selectedTeachingInfos)
                   break
           }
        },
       auth(state){

            axios.get('/auth-me')
                .then(function(res){
                   console.log('auth result :',res.data.id)
                    state.user = res.data
                })
        }

    } ,
    actions :{
         trigger({commit,state},mutations = []){
             if(!state.user.id) {
                 commit('auth')
             }

             var i =0
         mutations.forEach(function (mutation) {
                i++
                console.log(i+'coomit : ',mutation)
                 commit(mutation)
            })
        }
    }

});