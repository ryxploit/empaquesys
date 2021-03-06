<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RODEO - Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/bootstrap-icons/bootstrap-icons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/pages/auth.css') ?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo/logo.ico');?>" type="image/x-icon">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="<?php echo base_url(); ?>"><img src="assets/images/logo/logo.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Iniciar sesión.</h1>


                    <form method="post" action="<?php echo base_url('Login/session'); ?>">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="usuario" autocomplete="off" required
                                class="form-control form-control-xl" placeholder="Usuario">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" autocomplete="off" required
                                class="form-control form-control-xl" placeholder="Contraseña">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Entrar</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>