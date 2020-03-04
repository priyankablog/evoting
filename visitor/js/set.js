$(document).ready(function ()
{
    $c = 0;
    $(".eye1").click(function ()
    {

        if ($c == 0)
        {
            $c = 1;

            $(".passme1").attr("type", "text");
            $(".eye1").html("Hide");
        } else

        {
            $c = 0;
            $(".eye1").html("Show");
            $(".passme1").attr("type", "password");
        }

    });
    $(".eye").click(function ()
    {
        if ($c == 0)
        {
            $c = 1;

            $(".passme").attr("type", "text");
            $(".eye").html("Hide");
        } else

        {
            $c = 0;
            $(".eye").html("Show");
            $(".passme").attr("type", "password");
        }

    });

});


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#pro_voter').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function idpreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#id_prv').show(500);
            $('#id_prv').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}