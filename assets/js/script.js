$('.ModalUbahAgen').on('click', function() {

    var url = window.location.href;

    $('#landingUbah').val(url);

    const id = $(this).data('id');
    // console.log(id);
    
    $.ajax({
        url: 'http://localhost/islamic-product/bisnis/getInfoAgent',
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function(data) {
                // console.log(data);
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

    $('.ModalGetUrl').on('click', function() {

    const id = $(this).data('id');
    // console.log(id);

    $.ajax({
        url: 'http://localhost/islamic-product/bisnis/getInfoAgent',
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function(data) {
                // console.log(data);
                $('#NamaURL').val(data.nama_agen);
                    
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

    $('.getLanding').on('click', function() {

        var url = window.location.href;

        $('#landing').val(url);

    });

    $('.getLandingOut').on('click', function() {

        var url = window.location.href;

        $('#landingOut').val(url);

    });

    $('.getLandingTambah').on('click', function() {

        var url = window.location.href;

        $('#landingTambah').val(url);

    });

    $('.getTrueUrl').on('click', function() {

        var nama = $('#NamaURL').val();
        var namaEdit = nama.replace(/ /g, '%20');
        
        var url = window.location.href;
        var slash = "?agen=";
        var TrueUrl = url + slash +namaEdit;

        $('#URL').val(TrueUrl);


    });

    $('.resetUrl').on('click', function() {

        var reset = "";
        $('#URL').val(reset);


    });