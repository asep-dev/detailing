<div class="layout-page">
    <?php $this->load->view('layout/admin/topbar'); ?>

    <div class="container-xxl flex-grow-1 container-p-y">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <a href="<?= base_url() ?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Mail box</li>
            </ol>
        </nav>
        <h4 class="fw-bold pb-3 mb-4">
            Mail Box
        </h4>

        <div class="card px-3">
            <h5 class="card-header">Semua pesan</h5>
            <div class="table-responsive text-nowrap">
                <table id="table-mail" class="table">
                    <thead>
                        <tr class="text-nowrap">
                            <th scope="row">No.</th>
                            <th>Dari Email</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($list_email) :?>
                            <?php $no = 1; foreach($list_email as $list) : ?>
                                <tr>
                                    <td scope="row"><?=$no++; ?></td>
                                    <td><?=$list['email']; ?></td>
                                    <td><?=$list['subject']; ?></td>
                                    <td>
                                        <?php if($list['is_read'] == 1) :?>
                                            <span class="badge rounded-pill bg-warning py-2 px-3">Telah dibaca</span>
                                        <?php else : ?>
                                            <span class="badge rounded-pill bg-info py-2 px-3">Pesan Baru</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu" style="">
                                                <button class="dropdown-item view" type="button" data-id="<?=$list['email_id'] ?>" data-email="<?=$list['email'] ?>"data-subject="<?=$list['subject'] ?>" data-body="<?=$list['message_body'] ?>" data-read="<?=$list['is_read'] ?>"><i class="bx bx-low-vision me-1"></i> Lihat</button>
                                                <button class="dropdown-item delete" type="button" data-id="<?=$list['email_id'] ?>"><i class="bx bx-trash me-1"></i> Hapus</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                                <tr>
                                    <td colspan="5" class="text-center">🙁 Data belum ada</td>
                                </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <?= $this->pagination->create_links() ?>
        </div>

    </div>
</div>

<!-- Modal view-->
<div class="modal fade" id="modal-view" tabindex="-1" aria-labelledby="modal-viewLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-exitLabel">Detail Pesan</h5>
                <button type="button" onclick="window.location.reload()" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <span class="badge bg-info py-2 px-3 rounded-3">Email</span>
                <p id="email" class="my-2">fasdfasd</p>
                <span class="badge bg-info py-2 px-3 rounded-3">Subject</span>
                <p id="subject" class="my-2">fasdfasd</p>
                <span class="badge bg-info py-2 px-3 rounded-3">Isi pesan</span>
                <p id="message-body" class="my-2">fasdfasd</p>
            </div>
            <div class="modal-footer p-2">
                <button type="button" class="btn btn-primary" onclick="window.location.reload()" data-bs-dismiss="modal">Sudah, tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal notif-->
<div class="modal fade" id="modal-notif" tabindex="-1" aria-labelledby="modal-notifLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-notifLabel"></h5>
                <button type="button" onclick="window.location.reload()" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <p id="notif-pesan" class="mb-0"></p>
            </div>
            <div class="modal-footer p-2">
                <button type="button" class="btn btn-primary" onclick="window.location.reload()" data-bs-dismiss="modal">Ya, terimakasih</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(document).on('click','.view', function(e){
            
            $('#modal-view').modal({backdrop: 'static', keyboard: false}) 
            $('#modal-view').modal('show')
            $('.modal-body #email').html($(this).data('email'))
            $('.modal-body #subject').html($(this).data('subject'))
            $('.modal-body #message-body').html($(this).data('body'))

            if ($(this).data('read') == 0) {
                const csrfName = '<?= $this->security->get_csrf_token_name() ?>';
                const csrfHash = '<?= $this->security->get_csrf_hash() ?>';
                const target = $(this).data('id')
                $.ajax({
                    type: "POST",
                    url: "<?= base_url() ?>action-mail/baca/" + target, 
                    data: {[csrfName] : csrfHash},
                    dataType: "json",  
                    cache: false,
                    success: function(response){
                        if (response.status == 'error') {
                            console.log(response)
                        }
                        if (response.status == 'success') {
                            console.log(response)
                        }
                    },
                    error : function(xhr, status, errorThrown){
                        console.log(xhr.responseText)
                        console.log(status)
                        console.log(errorThrown)
                    }
                });
            }
        })

        $(document).on('click','.delete', function(e){
            const csrfName = '<?= $this->security->get_csrf_token_name() ?>';
            const csrfHash = '<?= $this->security->get_csrf_hash() ?>';
            const target = $(this).data('id')
            // console.log(target)
            $.ajax({
                type: "POST",
                url: "<?= base_url() ?>action-mail/remove/" + target, 
                data: {[csrfName] : csrfHash},
                dataType: "json",  
                cache: false,
                success: function(response){
                    $('#modal-notif').modal({backdrop: 'static', keyboard: false}) 
                    $('#modal-notif').modal('show')
                    if (response.status == 'error') {
                        $('#modal-notif #modal-notifLabel').html(response.error.title)
                        $('#modal-notif #notif-pesan').html(response.error.pesan)
                    }
                    if (response.status == 'success') {
                        $('#modal-notif #modal-notifLabel').html(response.data.title)
                        $('#modal-notif #notif-pesan').html(response.data.pesan)
                    }
                },
                error : function(xhr, status, errorThrown){
                    console.log(xhr.responseText)
                    console.log(status)
                    console.log(errorThrown)
                }
            });
        })

        $('.pagination .page-item a').addClass('page-link')
    });
</script>
