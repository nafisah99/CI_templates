<?php
class pdf_templates extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
 
    function templates(){
        $data['title']   = "Template";
        $data['content'] = "Doenload Template";
        $this->load->view('template_pertama',$data);
    }

 
}