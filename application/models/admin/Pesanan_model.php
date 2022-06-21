<?php

class Pesanan_model extends CI_Model
{
    private $table = 'pesanan';

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
                'field' => 'users_id',
                'label' => 'Users_id',
                'rules' => 'required|integer'
            ],
            [
                'field' => 'produk_id',
                'label' => 'Produk_id',
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
        $this->users_id = $post['users_id'];
        $this->produk_id = $post['produk_id'];

        return $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->tanggal = $post['tanggal'];
        $this->jumlah = $post['jumlah'];
        $this->users_id = $post['users_id'];
        $this->produk_id = $post['produk_id'];

        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array('id' => $id));
    }
}
