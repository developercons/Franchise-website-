$(document).ready(function(){
    //Setup CSRF TOKEN
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    onScrollNav(); 
    ShowRequestBar();

    //on add demande Button cliked
    $(".btn-add-request").click(function(){
        const item = {
            id : $(this).data('id'),
            name : $(this).data('name')
        }
       addRequest(item);
    })

    //Push Session data if exitst
    if(sessionData) {
        jsonObject = JSON.parse(sessionData);
        jsonObject.forEach((el)=>{
            addRequest(el,true);
        })
    }

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



function addRequest($item,sessionItem = false){
   var $itemExist = requetItems.find((el) => {
        return el.id == $item.id;
    })
   
    if(!$itemExist){
        requetItems.push($item);
    } else {
        return ;
    }

    $list =  $(".fc-list-group-request");
    $list.html("");
    requetItems.forEach(item => {
        $list.append(`
        <li class="list-group-item" data-id="${item.id}">
            <i class="icon ion-android-checkmark-circle"></i>
                ${item.name}
            <i class="icon ion-ios-close-empty btn-request-delete" onclick="removeRequest(this)"></i>
        </li>
       `);
    });
    countItems();
    if(requetItems.length != 0) {
        $(".fc-request-wrapper").slideDown();
    }

    if(!sessionItem){
        //Add request TO session
        $.ajax({ 
            type: 'POST', 
            url: routeAddSession, 
            data: {requestedItem : requetItems}, 
            dataType: 'json',
            success: function (data) { 
                console.log("Add success");
            }
        });
    }
}

function removeRequest(item){
    var $id = $(item).parent().data('id');
    requetItems = requetItems.filter((el)=>{
        return el.id != $id;
    });
    $(item).parent().remove();
    countItems();
    
    if(requetItems.length == 0) {
        $(".fc-request-wrapper").slideUp();
    }

    //remove request from session
    $.ajax({ 
        type: 'POST', 
        url: routeRemoveSession, 
        data: {id : $id }, 
        dataType: 'json',
        success: function (data) { 
            console.log("remove success");        }
    });
}

function countItems(){
    $(".fc-number-request").html(requetItems.length);
}