
$(document).ready(function(){



    $(document).on('submit', '#tambah', function() {
                // post the data from the form

  
    $('.overlay').css('display','block');


     var nama = $('#nama').val();
     var asal = $('#asal').val();
    $.post("daftar", $(this).serialize())
       
        .done(function(data) {

            $.confirm({
                columnClass: 'col-md-6 col-md-offset-3',
                icon: 'fa fa-check',
                title: 'Berhasil Menyimpan Data',
                content: 'Terima Kasih Atas Partisipasi Anda.',
                autoClose: 'tutup|3000',
                type: 'dark',
                typeAnimated: true,
                buttons: {
                    tutup: function () {
                        text: 'Tutup'
                    }
                }
            });
             $('#tambah')[0].reset();
                
        })
          .fail(function(data) {
            if(nama == ''){
                

                $( '.aa' ).text( "Silahkan Lengkapi Form Nama Anda !" ).show().fadeOut( 5000 );
                 // event.preventDefault();
                // $('#error').before('<span class="error"> Form Nama Harus Diisi !</span>');
            }else if(asal == ''){
                $( '.bb' ).text( "Silahkan Lengkapi Form Asal Anda !" ).show().fadeOut( 5000 );
            }

          });
            
    return false;
    });



});
