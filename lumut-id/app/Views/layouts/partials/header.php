<header id="header" class="fixed-top">
    
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lumut-id Test</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link <?= (url_is('dashboard'))?'active':'';?>" aria-current="page" href="<?= base_url(); ?>">Home</a>
                <a class="nav-link <?= (url_is('account'))?'active':'';?>" href="<?= base_url(); ?>/account">Account</a>                
                <a class="nav-link <?= (url_is('post'))?'active':'';?>" href="<?= base_url(); ?>/post">Post</a>
                <a class="nav-link " href="<?= base_url(); ?>/logoutt">Logout</a>
                 
            </div>
            </div>
        </div>
        <!-- credit https://getbootstrap.com/docs/5.2/components/navbar/ -->
    </nav>


</header>
