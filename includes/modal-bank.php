<!-- Modal bank-->
<div class="modal fade" id="bank" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="bank" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="bank"> Tambah Bank </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">

                <form action="" method="POST" class="">

                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Bank Islam Berhad</option>
                            <option value="1">CIMB Bank</option>
                            <option value="2">Affin Bank</option>
                            <option value="3">Bank Simpanan Nasional</option>
                        </select>
                        <label for="floatingSelect">Pilih bank</label>
                    </div>

                    <div class="form-floating mb-3 form-group">
                        <input type="referal" class="form-control" id="referal" placeholder="referal@example.com" required>
                        <label for="referal">Nama Akaun</label>
                        <div class="invalid-feedback">
                            Please provide your accout name.
                        </div>
                    </div>

                    <div class="form-floating mb-3 form-group">
                        <input type="referal" class="form-control" id="referal" placeholder="referal@example.com" required>
                        <label for="referal">No akaun</label>
                        <div class="invalid-feedback">
                            Please provide your no akaun.
                        </div>
                    </div>

                    <!-- CTA gateway Form -->
                    <section class=""></section>
                    <button class="btn btn-primary"> Tambah </button>
            </div>
        </div>
    </div>
</div>