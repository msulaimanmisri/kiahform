<?php include("includes/header.php"); ?>

<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-lg-4 py-5 mx-auto">
            <div class="card p-4 shadow-sm">
                <h5 class="text-muted py-3">Maklumat Akaun</h5>

                <div class="form-floating mb-3">
                    <input type="nama" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Nama Penuh</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid">
                                <option value="1">010</option>
                                <option value="2">011</option>
                                <option value="3">012</option>
                            </select>
                            <label for="floatingSelectGrid">No Tel Depan</label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                            <input type="input" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="12345">
                            <label for="floatingInputGrid">No Tel Belakang</label>
                        </div>
                    </div>

                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword1" placeholder="Password" name="password1">
                    <label for="floatingPassword1">Kata laluan</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword2" placeholder="Password" name="password2">
                    <label for="floatingPassword2">Sahkan kata laluan</label>
                </div>

                <h5 class="text-muted py-3">URL Kedai</h5>

                <div class="mb-3">
                    <div class="input-group border border-primary rounded">
                        <span class="input-group-text" id="domain">https://</span>
                        <input type="text" class="form-control" id="domain" aria-describedby="domain">
                        <span class="input-group-text">.kiah.store</span>
                    </div>
                </div>


                <a href="#" class="btn btn-primary my-4 p-3"> Daftar Akaun </a>

            </div>

            <p class="text-muted text-center py-4">Adakah anda sudah mempunyai akaun? <a href="" class=""> Sila Log Masuk </a></p>

        </div>
    </div>
</div>

<?php include("includes/header.php"); ?>