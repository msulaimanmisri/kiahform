<div class="container mt-5">
    <footer class="text-center my-5">
        &copy; <?php echo date("Y"); ?> Muhamad Sulaiman Misri
    </footer>
</div>

<!-- Modal -->
<div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="register" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="register"> Naik taraf akaun ke {{ pakej_bulan }} </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">

                <form action="" method="POST" class="">

                    <div class="form-floating mb-3 form-group">
                        <input type="referal" class="form-control" id="referal" placeholder="referal@example.com" required>
                        <label for="referal">Referral ID ( jika ada )</label>
                        <div class="invalid-feedback">
                            Please provide your name.
                        </div>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Saya telah membaca & bersetuju dengan Terma & Syarat pembayaran Akaun PRO.</label>
                    </div>

                    <!-- CTA Register Form -->
                    <section class="mb-5"></section>

                    <button class="btn btn-primary"> Buat Pembayaran </button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>