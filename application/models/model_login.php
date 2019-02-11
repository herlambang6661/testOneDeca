<?php

    class Model_login extends CI_Model
    {        
        function auth_admin($username, $password){
            $query = $this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$password' LIMIT 1");
            return $query;
        }   

        function auth_karyawan($username, $password){
            $query = $this->db->query("SELECT * FROM karyawan WHERE username='$username' AND password='$password' LIMIT 1");
            return $query;
        }
    }
    
?>