<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>

<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-lg-4 py-5 mx-auto">
            <h5 class="text-muted py-3 text-center">Kiah Store</h5>
            <div class="card p-4 shadow-sm">

                <div class="form-floating my-3 ">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword1" placeholder="Password" name="password1">
                    <label for="floatingPassword1">Kata laluan</label>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ingat maklumat akaun saya</label>
                </div>

                <a href="#" class="btn btn-primary my-4 p-3"> Log Masuk </a>

            </div>

            <p class="text-muted text-center pt-4">Terlupa <a href="reset.php" class=""> kata laluan? </a></p>

            <p class="text-muted text-center">Masih belum mendaftar akaun? <a href="register.php" class=""> Klik untuk daftar sekarang </a></p>

        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>