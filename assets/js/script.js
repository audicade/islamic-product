$('.ModalUbahAgen').on('click', function() {

    const id = $(this).data('id');
    console.log(id);
    
    $.ajax({
        url: 'https://localhost/islamic-product/main/getInfoAgent',
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function(data) {
                console.log(data);
                $('#idA').val(data.id_agen);
                $('#kodeA').val(data.kode);
                $('#namaA').val(data.nama_agen);
                $('#noTelpA').val(data.no_telp);
                $('#domisiliA').val(data.domisili);
                    
            },
        error: function(jqXHR,error, errorThrown) {  
                if(jqXHR.status&&jqXHR.status==400){
                    alert(jqXHR.responseText); 
                }else{
                    alert("Something went wrong");
                }
            }
        
        });
        
    });