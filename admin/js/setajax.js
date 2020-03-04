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
//function active(id,action)
//{
//    if($("#"+id).hasClass("fa-toggle-off"))
//    {
//       $("#"+id).removeClass('fa-toggle-off');
//       $("#"+id).addClass('fa-toggle-on');
//    }
//    else
//    {
//       $("#"+id).removeClass('fa-toggle-on');
//       $("#"+id).addClass('fa-toggle-off');
//    }
//    $data={id:id,action:action};
//        var url=base+"backend/active";
//        $.post(url,$data);
//}
function act(id, action)
{
    $data = {id: id, action: action};
    var url = base + "backend/act";
    $.post(url, $data,function (ans){
        if(ans == "1"){
            $('#'+id).addClass('fa-check-circle text-success').removeClass('fa-ban text-danger');
            $('#'+id).attr('title','Activate this voter');
        }else{
            $('#'+id).addClass('fa-ban text-danger').removeClass('fa-check-circle text-success');
            $('#'+id).attr('title','Deactivate this voter');
        }
    });
}
