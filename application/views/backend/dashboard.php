<div class="layout-page">
    <?php $this->load->view('layout/admin/topbar'); ?>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="fw-semibold d-block mb-1">Email belum dibaca</span>
                            <h3 class="card-title mb-2"><?= $list_total['total_notread'] ?></h3>
                        </div>
                        <div class="bx bx-chat" style="font-size:50px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="fw-semibold d-block mb-1">Email sudah dibaca</span>
                            <h3 class="card-title mb-2"><?= $list_total['total_read'] ?></h3>
                        </div>
                        <div class="bx bx-envelope-open" style="font-size:50px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="fw-semibold d-block mb-1">Semua email</span>
                            <h3 class="card-title mb-2"><?= $list_total['total_email'] ?></h3>
                        </div>
                        <div class="bx bx-envelope" style="font-size:50px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

