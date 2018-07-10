
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


    // var ctx = document.getElementById("myChart"); 

    // var myChart = new Chart(ctx, {
    //     type: 'bar',
    //     data: {
    //         labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    //         datasets: [{
    //         //label: ["Merah", "Biru", "Kuning", "Hijau", "Ungu", "Oranye" ],
    //             data: [12, 19, 3, 5, 2, 3],
    //             // backgroundColor: [
    //             //     'rgba(255, 99, 132, 0.2)',
    //             //     'rgba(54, 162, 235, 0.2)',
    //             //     'rgba(255, 206, 86, 0.2)',
    //             //     'rgba(75, 192, 192, 0.2)',
    //             //     'rgba(153, 102, 255, 0.2)',
    //             //     'rgba(255, 159, 64, 0.2)'
    //             // ],
    //             // borderColor: [
    //             //     'rgba(255,99,132,1)',
    //             //     'rgba(54, 162, 235, 1)',
    //             //     'rgba(255, 206, 86, 1)',
    //             //     'rgba(75, 192, 192, 1)',
    //             //     'rgba(153, 102, 255, 1)',
    //             //     'rgba(255, 159, 64, 1)'
    //             // ],
    //             // borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         scales: {
    //             yAxes: [{
    //                 ticks: {
    //                     beginAtZero:true
    //                 }
    //             }]
    //         }
    //     }
    // });



});


