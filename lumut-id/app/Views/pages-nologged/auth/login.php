<div class="vh-100 d-flex justify-content-center align-items-center">
    <?php if (isset(session()->error['error_username'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->error['error_username']; ?>
        </div>
    <?php } ?>
    <?php if (isset(session()->error['error_pass']) ) { ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->error['error_pass']; ?>
        </div>
    <?php } ?>
    <div class="col-md-4 p-5 shadow-sm border rounded-3">
        <h2 class="text-center mb-4 text-primary">Login Form</h2>
        <form method="post" action="login">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control border border-primary" name="username" id="exampleInputEmail1" aria-describedby="usernamelHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control border border-primary" id="exampleInputPassword1">
            </div>
            
            <div class="d-grid">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </form>
         
    </div>
</div>