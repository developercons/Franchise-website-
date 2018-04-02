$(document).ready(function(){

})

function modifyInfo(target,value){
    
   $.ajax({
       type:'POST',
       url :$modifyCandidatURL,
       data : {
         target : target,
         value : value,
       },
       beforeSend : function(){
         $(".loading").fadeIn();
       },
       success : function(data){
          $(".loading").hide();
          console.log(data.success);
          if(data.success==true){
              console.log("sdds");
            $(".fc-success-dialog").slideDown();
            setTimeout(function(){ $(".fc-success-dialog").slideUp(); }, 3500);
          } else {
            $(".fc-error-dialog").slideDown();
            setTimeout(function(){ $(".fc-error-dialog").slideUp(); }, 3500);
          }
       },
       error : function(err){
             $(".loading").hide();
             $(".fc-error-dialog").slideDown();
             setTimeout(function(){ $(".fc-error-dialog").slideUp(); }, 3500);
             console.log(err);
       }
   })

}