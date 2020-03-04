$(document).ready(function (){
    
    $c = 0;
    $(".show").click(function ()
    {
        if ($c == 0)
        {
            $c = 1;
            $(".pass").attr("type", "text");
            $(".show").html("Hide");
           
        } 
        else
        {
            $c = 0;
            $(".show").html("Show");
            $(".pass").attr("type", "password");
        }
    });
    
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah1').show(500);
            $('#blah1').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}



