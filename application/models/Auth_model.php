<?php

class Auth_model extends CI_Model
{
    private $table = "users";
    const SESSION_KEY = 'user_id';

    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'Username or Email',
                'rules' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|max_length[255]'
            ]
        ];
    }

    public function login($username, $password)
    {
        $this->db->where('email', $username)->or_where('username', $username);
        $query = $this->db->get($this->table);
        $user = $query->row();

        // check user
        if (!$user) {
            return FALSE;
        }

        // check password
        if (!password_verify($password, $user->password)) {
            return FALSE;
        }

        // check status
        if ($user->status != 1) {
            return FALSE;
        }

        // create session
        $this->session->set_userdata([self::SESSION_KEY => $user->id]);
        $this->_update_last_login($user->id);

        return $this->session->has_userdata(self::SESSION_KEY);
    }

    public function current_user()
    {
        if (!$this->session->has_userdata(self::SESSION_KEY)) {
            return null;
        }

        $user_id = $this->session->userdata(self::SESSION_KEY);
        $query = $this->db->get_where($this->table, ['id' => $user_id]);
        return $query->row();
    }

    public function logout()
    {
        $this->session->unset_userdata(self::SESSION_KEY);
        return !$this->session->has_userdata(self::SESSION_KEY);
    }

    public function getRole()
    {
        $query = $this->db->get($this->table);
        $user = $query->row();

        if ($user->role == 'administrator') {
            return 'admin';
        } else {
            return 'public';
        }
    }

    private function _update_last_login($id)
    {
        $data = [
            'last_login' => date('Y-m-d H:i:s')
        ];

        return $this->db->update($this->table, $data, ['id' => $id]);
    }
}