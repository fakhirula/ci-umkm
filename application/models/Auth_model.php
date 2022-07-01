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
                'rules' => 'required|min_length[4]|max_length[20]'
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

    public function createAccount()
    {
        date_default_timezone_set("Asia/Jakarta");
        
        $post = $this->input->post();
        $this->username = $post['username'];
        $this->password = password_hash($post['password'], PASSWORD_DEFAULT);
        $this->email = $post['email'];
        $this->status = 1;
        $this->role = 'public';
        $this->created_at = date('Y-m-d H:i:s');
        $this->last_login = null;

        return $this->db->insert($this->table, $this);
    }

    private function _update_last_login($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            'last_login' => date('Y-m-d H:i:s')
        ];

        return $this->db->update($this->table, $data, ['id' => $id]);
    }
}