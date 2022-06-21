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
            <form action="<?= site_url('admin/suplier/add') ?>" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                    <div class="form-group mb-2 row">
                        <label for="nama" class="col-4 col-form-label">Nama Perusahaan</label>
                        <div class="col-8">
                            <input id="nama" placeholder="Masukan Nama" name="nama" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-2 row">
                        <label for="kota" class="col-4 col-form-label">Kota</label>
                        <div class="col-8">
                            <input id="kota" placeholder="Masukan Kota" name="kota" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-2 row">
                        <label for="kontak" class="col-4 col-form-label">Kontak</label>
                        <div class="col-8">
                            <input id="kontak" placeholder="Masukan Kontak" name="kontak" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-2 row">
                        <label for="alamat" class="col-4 col-form-label">Alamat</label>
                        <div class="col-8">
                            <input id="alamat" placeholder="Masukan Alamat" name="alamat" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-2 row">
                        <label for="telpon" class="col-4 col-form-label">Telpon</label>
                        <div class="col-8">
                            <input id="telpon" placeholder="Masukan Telpon" name="telpon" type="text" class="form-control">
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