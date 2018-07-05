/*tab for  main and show prod*/
$( function() {
    $( "#tabs" ).tabs();
} );

/*make button more businesses*/
$( function() {

    var isBusinessesLoading = false;

    $( ".js-load-more-businesses-button" ).click(function (event) {

        event.preventDefault();

        if (isBusinessesLoading){
            return;
        }

        isBusinessesLoading = true;

        let offset = $('.js-business-preview').length;

        var url = window.location.href;

        $.get( url, { offset: offset} )

            .done(function( data ) {

                isBusinessesLoading = false;

                $('.js-businesses-container').append(data.html);

                if ($('.js-business-preview').length >= data.count){

                    $('.js-load-more-businesses-button-container').remove();
                }
            });
    });
});
/*show password*/
function showPassword() {
    var x = document.getElementById("showPass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}