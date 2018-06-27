<?php

class Main_model extends CI_Model
{

public function iniciarSesion($run,$pass)
{
    $this->db->where('run',$run);
    $this->db->where('pass',$pass);
    return $this->db->get('usuario')->result();
}

    
}
