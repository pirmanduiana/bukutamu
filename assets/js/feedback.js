
$(document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#vote_flat").on("click", function(){
        vote.give_me(0);
    });

    $("#vote_smile").on("click", function(){
        vote.give_me(1);
    });

});

var vote = {
    "give_me" : function(voted){ console.log(voted);
        $.ajax({
            url: UrlVote,
            dataType: 'json',
            method: 'post',
            data: {feedback: voted}            
        })
        .done(function (response) {
            if (response.success) {
                $.confirm({
                    title: 'Info',
                    content: response.message,
                    autoClose: 'Tutup|2000',
                    buttons: {                        
                        "Tutup": function () {                        
                        }
                    }
                });
            }
        })
        .fail(function(xhr){
            console.log(xhr);
        });

    }
};