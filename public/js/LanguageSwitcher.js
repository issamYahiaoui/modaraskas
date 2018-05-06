$(document).ready(function () {


    console.log('switch language')
    //LanguageSwitcher
    $('.switchLang').click(function () {
        var locale = $(this).attr('id');
        $.ajax({
            data: {
                '_token' : _token,
                'locale': locale
            },
            type: 'POST',
            dataType: 'json',
            url: urlBase+'/language',
            success: function (data) {

                window.location.reload(true);
            }, error: function () {

            }, complete: function () {

                //
            }

        });

    });




});