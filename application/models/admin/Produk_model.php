<?php

class Produk_model extends CI_Model
{
    private $table = 'produk';

    public $id;
    public $nama;
    public $stok;
    public $harga_beli;
    public $harga_jual;
    public $foto;
    public $jenis_id;
    public $deskripsi;

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required|min_length[4]|max_length[45]'
            ],
            [
                'field' => 'stok',
                'label' => 'Stok',
                'rules' => 'required|integer'
            ],
            [
                'field' => 'harga_beli',
                'label' => 'Harga_beli',
                'rules' => 'required|integer'
            ],
            [
                'field' => 'harga_jual',
                'label' => 'Harga_jual',
                'rules' => 'required|integer'
            ],
            [
                'field' => 'foto',
                'label' => 'Foto',
                'rules' => 'required'
            ],
            [
                'field' => 'jenis_id',
                'label' => 'Jenis_id',
                'rules' => 'required|integer'
            ],
            [
                'field' => 'deskripsi',
                'label' => 'Deskripsi',
                'rules' => 'required|min_length[10]|max_length[255]'
            ]
        ];
    }

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama = $post['nama'];
        $this->stok = $post['stok'];
        $this->harga_beli = $post['harga_beli'];
        $this->harga_jual = $post['harga_jual'];
        $this->foto = $post['foto'];
        $this->jenis_id = $post['jenis_id'];
        $this->deskripsi = $post['deskripsi'];

        return $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->nama = $post['nama'];
        $this->stok = $post['stok'];
        $this->harga_beli = $post['harga_beli'];
        $this->harga_jual = $post['harga_jual'];
        $this->foto = $post['foto'];
        $this->jenis_id = $post['jenis_id'];
        $this->deskripsi = $post['deskripsi'];

        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array('id' => $id));
    }
}
