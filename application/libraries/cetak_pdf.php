<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// panggil autoload dompdf nya
use Dompdf\Dompdf;
use Dompdf\Options;
class cetak_pdf extends Dompdf{

    protected $ci;
    /**
     * PDF filename
     * @var String
     */
    public $filename;
    public function __construct(){
        parent::__construct();
        $this->filename = "template.pdf";
    }
    /**
     * Get an instance of CodeIgniter
     *
     * @access    protected
     * @return    void
     */
    protected function ci()
    {
        return get_instance();
    }
    /**
     * Load a CodeIgniter view into domPDF
     *
     * @access    public
     * @param    string    $view The view to load
     * @param    array    $data The view data
     * @return    void
     */
    public function load_view($view, $data = array()){
    $options = new Options();
      $options->setChroot(FCPATH); 
      $options->setDefaultFont('arial');

      $this->setOptions($options);
        $html = $this->ci()->load->view($view, $data, TRUE);
        $this->load_html($html);
        $this->render();
        $this->stream($this->filename, array("Attachment" => false));
    }
}