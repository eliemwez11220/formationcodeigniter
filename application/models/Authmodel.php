<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authmodel extends CI_Model
{
    public function verifyCredentials($username, $password)
    {
        $this->db->where('user_email', $username);
        $query = $this->db->get('users')->result();
        if ($query) {
            if (password_verify($password, $query[0]->user_password)) {
                return $query[0];
            } else {
                return false;
            }
        } else {
            $this->db->where('user_pseudo', $username);
            $query = $this->db->get('users')->result();
            if ($query) {
                if (password_verify($password, $query[0]->user_password)) {
                    return $query[0];
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }

    public function veriryEmailUser($email)
    {
        $this->db->where('user_email', $email);
        $query = $this->db->get('users')->result();
        if ($query) {
            if ($query[0] != null) {
                return $query[0];
            } else return false;

        } else {
            return false;
        }
    }
}
