var base = "http://localhost/evoting/";

function set_combo(id, action)
{

//    alert(id);
//    alert(action);
    $data = {id: id, action: action};
    var url = base + 'backend/' + action;
    $.post(url, $data, function (ans)
    {
        //alert(ans); 
        $("#" + action).html(ans);
    });
}

function set_insert(id)
{
    var txt = $('#emailsub').val();
    if (txt == "") {
        $('#emailerr').html('Enter Email Address');
        $('#emailerr').css('color', 'red');
    } else {

        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(txt)) {
            $('#emailerr').html('Enter Valid Email Address');
            $('#emailerr').css('color', 'red');
        } else {
            var action = "emailsubscriber";
            $data = {id: txt, action: action};
            var url = base + 'backend/' + action;
            $.post(url, $data, function (ans)
            {
                if (ans == 1) {
                    $('#emailsub').val('');
                    $('#emailerr').html('Insert Successfully.');
                    $('#emailerr').css('color', 'green');
                } else {
                    $('#emailerr').html('Already Exist.');
                    $('#emailerr').css('color', 'red');
                }
            });
        }
    }
}

function candidate(id)
{
    //alert(id );
    var action = "candidate";
    $data = {id: id, action: action};
    var url = base + 'backend/' + action;
    $.post(url, $data, function (ans)
    {
        //alert(ans);
        $('#candidate').html(ans);
    });
}

function news(id, action)
{
    //alert(id + action); 
    $data = {id: id, action: action};
    var url = base + 'backend/' + action;
    $.post(url, $data, function (ans)
    {

        $('#' + action).html(ans);
    });
}
function active(id, action)
{
    //alert(id);
    if ($("#" + id).hasClass("deactive"))
    {

        $("#" + id).removeClass('deactive');
        $("#" + id).addClass('active');
        $("#" + id).html("Active");
        $("#" + id).css('color', 'green');
    } else
    {

        $("#" + id).removeClass('active');
        $("#" + id).addClass('deactive');
        $("#" + id).html("Deactive");
        $("#" + id).css('color', 'red');
    }
    $data = {id: id, action: action};
    var url = base + "backend/active";
    $.post(url, $data);
}

function block(id, action)
{
    //alert(id+" "+action);
    $data = {id: id, action: action};
    var url = base + "backend/block";
    $.post(url, $data, function (ans)
    {
//        alert(ans);
        $("#blockcandidate").html(ans);
    });
}
function unblock(id, action)
{
    //alert(id+" "+action);
    $data = {id: id, action: action};
    var url = base + "backend/unblock";
    $.post(url, $data, function (ans)
    {
//        alert(ans);
        $("#unblockcandidate").html(ans);
    });
}
function ublock(id, action)
{
//   alert(id+" "+action);
    if ($("#" + id).hasClass("bl"))
    {

        $("#" + id).removeClass('bl');
        $("#" + id).addClass('unbl');
        $("#" + id).html("Unblock Candidate");

    } else
    {

        $("#" + id).removeClass('unbl');
        $("#" + id).addClass('bl');
        $("#" + id).html("Block Candidate");

    }
    $data = {id: id, action: action};
    var url = base + "backend/ublock";

    $.post(url, $data);
}

function setcandidate(id)
{

    var action = "setcandidate";
    //alert(id+" "+action);
    $data = {id: id, action: action};
    var url = base + 'backend/' + action;
    $.post(url, $data, function (ans)
    {
        //alert(ans);
        $('#setcandidate').css('color', '#1c1c1c');
        $('#setcandidate').css('font-size', '30px');
        $('#setcandidate').css('text-align', 'center');
        $('#setcandidate').css('line-height', '1.8em');
        $('#setcandidate').css('font-weight', '400');
        $('#setcandidate').css('padding-top', '30px');
        $('#setcandidate').html("Loading...");

        var c = 0;
        var cc = setInterval(function () {
            c++;
            if (c == 1)
            {
                clearInterval(cc);
                $('#setcandidate').css('color', '#333');
                $('#setcandidate').css('font-size', '15px');
                $('#setcandidate').css('text-align', 'center');
                $('#setcandidate').css('line-height', '1.8em');
                $('#setcandidate').css('font-weight', '400');
                $('#setcandidate').html(ans);
            }
        }, 500);

    });
}

function giveelection(id, action)
{

    // alert(id+" "+action);
    $data = {id: id, action: action};
    var url = base + 'backend/' + action;
    $.post(url, $data, function (ans)
    {
        // alert(ans);
        $("#" + action).html(ans);
    });
}

function getfinalresult(id, action)
{
    $data = {id: id, action: action};
    var url = base + 'backend/' + action;
    $.post(url, $data, function (ans)
    {
        $('#' + action).html(ans);
    });
}
