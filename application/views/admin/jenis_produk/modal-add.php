<!-- Modal -->
<div class="modal fade" id="addModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="jenisprodukLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jenisprodukLabel">Tambah data - Modal</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= site_url('admin/jenis_produk/add') ?>" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <div class="form-group mb-2 row">
                        <label for="nama" class="col-4 col-form-label">Jenis Produk</label>
                        <div class="col-8">
                            <input id="nama" placeholder="Masukan Nama" name="nama" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input name="submit" type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>