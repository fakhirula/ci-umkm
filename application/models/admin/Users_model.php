<?php

class Users_model extends CI_Model
{
    private $table = 'users';

    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required|min_length[5]'
            ],
            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required|valid_email|max_length[30]'
            ],
            [
                'field' => 'status',
                'label' => 'status',
                'rules' => 'required|integer'
            ],
            [
                'field' => 'role',
                'label' => 'role',
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

    public function setActive($id)
    {
        $data = array(
            'status' => 1,
        );
        return $this->db->update($this->table, $data, array('id' => $id));
    }

    public function setNonactive($id)
    {
        $data = array(
            'status' => 0,
        );
        return $this->db->update($this->table, $data, array('id' => $id));
    }
}
