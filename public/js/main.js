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
function showPassword()
{
    var x = document.getElementById("showPass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}


/*script for start business*/
function changeFunding(){

    var funding_var = +$("#funding").val();
    if(funding_var>cost) {alert('You can not loan more than'+cost); return;}

    if(funding_var<=repayment) {var count=funding_var+1;}
    else {count=repayment+1;}

    funding_var = parseInt(funding_var)+parseInt(funding_var*finalInterest);

    if(count){funding_var=funding_var/count;}
    else funding_var=funding_var/repayment;
    funding_var = Math.round(funding_var*100)/100;

    var today = new Date();
    $(".plan_info tbody tr").remove();
    var month = today.getMonth();
    var year = today.getFullYear();



    for(var i=0; i<count; i++)
    {

        if(month==12){
            month=0;
            year=year+1;
        }
        month++;
        var date = today.getDate()+'-'+(month)+'-'+year;


        $(".plan_info").append("<tr><td>Instalment -    "+(i+1)+"</td><td>"+funding_var+"</td><td>"+date+"</td></tr>");
    }

}
