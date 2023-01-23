        </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-exit" tabindex="-1" aria-labelledby="modal-exitLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-exitLabel">Keluar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Anda yakin ingin melanjutkan keluar?</p>
            </div>
            <div class="modal-footer p-2">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="<?= base_url() ?>auth/logout" type="button" class="btn btn-primary">Ya, keluar</a>
            </div>
        </div>
    </div>
</div>
    <!-- build -->
    <script src="<?= base_url() ?>public/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url() ?>public/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= base_url() ?>public/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= base_url() ?>public/assets/vendor/libs/datatables/datatables.min.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url() ?>public/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url() ?>public/assets/js/dashboards-analytics.js"></script>

    </body>
</html>