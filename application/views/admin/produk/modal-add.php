<!-- Modal -->
<div class="modal fade" id="addModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="jenisprodukLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Tambah data - Modal</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= site_url('admin/produk/add') ?>" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                    <div class="form-group mb-2 row">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input id="nama" placeholder="Masukan Nama" name="nama" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-2 row">
                        <label for="stok" class="col-4 col-form-label">Stok</label>
                        <div class="col-8">
                            <input id="stok" placeholder="Masukan Stok" name="stok" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-2 row">
                        <label for="harga_beli" class="col-4 col-form-label">Harga_beli</label>
                        <div class="col-8">
                            <input id="harga_beli" placeholder="Masukan Harga_beli" name="harga_beli" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-2 row">
                        <label for="harga_jual" class="col-4 col-form-label">Harga_jual</label>
                        <div class="col-8">
                            <input id="harga_jual" placeholder="Masukan Harga_jual" name="harga_jual" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-2 row">
                        <label for="foto" class="col-4 col-form-label">Foto</label>
                        <div class="col-8">
                            <input id="foto" placeholder="Masukan Foto" name="foto" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-2 row">
                        <label for="jenis_id" class="col-4 col-form-label">Jenis_id</label>
                        <div class="col-8">
                            <input id="jenis_id" placeholder="Masukan Jenis_id" name="jenis_id" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-2 row">
                        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                        <div class="col-8">
                            <input id="deskripsi" placeholder="Masukan Deskripsi" name="deskripsi" type="text" class="form-control">
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