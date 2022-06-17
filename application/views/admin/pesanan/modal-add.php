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
            <form action="<?= site_url('admin/pesanan/add') ?>" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <div class="form-group mb-2 row">
                        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                        <div class="col-8">
                            <input id="tanggal" placeholder="Masukan Tanggal" name="tanggal" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-2 row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" placeholder="Masukan Jumlah" name="jumlah" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-2 row">
                        <label for="users_id" class="col-4 col-form-label">Users_id</label>
                        <div class="col-8">
                            <input id="users_id" placeholder="Masukan Users_id" name="users_id" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-2 row">
                        <label for="produk_id" class="col-4 col-form-label">Produk_id</label>
                        <div class="col-8">
                            <input id="produk_id" placeholder="Masukan Produk_id" name="produk_id" type="number" class="form-control">
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