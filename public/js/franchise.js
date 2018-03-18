
$(document).ready(function(){
    onScrollNav(); 
    ShowRequestBar();
})

function onScrollNav(){
    window.onscroll = function(){
        if(window.pageYOffset > 100){
            $(".fc-navbar").addClass('fc-nav-fixed')
        }
        if(window.pageYOffset < 50){
            $(".fc-navbar").removeClass('fc-nav-fixed')
        }
    }
}

function ShowRequestBar(){
    $(".btn-request-show").click(function(){
        $(".fc-request-list").slideToggle("slow");
        $(this).toggle();
        $(".btn-request-complet").fadeIn();
    })

    $(".fc-request-close").click(function(){
        $(".btn-request-show").click();
        $(".btn-request-complet").hide();
    })
}