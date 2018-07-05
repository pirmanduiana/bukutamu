
$(document).ready(function(){

    $(document).on('submit', '#tambah', function() {
        $.confirm({
            columnClass: 'col-md-6 col-md-offset-3',
            icon: 'fa fa-user',
            title: 'Berhasil Menyimpan Data',
            content: 'Terima Kasih Atas Partisipasi Anda.',
            autoClose: 'tutup|10000',
            type: 'dark',
            typeAnimated: true,
            buttons: {
                tutup: function () {
                    text: 'Tutup'
                }
            }
        });
    });


    // $("#submits").on("click", function(){
    //     tambah.submit();
    // });


});

// var tambah = {
//     "submit" : function(voted){ 
//         $.ajax({
//             url: Url,
//             dataType: 'json',
//             method: 'post',
//             data: {daftar: voted}            
//         })
//         .done(function (response) {
//             if (response.success) {
//                 $.confirm({
//                     title: 'Info',
//                     content: response.message,
//                     autoClose: 'Tutup|2000',
//                     buttons: {                        
//                         "Tutup": function () {                        
//                         }
//                     }
//                 });
//             }
//         })
//         .fail(function(xhr){
//             // console.log(xhr);
//         });

//     }
// };

