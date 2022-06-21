<?php

class Suplier_model extends CI_Model
{
    private $table = 'suplier';

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required|min_length[4]|max_length[45]'
            ],
            [
                'field' => 'kota',
                'label' => 'Kota',
                'rules' => 'required|min_length[3]|max_length[45]'
            ],
            [
                'field' => 'kontak',
                'label' => 'Kontak',
                'rules' => 'required|max_length[30]'
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required|min_length[4]|max_length[200]'
            ],
            [
                'field' => 'telpon',
                'label' => 'Telpon',
                'rules' => 'required|min_length[7]|max_length[15]'
            ],
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
        $this->kota = $post['kota'];
        $this->kontak = $post['kontak'];
        $this->alamat = $post['alamat'];
        $this->telpon = $post['telpon'];

        return $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->nama = $post['nama'];
        $this->kota = $post['kota'];
        $this->kontak = $post['kontak'];
        $this->alamat = $post['alamat'];
        $this->telpon = $post['telpon'];

        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array('id' => $id));
    }
}
