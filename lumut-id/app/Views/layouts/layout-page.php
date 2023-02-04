<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?= SITE_NAME; ?> - <?= session()->get('pagetitle'); ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo base_url(LIBSASSET.'/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="//pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <link rel="stylesheet" id="style-css" href="<?php echo base_url(CSSASSET.'style.css'); ?>">
        <script src="<?php echo base_url().LIBSASSET; ?>jquery/jquery-3.6.1.min.js"></script>
        <script> window.jQuery || document.write('<script src="<?php echo base_url(LIBSASSET.'jquery/jquery-3.6.1.min.js"'); ?>><\/script>')</script>
        <script> localeData = {baseUrl:'<?= base_url(); ?>',curentPage:'<?= base_url(uri_string()); ?>', ajaxurl:'<?= base_url(); ?>/ajaxAction'}; </script>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-html5-2.3.3/datatables.min.css"/>
 

    </head>

    <body>
 
        <?= $this->include('layouts/partials/header'); ?> 
        
            <main id="main" class="mx-auto py-3 py-5 mt-5">
                <div class="container">
                <?= $this->renderSection('content'); ?>
                </div>
            </main>
       
        <?= $this->include('layouts/partials/footer'); ?>
         
        <script src="<?php echo base_url(LIBSASSET.'bootstrap/js/bootstrap.bundle.min.js'); ?>"></script> 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-html5-2.3.3/datatables.min.js"></script>

        <script src="<?php echo base_url(LIBSASSET.'jquery/jquery.validate.min.js'); ?>"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="<?php echo base_url(JSASSET.'script.js'); ?>"></script>
        <?php if(isset($scipts)):?>
            <script src="/assets/js/<?=$scipts;?>.js"></script>
        <?php endif;?>
    </body>

</html>