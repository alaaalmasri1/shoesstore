         var div_box="<div id='load-screen'><div id='loading'></div></div>" ;
$("body").prepend(div_box);
$('#load-screen').delay(700).fadeOut(900,function(){
    $(this).remove();
});
