<?php

class Cargas {

    //Crear menu de opciones por tipo de opciones

    public function cargaropcionpadre() {
        $CI = & get_instance();
        $CI->load->model('dashboard/menu_model', 'cargaropcionpadre');
        return $CI->cargaropcionpadre->da_cargaropcionpadre();
    }

    public function cargaropcionhijo() {
        $CI = & get_instance();
        $CI->load->model('dashboard/menu_model', 'cargaropcionhijo');
        return $CI->cargaropcionhijo->da_cargaropcionhijo();
    }

}
