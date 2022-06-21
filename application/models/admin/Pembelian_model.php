<?php

class Pembelian_model extends CI_Model
{
    private $table = 'pembelian';

    public function rules()
    {
        return [
            [
                'field' => 'tanggal',
                'label' => 'Tanggal',
                'rules' => 'required'
            ],
            [
                'field' => 'jumlah',
                'label' => 'Jumlah',
                'rules' => 'required|integer'
            ],
            [
                'field' => 'harga',
                'label' => 'Harga',
                'rules' => 'required|integer'
            ],
            [
                'field' => 'produk_id',
                'label' => 'Produk_id',
                'rules' => 'required|integer'
            ],
            [
                'field' => 'suplier_id',
                'label' => 'Suplier_id',
                'rules' => 'required|integer'
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
        $this->tanggal = $post['tanggal'];
        $this->jumlah = $post['jumlah'];
        $this->harga = $post['harga'];
        $this->produk_id = $post['produk_id'];
        $this->suplier_id = $post['suplier_id'];

        return $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->tanggal = $post['tanggal'];
        $this->jumlah = $post['jumlah'];
        $this->harga = $post['harga'];
        $this->produk_id = $post['produk_id'];
        $this->suplier_id = $post['suplier_id'];

        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array('id' => $id));
    }
}
