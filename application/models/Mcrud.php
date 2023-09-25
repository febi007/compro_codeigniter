<?php

class Mcrud extends CI_Model{
    function tampilAbout(){
        $query = $this->db->get('about');
        return $result=$query->row();
    }
    function tampilExperience(){
        return $this->db->get('experience');
    }
    function tampilSkill(){
        return $this->db->get('skill');
    }
    function tampilPort(){
        return $this->db->get('portfolio');
    }
    function tampilTest(){
        return $this->db->get('testimoni');
    }
    function tampilBeranda(){
        $query = $this->db->get('beranda');
        return $result=$query->row();
        }
}

?>