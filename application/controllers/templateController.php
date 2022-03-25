<?php
class templateController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
    }
 
    function index(){
          $data['title']   = "Template";
          $data['content'] = "Download Template";
        $this->load->view('templates',$data);
    }

    function templates(){
        $this->load->library('cetak_pdf');
          $this->cetak_pdf->setPaper('A4', 'potrait');
          $this->cetak_pdf->filename = "ShippingLabel.pdf";
          $this->cetak_pdf->load_view('ShippingLabel');
        } 

    function sec_templates(){
        $this->load->library('cetak_pdf');
          $this->cetak_pdf->setPaper('A4', 'potrait');
          $this->cetak_pdf->filename = "Kwitansi.pdf";
          $this->cetak_pdf->load_view('Kwitansi');
        } 

    function thr_templates(){
        $this->load->library('cetak_pdf');
          $this->cetak_pdf->setPaper('A4', 'potrait');
          $this->cetak_pdf->filename = "SPK.pdf";
          $this->cetak_pdf->load_view('SPK');
        } 

    function fth_templates(){
        $this->load->library('cetak_pdf');
          $this->cetak_pdf->setPaper('A4', 'potrait');
          $this->cetak_pdf->filename = "BAST.pdf";
          $this->cetak_pdf->load_view('BAST');
        } 
}