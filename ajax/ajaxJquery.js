
var request;
$(document).ready(function () {
    $("#signUp").submit(function (event) {
        if (request) {
            request.abort();
        }
        var $form = $(this);
        var serializedData = $form.serialize();
        request = $.ajax({
            url:'../signUpCont.php',
            type:'POST',
            data: serializedData
        });

        request.fail(function (jqXHR, textstatus, errorThrown){
            console.error(
                "Error: "+
                textStatus, errorThrown
            );
        });

        request.always(function () {
            $inputs.prop("disabled", false);
        });
        event.preventDefault();
    });
});