
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


});