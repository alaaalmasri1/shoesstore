 
      ClassicEditor
              .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
        
        
 function loadusersonline()
 {
     $.get("function.php?onlineusers=results",function(data){
         $(".usersonline").text(data);
     });
 }
 setinterval(function(){
    loadusersonline();         
 },500);
        
 
 
    
     