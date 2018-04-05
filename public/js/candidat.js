$(document).ready(function(){
  $(".btn-addCompetence").click(function(){
      var skills = [];
      $(".materialize-tags .chip").each(function(index,el){
            if(/^[a-zA-Z]+$/.test(el.innerText)){
                skills.push(el.innerText);
            } else {
              $(".skills-error").show();
              setTimeout(function(){ $(".skills-error").slideUp(); }, 5000);
              return;
            }
      })
      console.log(skills.join(','));
      $.ajax({
        type:'POST',
        url :$competenceURL,
        dataType: "json",
        data : {
          skills : "sdds",
        },
        beforeSend : function(){
          $(".loading").fadeIn();
        },
        success : function(data){
          console.log("data :" + data.success);
           $(".loading").hide();
           if(data.success==true){
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
  }) 
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