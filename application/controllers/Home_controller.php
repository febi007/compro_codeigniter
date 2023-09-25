<?php

class Home_controller extends CI_Controller{
   

    public function index(){
        $data['dataAbout'] = $this->Mcrud->tampilAbout();
        $data['dataBeranda'] = $this->Mcrud->tampilBeranda();
        $data['dataExperience'] = $this->Mcrud->tampilExperience()->result();
        $data['dataSkill'] = $this->Mcrud->tampilSkill()->result();
        $data['dataPort'] = $this->Mcrud->tampilPort()->result();
        $data['dataTest'] = $this->Mcrud->tampilTest()->result();
        $data['pages'] = 'home';
        $data['isi'] = 'pages/fo/index';
        // var_dump($data);die();
        $this->load->view('layout/wrapper.php', $data);
    }
}

?>