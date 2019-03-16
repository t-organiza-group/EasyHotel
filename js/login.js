//--------------------------- Formulario Login-----------------------------

function sendLogin(){
    var fpU = ROT47(document.forms[0].elements[0].value);
    var fpP = ROT47(document.forms[0].elements[1].value);

var objJSON = {
    pfd: "Vendedor",
    fpU: fpU,
    fpP: fpP,
    browserInfo: {
        appCodeName: navigator.appCodeName,
        appName: navigator.appName,
        appVersion: navigator.appVersion,
        cookieEnabled: navigator.cookieEnabled,
        language: navigator.language,
        platform: navigator.platform,
        userAgent: navigator.userAgent
    },
    datasite: {
            "@accountID": "2",
            "@siteID": "3"
    }
};

$('#send').click(function(){
    var data = objJSON;
    $.ajax({
        url : 'http://104.130.222.221:1337/users/',
        data : data,
        method : 'GET', //en este caso
        dataType : 'json',
        success : function(response){
            alert("funciona bien");
        },
        error: function(error){
            alert("No funciona");
        }
    });
});
}