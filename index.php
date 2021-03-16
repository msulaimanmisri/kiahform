<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>

<div class="container text-center">
    <h1 class="display-1 fw-bold text-muted pt-5">Sila pilih form</h1>
    <p class="lead pb-5 pt-3">Ini adalah form untuk showcase sahaja</p>
</div>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-3">
            <div class="card shadow-sm p-4 text-center">
                <h3>Register</h3>
                <a href="register.php" class="btn btn-warning mt-3"> Lihat Form </a>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card shadow-sm p-4 text-center">
                <h3>Login</h3>
                <a href="login.php" class="btn btn-warning mt-3"> Lihat Form </a>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card shadow-sm p-4 text-center">
                <h3>Reset</h3>
                <a href="reset.php" class="btn btn-warning mt-3"> Lihat Form </a>
            </div>
        </div>


    </div>
</div>

<?php include("includes/footer.php"); ?>