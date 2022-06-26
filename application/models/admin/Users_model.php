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
                'rules' => 'required|min_length[5]|max_length[20]|is_unique[users.username]'
            ],
            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required|max_length[255]'
            ],
            [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required|valid_email|max_length[30]|is_unique[users.email]'
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

    public function change_password()
    {
        $current_user = $this->auth_model->current_user();
        $post = $this->input->post();
        $data = array(
            'password' => password_hash($post['newpassword'], PASSWORD_DEFAULT),
        );
        return $this->db->update($this->table, $data, array('id' => $current_user->id));
    }
}
