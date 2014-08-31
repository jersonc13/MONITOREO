<?php

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function da_enviardatos($txt_usuario, $txt_contrasena) {
        $this->adampt->setParam($txt_usuario);
        $this->adampt->setParam($txt_contrasena);
        $query = $this->adampt->consulta('shm_seg.USP_GEN_S_VALIDA_USUARIO');
        if (count($query) > 0) {
            return $query;
        } else {
            return null;
        }
        
    }
    
    function da_ultimasesion($nidusuario) {
        
        $instruccion = "CALL sim_sp_ins_ultimasesion ('ins_ultsesion','".$nidusuario."','".rand(5, 15)."');";
        $this->db->close();
        
        $query = $this->db->query($instruccion);        
        if ($query) {            
            return ($query->row_array());            
        }else{            
            return 0;
        }        
    }
    
    function da_cerrarsesion($nidusuario,$idaudit) {
        
        $instruccion = "CALL sim_sp_upd_ultimasesion ('upd_cerrarsesion','".$nidusuario."','".$idaudit."');";
        $this->db->close();
        
        $query = $this->db->query($instruccion);        
        if ($query) {            
            return ($query->row_array());            
        }else{            
            return 0;
        }        
    }
    
}
