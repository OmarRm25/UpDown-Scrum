<?php
class Usuarios_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_usuarios($email = FALSE)
{
        if ($email === FALSE)
        {
                $query = $this->db->get('usuarios');
                return $query->result_array();
        }

        $query = $this->db->get_where('usuarios', array('email' => $email));
        return $query->row_array();
}

        public function insert($d){
          if ($this->db->insert("usuarios",$d)) {
            return true;
          }
        }
}
