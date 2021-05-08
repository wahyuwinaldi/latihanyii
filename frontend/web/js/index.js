


// if checked checkbox show input text
$(document).ready(function(){
    
    $('#nama-hewan').on('click', function () {
        if ($(this).prop('checked')) {
            $('#namaHewan').attr('hidden', false);
        } else {
            $('#namaHewan').attr('hidden', true);
        }
    });
    
    // // input data from ajax
    // $(document).on('click', '#save', function (e) {
    //     //$('.lds-spinner').show(); 
    //     $.ajax({
    //         url: 'input-ajax/save',
    //         type: 'POST',
    //         data: form.serialize() + '&id_pasien=' + id_pasien + '&no_reg=' + no_reg,
    //         success: function (response) {

    //             $('.pesan').show();
    //             $(".pesan").animate({ opacity: 1.0 }, 1000).fadeOut("slow");
    //             $('.lds-spinner').hide();

    //             $.ajax({
    //                 url: 'rekam-pemeriksaan',
    //                 data: { id: no_reg }
    //             }).done(function (data) {
    //                 $('.loaderx').hide();
    //                 $(".rekammedik-result").html(data);
    //             });
    //         },
    //         error: function (e) {
    //             console.log(e);
    //             alert("gagal simpan");
    //             $('.lds-spinner').hide();
    //         }
    //     });
    
    // });

   
    
    $(document).on('click', '#save', function (e) {
        $.ajax({
            url: 'input-ajax/save',
            type: 'POST',
            data:  $('#namaHewan').val(),
            dataType: 'json',
            
            success : function (response) {
                console.log(response);
            }
        });
    
        return false;
    });
});


