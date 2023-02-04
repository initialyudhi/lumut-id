$(function(){
 
});
 

function alertWarning($text='Something went wrong!',$title='Oops...',$withTitle=false){
    if(!$withTitle){
        Swal.fire({
            icon: 'warning', 
            text: String($text),
           // timer: 1000
          })
    }else{
        Swal.fire({
            icon: 'warning',
            title: String($title),
            text: String($text),
            //timer: 1000
          })
    }
    
}

function alertError($text='Something went wrong!',$title='Oops...',$withTitle=false){
    if(!$withTitle){
        Swal.fire({
            icon: 'error', 
            text: String($text),
            //timer: 1000
          })
    }else{
        Swal.fire({
            icon: 'error',
            title: String($title),
            text: String($text),
            //timer: 1000
          })
    }
    
}

function alertSukses($text='Data berhasil disimpan!',$title='Selamat..',$withTitle=false){
    if(!$withTitle){
        Swal.fire({
            icon: 'success', 
            text: String($text),
           // timer: 1000
          });
    }else{
        Swal.fire({
            icon: 'success',
            title: String($title),
            text: String($text),
           // timer: 1000
        });
    }
    
}

function LoadingSwall(){

    let timerInterval
    Swal.fire({ 
        allowOutsideClick:false,
        didOpen: () => {
            Swal.showLoading()
        
        } 
    }); 
}

function LoadingSwallTimerClose($timer='2000'){

    let timerInterval
    Swal.fire({
        timer: $timer,
        allowOutsideClick:false,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
            
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
    }); 
}
