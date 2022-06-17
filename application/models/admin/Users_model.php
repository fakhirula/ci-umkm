<?php

class Users_model extends CI_Model
{
    private $table = 'users';

    public $id;
    public $username;
    public $password;
    public $email;
    public $status;
    public $role;

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

    public function save()
    {
        $post = $this->input->post();
        $this->username = $post['username'];
        $this->password = $post['password'];
        $this->email = $post['email'];
        $this->status = $post['status'];
        $this->role = $post['role'];

        return $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->username = $post['username'];
        $this->password = $post['password'];
        $this->email = $post['email'];
        $this->status = $post['status'];
        $this->role = $post['role'];

        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array('id' => $id));
    }
}
