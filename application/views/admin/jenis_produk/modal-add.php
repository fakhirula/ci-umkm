<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= "Add " . str_replace("_", " ", ucfirst($this->uri->segment(2))) ?></h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('admin/'. $this->uri->segment(2) .'/add') ?>" method="POST">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                    <div class="mb-3">
                        <label class="small mb-1" for="nama">Jenis Produk</label>
                        <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama Jenis Produk" required autofocus />
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-transparent-dark" type="button" data-bs-dismiss="modal">Cancel</button>
                        <input name="submit" type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>