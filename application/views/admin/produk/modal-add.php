<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= "Add " . str_replace("_", " ", ucfirst($this->uri->segment(2))) ?></h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('admin/' . $this->uri->segment(2) . '/add') ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                    <div class="mb-3">
                        <label class="small mb-1" for="kode">Kode</label>
                        <input class="form-control" id="kode" name="kode" type="text" placeholder="Kode" required autofocus />
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="nama">Nama Produk</label>
                        <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama Produk" required autofocus />
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="stok">Stok</label>
                        <input class="form-control" id="stok" name="stok" type="number" placeholder="Stok" required autofocus />
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="harga_beli">Harga Beli</label>
                        <input class="form-control" id="harga_beli" name="harga_beli" type="number" placeholder="Harga Beli" required autofocus />
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="harga_jual">Harga Jual</label>
                        <input class="form-control" id="harga_jual" name="harga_jual" type="number" placeholder="Harga Jual" required autofocus />
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="foto">Foto</label>
                        <input class="form-control" id="foto" name="foto" type="file" accept="image/png, image/jpeg, image/jpg" required autofocus />
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1">Jenis Produk</label>
                        <select id="jenis_id" name="jenis_id" class="form-select" aria-label="Default select example">
                            <option selected disabled>Pilih Jenis Produk:</option>
                            <?php foreach ($jenis_produk as $row) : ?>
                                <option value="<?= $row->id; ?>"><?= $row->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" required autofocus></textarea>
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