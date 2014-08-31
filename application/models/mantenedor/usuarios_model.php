<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function da_listarUsuarios() {
        $instruccion = "CALL sim_sp_qry_usuarios ('qry_usuarios','');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }
    
    function da_listarRoles() {
        $instruccion = "CALL sim_sp_qry_cargarroles ('qry_rolesall','');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }
    
    function da_registrarUsuarios($txtdniruc, $txtusuario, $txtcontrasena, $cbo_tipousuarios) {
        $instruccion = "CALL sim_sp_ins_usuarios('ins_usuarios','" . $txtdniruc . "','" . $txtusuario . "','" . $txtcontrasena . "','" . $cbo_tipousuarios . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function da_estadoAreas($nidarea) {

        $instruccion = "CALL sim_sp_upd_usuarios ('upd_estadoUsuarios','" . $nidarea . "','','','');";

        $query = $this->db->query($instruccion);
        $this->db->close();

        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function dbeditarArea($nidganadores) {

        $instruccion = "CALL SP_S_Ganadores ('edt_ganadores','" . $nidganadores . "');";

        $query = $this->db->query($instruccion);
        $this->db->close();

        if ($query) {
            return ($query->row_array());
        } else {
            return 0;
        }
    }

    function dblistarareaxid($txtbuscarArea) {
        $instruccion = "CALL sim_sp_qry_areas ('qry_areasxid','" . $txtbuscarArea . "');";
        $query = $this->db->query($instruccion);
        $this->db->close();
        if ($query) {
            return ($query->result_array());
        } else {
            return 0;
        }
    }

}

?>