
$(function () {
    $('#post_location_form').on('click',function () {
        console.log('submitting ....')
        changeLocation('#location_form')
    })
})









/*** methods ***/


function changeLocation(form){
    console.log('posting...')
    axios.post(urlBase+'/user/1/location',serialize(form) )
        .then(function(res){
            window.location.reload(true);
        })
        .catch(function (err){

            alert(err)

        })
}







/** utils ****/
function serialize(form){
    var formData = {};
    $(form).find("input[name]").each(function (index, node) {
        formData[node.name] = node.value;
    });
    return formData;
}
