    <div class="modal fade" id="modalLogout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLogoutLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalLogoutLabel">Konfirmasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Yakin ingin logout ?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary clickk" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-danger clickk" href="<?= PATH; ?>/logout" role="button">Logout</a>
                </div>
            </div>
        </div>
    </div>