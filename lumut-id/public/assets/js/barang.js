$(function(){

    $('#table-barang').DataTable();

    keluarkanBarang();
    kirimPermintaan();
    konfirmPengeluaran(); 
});


function keluarkanBarang(){
   
   
    $('body').on('click','.keluarkan-barang',function(){
        let $this = $(this);
        LoadingSwall();
        let id = $this.data('id');

        $this.prop('disabled',true);
        let dataForm = {'action':'cek-barang-stok','barang_id':id};
        console.log(dataForm);  
        $.ajax({
            url:localeData.ajaxurl+'/klikKeluarkanBarang',
            headers : {'X-Requested-With': 'XMLHttpRequest'},
            type:'POST',
            data:dataForm,
            dataType:'json',
            success:function(response){
                console.log(response);
                $this.prop('disabled',false);
                Swal.close();
                //$('body').find('#the-hasil-cari').html(response.table);
                //$('#tb-hasil-cari-lainnya').DataTable();
                if(response.stok<1){
                    Swal.fire({
                        title: 'Stok Kosong!',
                        text: "Lanjut input permintaan barang?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, lanjutkan!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = String(localeData.baseUrl+'/po-barang/'+response.barang_id);
                            //addPermintaanBarang(response.barang_id);
                        }
                      })
                }else{

                    Swal.fire({
                        title: 'Stok Tersedia.',
                        text: "Sisa stok "+response.stok+", lanjut pengeluaran?",
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, lanjutkan!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = String(localeData.baseUrl+'/barang-out/'+response.barang_id);
                            //addPermintaanBarang(response.barang_id);
                        }
                      })

                    
                }
                
            },
            error: function (jqXHR, textStatus, errorThrown) {
              Swal.close();
                alert('Maaf Server Sedang dalam Gangguan Mohon Coba Nanti !')
                return false;
            }
        });
    });

}
 

function kirimPermintaan(){
    $('body').on('click','#btn-kirim-permintaan',function(){

        let formStatus = $('body').find('#fm-permintaan').validate().form(); 
        if(formStatus == false) return;
        LoadingSwall();
        let dataForm = $('body').find('#fm-permintaan').serializeArray();
        dataForm.push({name: 'action', value: 'kirim-permintaan'});

        console.log(dataForm);  
        $.ajax({
            url:localeData.ajaxurl+'/addPermintaanBarang',
            headers : {'X-Requested-With': 'XMLHttpRequest'},
            type:'POST',
            data:dataForm,
            dataType:'json',
            success:function(response){
                console.log(response);
                Swal.close();
                if(response.status=='sukses'){
                    alertSukses('Data disimpan.');
                     
                    

                } 
                
            }
        });

    });
    
}


function konfirmPengeluaran(){
    $('body').on('click','#btn-kirim-pengeluaran',function(){

        let formStatus = $('body').find('#fm-pengeluaran').validate().form(); 
        if(formStatus == false) return;
        LoadingSwall();
        let dataForm = $('body').find('#fm-pengeluaran').serializeArray();
        dataForm.push({name: 'action', value: 'kirim-pengeluaran'});

        console.log(dataForm);  
        $.ajax({
            url:localeData.ajaxurl+'/addPengeluaranBarang',
            headers : {'X-Requested-With': 'XMLHttpRequest'},
            type:'POST',
            data:dataForm,
            dataType:'json',
            success:function(response){
                Swal.close();
                if(response.status=='sukses'){
                    alertSukses('Data disimpan.');
                     
                    

                } 
            }
        });

    });
    
}