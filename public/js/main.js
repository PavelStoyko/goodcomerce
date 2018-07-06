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

    var funding = $("#funding").val();
    if(funding>cost) {alert('You can not loan more than'+cost); return;}

    if(funding<repayment) {var count=funding;}
    else {count=repayment;}

    funding = parseInt(funding)+(funding*finalInterest);

    if(count){funding=funding/count;}
    else funding=funding/repayment;

    funding = Math.round(funding*100)/100;

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


        $(".plan_info").append("<tr><td>Instalment -    "+(i+1)+"</td><td>"+funding+"</td><td>"+date+"</td></tr>");
    }

}