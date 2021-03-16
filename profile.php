<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>

<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-lg-4 pt-5 mx-auto">
            <div class="card p-4 shadow-sm">
                <h5 class="text-muted py-3">Maklumat Akaun</h5>

                <div class="alert alert-warning mb-3" role="alert">
                    Untuk maklumat yang tidak boleh diubah, anda boleh membuat pembayaran servis selenggara (RM10). <a href="#">Klik sini </a> untuk menukar maklumat akaun anda.
                </div>

                <div class="form-floating mb-3">
                    <input type="nama" class="form-control" id="floatingInput" placeholder="name@example.com" value="Muhamad Sulaiman" disabled>
                    <label for="floatingInput">Nama Anda</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="sulaimanmisri@asiaquest.my" disabled>
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid" disabled>
                                <option value="1" selected>010</option>
                                <option value="2">011</option>
                                <option value="3">012</option>
                            </select>
                            <label for="floatingSelectGrid">No Tel Depan</label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                            <input type="input" class="form-control" id="floatingInputGrid" placeholder="123456789" value="014577212" disabled>
                            <label for="floatingInputGrid">No Tel Belakang</label>
                        </div>
                    </div>

                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword1" placeholder="Password" name="password1">
                    <label for="floatingPassword1">Kata laluan baru</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword2" placeholder="Password" name="password2">
                    <label for="floatingPassword2">Sahkan kata laluan baru</label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-lg-4 mb-5 py-3 mx-auto">
            <div class="card p-4 shadow-sm">
                <h5 class="text-muted py-1">URL Kedai</h5>

                <div class="mb-3">
                    <div class="input-group border border-primary rounded">
                        <span class="input-group-text" id="domain">https://</span>
                        <input type="text" class="form-control" id="domain" aria-describedby="domain" value="sulaiman" disabled>
                        <span class="input-group-text">.kiah.store</span>
                    </div>
                </div>

                <h5 class="text-muted py-1">Logo Kedai</h5>

                <div class="mb-3">
                    <input class="form-control" type="file" id="formFile">
                </div>

                <a href="#" class="btn btn-primary my-4 p-3"> Simpan Maklumat </a>

            </div>
        </div>
    </div>
</div>


<?php include("includes/footer.php"); ?>