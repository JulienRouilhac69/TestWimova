$(document).ready(function(){
    var result = $( "div#result");
    $('#status').text('test');
    result.hide();
    
    $.ajax( {
        type: "GET",
        url: 'user.html',
        success: function( response ) {
            $('#call_js').text( response ); //Affichage de l'url cible, ici AjaxTemplate02.php, dans une DIV
            $('#status').text('Posté');
            result.show();
            //console.log( response );
        },
        error: function( response ) {
            $('#status').text('Erreur pour poster le formulaire : '+ response.status + " " + response.statusText);
            result.show();
            //console.log( response );
        }						
    } );
});