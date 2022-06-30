<?php

class Pesanan_model extends CI_Model
{
    private $table = 'pesanan';

    public function rules()
    {
        return [
            [
                'field' => 'jumlah',
                'label' => 'Jumlah',
                'rules' => 'required|integer'
            ],
            [
                'field' => 'users_id',
                'label' => 'Users_id',
                'rules' => 'required'
            ],
            [
                'field' => 'produk_id',
                'label' => 'Produk_id',
                'rules' => 'required'
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
        date_default_timezone_set("Asia/Jakarta");

        $post = $this->input->post();
        $this->tanggal = date('Y-m-d');
        $this->jumlah = $post['jumlah'];
        $this->users_id = $this->secure->decrypt_url($post['users_id']);
        $this->produk_id = $this->secure->decrypt_url($post['produk_id']);

        return $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $this->secure->decrypt_url($post['id']);
        $this->tanggal = $post['tanggal'];
        $this->jumlah = $post['jumlah'];
        $this->users_id = $post['users_id'];
        $this->produk_id = $post['produk_id'];

        return $this->db->update($this->table, $this, array('id' => $this->id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array('id' => $id));
    }
}
